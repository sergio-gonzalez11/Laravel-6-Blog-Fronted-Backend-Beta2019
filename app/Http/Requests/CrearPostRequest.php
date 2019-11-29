<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class crearPostRequest extends FormRequest
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
            
            'image' => 'required|image|mimes:jpg,jpeg,png|max:3000',
            'title' => 'required|string|min:4|max:192',
            'description_post' => 'required|string|min:50|max:1000',
            'recomendations' => 'required|string|min:5|max:500',
            'user_id' => 'required','exists:users,id',
            'category_id' => 'required','exists:categories,id',
        ];
    }
}
