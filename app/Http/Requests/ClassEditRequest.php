<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassEditRequest extends FormRequest
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
            'name' => 'max:4|required',
            'teacher_id' => 'required',
        ];
    }

    function messages()
    {
        return [
            'name.max' => 'Nama kelas tidak boleh lebih dari :max karakter',
            'name.required' => 'Nama kelas harus diisi',
            'teacher_id.required' => 'Wali Kelas harus dipilih',
        ];
    }
}
