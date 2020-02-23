<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Api\ApiControllers;
use App\Http\Requests\CustomerRequest;

/**
 * Class CustomerController
 */
class CustomerController extends ApiControllers
{
    /**
     * CustomerController constructor.
     * @param Customer $model
     * @param CustomerRequest $request
     */
    public function __construct(Customer $model, CustomerRequest $request)
    {
        $this->model = $model;
        $this->request = $request;
    }
}
