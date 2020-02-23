<?php

namespace App\Http\Requests;

/**
 * Class CustomerRequest
 */
class CustomerRequest extends ApiRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'string',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required!',
            'email.required' => 'Email is required!',
            'phone.string' => 'Phone should be sting'
        ];
    }
}
