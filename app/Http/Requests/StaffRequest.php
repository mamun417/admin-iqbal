<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
        ];

        if (request()->isMethod('post')) {
            $rules['email'] = 'required|email|unique:admins,email';
        }

        if (request()->isMethod('put')) {
            $rules['email'] = 'required|email|unique:admins,email,' . $this->route('staff')->id;
        }

        return $rules;
    }
}
