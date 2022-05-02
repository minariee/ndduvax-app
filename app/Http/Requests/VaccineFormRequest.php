<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccineFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vaccine_type' => 'required',
            'vaccine_brand' => 'required|exists:vaccine_types,id',
            'dosage' => 'required',
            'latest_dosage_date' => 'required',
            'proof_of_vaccination' => 'required|file',
        ];
    }
}
