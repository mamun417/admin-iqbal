<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
            'district_id' => 'required|exists:districts,id',
            'name' => 'required',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        if (request()->isMethod('post')) {
            $rules['email'] = 'required|email|unique:agents,email';
            $rules['phone'] = 'required|unique:agents,phone';
        }

        if (request()->isMethod('put')) {
            $rules['email'] = 'required|email|unique:agents,email'. $this->route('agent')->id;
            $rules['phone'] = 'required|unique:agents,phone,' . $this->route('agent')->id;
        }

        return $rules;
    }
}
