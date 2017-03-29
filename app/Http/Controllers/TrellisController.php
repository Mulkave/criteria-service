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
     * List Facebook Interests.
     *
     * @api {get} /interests/facebook List Facebook Interests
     * @apiName ListFacebookInterests
     * @apiGroup Facebook
     * @apiVersion 1.0.0
     *
     * @apiSuccessExample {json} Response
     * HTTP/1.1 200 OK
     *
     * {
     *     "status": 200,
     *     "data": [FacebookInterest],
     *     "total": 1
     * }
     *
     * @apiUse FacebookInterestResponse
     *
     * @apiDescription
     * List all facebook interests.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return $this->serve(ListTrellisInterestsFeature::class);
    }

    /**
     * Get specific Facebook Interests.
     *
     * @api {get} /interests/{id}/facebook Get Specific Facebook Interests
     * @apiName GetSpecificFacebookInterests
     * @apiGroup Facebook
     * @apiVersion 1.0.0
     *
     * @apiParam (url) {String} id The targeted interest `id`. You can specify multiple interests comma seperated. eg. Beauty,Fashion
     *
     * @apiSuccessExample {json} Response
     * HTTP/1.1 200 OK
     *
     * {
     *     "status": 200,
     *     "data": [FacebookInterest],
     *     "total": 1
     * }
     *
     * @apiUse FacebookInterestResponse
     *
     * @apiDescription
     * Get specific facebook interests.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($interest)
    {
        return $this->serve(GetTrellisInterestFeature::class, compact('interest'));
    }
}
