<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile_number' => ['required', 'min:8', 'max: 13'],
            'occupation' => ['required'],
            //'vaccine_brand' => ['required', 'exists:vaccine_types,id'],
            //'proof_of_vaccination' => ['required', 'file', 'mimes:pdf,png,jpg,xls,xlsx'],
            'gender' => ['required', 'in:male,female'],
            //'latest_dosage_date' => 'required',
        ];
    }
}
