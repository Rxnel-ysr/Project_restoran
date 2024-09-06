<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MinumanRequest extends FormRequest
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
            'menu'   => ['required', Rule::unique('minumans')->ignore($this->id)],
            'harga' => 'required|integer|min:3000|max:1000000'
        ];
    }

    public function messages()
    {
        return[
            'menu.required' => 'Nama makanan diperlukan',
            'menu.unique' => 'Nama makanan sudah ada',
            'harga.required' => 'Perusahaan juga butuh modal',
            'harga.min' => 'Setidaknya harga lebih dari 5000',
            'harga.max' => 'Kita cari nafkah, bukan perompak'
        ];
    }
}
