<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PelayanRequest extends FormRequest
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
            'nama'   => ['required', Rule::unique('pelayans')->ignore($this->id)],            
            'jenis_kelamin' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nama.required' => 'Nama pelayan perlu disini',
            'nama.unique' => 'Nama tersebut sudah terdaftar bekerja disini',
            'jenis_kelamin.kelamin' => 'Kenapa bisa? apa yang kamu lakukan?'
        ];
    }
}
