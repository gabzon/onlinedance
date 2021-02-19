<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;
    use Sluggable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'thumbnail',
        'portrait',
        'video',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }

    public function hasInstructor($id)
    {
        return in_array($id, $this->instructors()->pluck('instructor_id')->toArray());
    }

    public function hasCourse($id)
    {
        return in_array($id, $this->courses()->pluck('course_id')->toArray());
    }
}
