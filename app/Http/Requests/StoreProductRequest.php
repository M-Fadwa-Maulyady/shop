<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'kode_p'    => 'required|string|max:50',
            'nama_p'   => 'required|string|max:30',
            'kategori_p'  => 'required|string|max:20',
            'harga_p' => 'required|string|max:15', // Ubah menjadi string
            'stok_p'=> 'required|min:1|max:10',
        ];
    }

    public function messages(): array
    {
        return [
            'kode_p.required'    => 'Kode Produck wajib diisi.',
            'nama_p.required'   => 'Nama Product wajib diisi.',
            'kategori_p.required'  => 'Kategori Product wajib diisi.',
            'harga_p.required' => 'Harga Product wajib diisi.',
            'stok_p.required'=> 'stok Product wajib diisi.',
        ];
    }
}