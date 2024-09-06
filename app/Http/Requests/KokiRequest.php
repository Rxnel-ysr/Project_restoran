<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class KokiRequest extends FormRequest
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
            'nama'   => ['required', Rule::unique('kokis')->ignore($this->id)],
            'divisi' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nama.required' => 'Nama perlu diisi',
            'nama.unique' => 'Nama tersebut sudah terdaftar bekerja disini',
            'divisi.rquired' => 'Kenapa bisa? apa yang kamu lakukan?'
        ];
    }
}
