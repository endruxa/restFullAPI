<?php

namespace App\Http\Requests;

/**
 * Class FreelancerRequest
 */
class FreelancerRequest extends ApiRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'price' => 'required|int',
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
            'name.required' => 'Name required!',
            'price.required' => 'Price required!',
            'email.required' => 'Email required!',
            'phone.string' => 'Phone should be sting'
        ];
    }
}
