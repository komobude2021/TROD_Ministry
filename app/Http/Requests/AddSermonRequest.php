<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSermonRequest extends FormRequest
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
            'title' => ['required'],
            'video_url' => ['required', 'url'],
            'timer' => ['required'],
            'thumbnail_image' => ['required', 'image', 'max:100', 'mimes:webp']
        ];
    }
}
