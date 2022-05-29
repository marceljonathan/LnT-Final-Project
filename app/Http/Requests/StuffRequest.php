<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StuffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kategori' => 'required|string',
            'nama' => 'required|string|min:5|max:80',
            'harga' => 'required|integer',
            'jumlah' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'kategori.required' => 'Kategori barang harus diisi',
            'nama.required' => 'Nama barang harus diisi dengan 5-80 kata',
            'harga.required' => 'Harga barang harus diisi dan hanya menggunakan angka',
            'jumlah.required' => 'Jumlah barang harus diisi dan hanya menggunakan angka'
        ];
    }
}
