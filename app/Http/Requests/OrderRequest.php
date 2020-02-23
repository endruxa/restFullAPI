<?php

namespace App\Http\Requests;

/**
 * Class OrderRequest
 */
class OrderRequest extends ApiRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'description'  => 'required|string',
            'customer_id' =>  'required|int',
            'application_id' => 'required|int',
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
            'description.required' => 'Description required!',
            'customer_id.required' => 'Customer id required!',
            'application_id.required' => 'Application required'
        ];
    }
}
