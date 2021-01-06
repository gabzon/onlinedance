<?php

namespace Tests\Feature\Http\Controllers;

use App\Instructor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\InstructorController
 */
class InstructorControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $instructors = Instructor::factory()->count(3)->create();

        $response = $this->get(route('instructor.index'));

        $response->assertOk();
        $response->assertViewIs('instructor.index');
        $response->assertViewHas('instructors');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('instructor.create'));

        $response->assertOk();
        $response->assertViewIs('instructor.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InstructorController::class,
            'store',
            \App\Http\Requests\InstructorStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $first_name = $this->faker->firstName;
        $last_name = $this->faker->lastName;
        $slug = $this->faker->slug;

        $response = $this->post(route('instructor.store'), [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'slug' => $slug,
        ]);

        $instructors = Instructor::query()
            ->where('first_name', $first_name)
            ->where('last_name', $last_name)
            ->where('slug', $slug)
            ->get();
        $this->assertCount(1, $instructors);
        $instructor = $instructors->first();

        $response->assertRedirect(route('instructor.index'));
        $response->assertSessionHas('instructor.id', $instructor->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $instructor = Instructor::factory()->create();

        $response = $this->get(route('instructor.show', $instructor));

        $response->assertOk();
        $response->assertViewIs('instructor.show');
        $response->assertViewHas('instructor');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $instructor = Instructor::factory()->create();

        $response = $this->get(route('instructor.edit', $instructor));

        $response->assertOk();
        $response->assertViewIs('instructor.edit');
        $response->assertViewHas('instructor');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InstructorController::class,
            'update',
            \App\Http\Requests\InstructorUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $instructor = Instructor::factory()->create();
        $first_name = $this->faker->firstName;
        $last_name = $this->faker->lastName;
        $slug = $this->faker->slug;

        $response = $this->put(route('instructor.update', $instructor), [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'slug' => $slug,
        ]);

        $instructor->refresh();

        $response->assertRedirect(route('instructor.index'));
        $response->assertSessionHas('instructor.id', $instructor->id);

        $this->assertEquals($first_name, $instructor->first_name);
        $this->assertEquals($last_name, $instructor->last_name);
        $this->assertEquals($slug, $instructor->slug);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $instructor = Instructor::factory()->create();

        $response = $this->delete(route('instructor.destroy', $instructor));

        $response->assertRedirect(route('instructor.index'));

        $this->assertDeleted($instructor);
    }
}
