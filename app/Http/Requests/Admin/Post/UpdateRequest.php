<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Це поле є необхідним для заповнення',
            'title.string' => 'Данні в цьому полі повинні бути строкового типу',
            'preview_image.required' => 'Це поле є необхідним для заповнення',
            'preview_image.file' => 'Потрібно вибрати файл',
            'main_image.required' => 'Це поле є необхідним для заповнення',
            'main_image.file' => 'Потрібно вибрати файл',
            'category_id.required' => 'Це поле є необхідним для заповнення',
            'category_id.integer' => 'ID категорії повинно бути числом',
            'category_id.exists' => 'ID категорії мають бути в базі даних',
            'tag_ids.array' => 'Потрібно відправити масив данних',
        ];
    }
}
