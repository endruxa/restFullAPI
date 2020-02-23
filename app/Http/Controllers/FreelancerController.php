<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\Http\Requests\FreelancerRequest;

/**
 * Class FreelancerController
 */
class FreelancerController
{
    /**
     * FreelancerController constructor.
     * @param Freelancer $model
     */
    public function __construct(Freelancer $model) {

        $this->model = $model;
    }

    /**
     * @param FreelancerRequest $request
     *
     * @return mixed
     */
    public function createFreelancer(FreelancerRequest $request) {

        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param FreelancerRequest $request
     *
     * @return mixed
     */
    public function updateFreelancer(int $entityId, FreelancerRequest $request) {

        return parent::update($entityId, $request);
    }
}
