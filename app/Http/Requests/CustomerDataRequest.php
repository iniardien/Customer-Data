<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerDataRequest extends FormRequest
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
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'usia' => 'required|integer',
            'berat_badan' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama tidak boleh kosong.',
            'no_telp.required' => 'No Telp tidak boleh kosong.',
            'alamat.required' => 'Alamat tidak boleh kosong.',
            'usia.required' => 'Usia tidak boleh kosong.',
            'berat_badan.required' => 'Berat Badan tidak boleh kosong.',
        ];
    }
}
