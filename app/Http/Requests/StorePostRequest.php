<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:8'],
            'image' => ['nullable', 'image'],
            'description' => ['required', 'min:20', 'max:255'],
            'content' => ['required'],
            'view' => ['required', 'integer', 'min:0'],
        ];
        

    }
    // thông báo lỗi khi validate
    public function messages()
        {
            return [
                'title.required' => "Tiêu đề không được để trống",
                'title.min' => "Tiêu đề ít nhất phải từ 8 kí tự",
                'image.image' => "File không phải hình ảnh",
                'description.required' => "Mô tả không được để trống", 
                'description.min' => "Mô tả ít nhất phải từ 20 kí tự", 
                'description.max' => "Mô tả khong được quá 255 kí tự",               
                'content.required' => "Nội dung không được để trống", 
                'view.required' => "Lượt xem không được để trống",               
                'view.integer' => "Lượt xem phải là số nguyên",               
                'view.min' => "Lượt xem phải >=0",      
            ];
        }
}
