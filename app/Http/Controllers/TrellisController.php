<?php

namespace Trellis\Criteria\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Trellis\Criteria\Features\GetTrellisInterestFeature;
use Trellis\Criteria\Features\ListTrellisInterestsFeature;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class TrellisController extends Controller
{
    /**
     * List Trellis Interests.
     *
     * @api {get} /interests List Trellis Interests
     * @apiName ListTrellisInterests
     * @apiGroup Trellis
     * @apiVersion 1.0.0
     *
     * @apiSuccessExample {json} Response
     * HTTP/1.1 200 OK
     *
     * {
     *     "status": 200,
     *     "data": [TrellisInterest],
     *     "total": 1
     * }
     *
     * @apiUse TrellisInterestResponse
     *
     * @apiDescription
     * List all Trellis interests.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return $this->serve(ListTrellisInterestsFeature::class);
    }

    /**
     * Get specific Trellis Interests.
     *
     * @api {get} /interests/{id} Get Specific Trellis Interests
     * @apiName GetSpecificTrellisInterests
     * @apiGroup Trellis
     * @apiVersion 1.0.0
     *
     * @apiParam (url) {String} id The trellis interest `id`. You can specify multiple interests comma seperated. eg. 7c836322-6cd9-4521-b947-ca59a2a5de1f,dc1511d3-9059-4368-85a4-6a080cb2aaa1
     *
     * @apiSuccessExample {json} Response
     * HTTP/1.1 200 OK
     *
     * {
     *     "status": 200,
     *     "data": [TrellisInterest],
     *     "total": 1
     * }
     *
     * @apiUse TrellisInterestResponse
     *
     * @apiDescription
     * Get specific trellis interests.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($interest)
    {
        return $this->serve(GetTrellisInterestFeature::class, compact('interest'));
    }
}
