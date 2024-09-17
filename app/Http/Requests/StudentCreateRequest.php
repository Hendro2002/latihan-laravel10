<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'nis' => 'unique:students|max:10|required',
            'name' => 'max:100|required',
            'gender' => 'required',
            'class_id' => 'required',
        ];
    }

    function messages()
    {
        return [
            'nis.max' => 'NIS tidak boleh lebih dari :max karakter',
            'nis.required' => 'NIS harus diisi',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'name.required' => 'Nama harus diisi',
            'gender.required' => 'Gender harus diisi',
            'class_id.required' => 'Class harus diisi'
        ];
    }
}
