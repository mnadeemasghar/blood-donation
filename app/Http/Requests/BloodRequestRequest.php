<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class BloodRequestRequest extends FormRequest
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
            'blood_type' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
            'city' => 'required',
            'area_in_city' => 'required',
            'building' => 'required',
            'required_before' => 'required|after:'.Carbon::now(),
            'contact_no' => 'required',
            'contact_person_name' => 'required'
        ];
    }
}
