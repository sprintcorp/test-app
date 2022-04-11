<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->isMethod('PUT')) {
            return [
                'employee_id' => 'required|string|unique:users,employee_id,'.request()->route('id'),
                'email' => 'required|string|email|max:100|unique:users,email,'.request()->route('id'),
                'username' => 'required|string|unique:users,username,'.request()->route('id'),
                'phone' => 'required|string|unique:users,phone,'.request()->route('id'),
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'password' => 'nullable|string|confirmed|min:8',
                'role' => 'required|exists:roles,id'
            ];
        }
        return [
            'employee_id' => 'required|string|unique:users,deleted_at,NULL',
            'email' => 'required|string|email|max:100|unique:users,deleted_at,NULL',
            'username' => 'required|string|unique:users,deleted_at,NULL',
            'phone' => 'required|string|unique:users,deleted_at,NULL',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'password' => 'required|string|confirmed|min:8',
            'role' => 'required|exists:roles,id'
        ];
    }
}
