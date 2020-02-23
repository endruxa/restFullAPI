<?php

namespace App\Http\Requests;

/**
 * Class ApplicationRequest
 */
class ApplicationRequest extends ApiRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [

            'comment' => 'required|string',
            'freelancer_id'  =>  'required|int',
            'order_id' => 'required|int',
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
            'comment.required' => 'Comment required!',
            'freelancer_id.required' => 'Freelancer id required!',
            'order_id.required' => 'Order id required'
        ];
    }
}
