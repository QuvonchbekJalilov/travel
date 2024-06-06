<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_uz' => 'string',
            'title_ru' => 'string',
            'title_en' => 'string',
            'content_uz' => 'string|nullable',
            'content_ru' => 'string|nullable',
            'content_en' => 'string|nullable',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:4048'  
        ];
    }
}
