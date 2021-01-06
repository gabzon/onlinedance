<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'nickname' => ['string', 'max:50'],
            'slug' => ['required', 'string', 'max:130'],
            'bio' => ['string'],
            'img_landscape' => ['string'],
            'img_portrait' => ['string'],
            'video_interview' => ['string'],
            'facebook' => ['string'],
            'instagram' => ['string'],
            'twitter' => ['string'],
            'tiktok' => ['string'],
            'youtube' => ['string'],
            'phone' => ['string'],
            'email' => ['email'],
        ];
    }
}
