<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'passport_no' => 'nullable|string|max:255',
            'nid_no' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'district_id' => 'required|exists:districts,id',
            'note' => 'nullable|string',
            'description' => 'nullable|string',
            'agent_id' => 'required|exists:agents,id',
            'status' => 'required|string|in:Processing,Success,Failed',
            'contract_price' => 'nullable|numeric',
            'paid' => 'nullable|numeric',
            'due' => 'nullable|numeric',
        ];
    }
}
