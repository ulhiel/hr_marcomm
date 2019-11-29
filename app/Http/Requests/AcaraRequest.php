<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcaraRequest extends FormRequest
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
            'acara_nama' => 'required',
            'prioritas_id' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat_acara' => 'required',
            'jumlah_personil' => 'required'
        ];
    }
}
