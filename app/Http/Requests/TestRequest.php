<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            //
            'questions'=>'required|string|max:40',
        ];
    }

    // {{$message}}تظهر في 
    public function messages(): array
    {
        return [
            // بدال ما أكتب
            // name.max و address.max 
            // فبكتب 
            'max'=>'هذا الحقل طويل',
            'required'=>'هذا الحقل مطلوب',
        ];
    }
}
