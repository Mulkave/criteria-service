<?php

namespace Trellis\Criteria\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Trellis\Criteria\Features\GetTrellisInterestForInstagramFeature;
use Trellis\Criteria\Features\ListTrellisInterestsForInstagramFeature;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class InstagramController extends Controller
{
    /**
     * List Instagram Interests.
     *
     * @api {get} /interests/instagram List Instagram Interests
     * @apiName ListInstagramInterests
     * @apiGroup Instagram
     * @apiVersion 1.0.0
     *
     * @apiSuccessExample {json} Response
     * HTTP/1.1 200 OK
     *
     * {
     *     "status": 200,
     *     "data": [InstagramInterest],
     *     "total": 1
     * }
     *
     * @apiUse InstagramInterestResponse
     *
     * @apiDescription
     * List all instagram interests.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return $this->serve(ListTrellisInterestsForInstagramFeature::class);
    }

    /**
     * Get specific Instagram Interests.
     *
     * @api {get} /interests/{id}/instagram Get Specific Instagram Interests
     * @apiName GetSpecificInstagramInterests
     * @apiGroup Instagram
     * @apiVersion 1.0.0
     *
     * @apiParam (url) {String} id The targeted interest `id`. You can specify multiple interests comma seperated. eg. Beauty,Fashion
     *
     * @apiSuccessExample {json} Response
     * HTTP/1.1 200 OK
     *
     * {
     *     "status": 200,
     *     "data": [InstagramInterest],
     *     "total": 1
     * }
     *
     * @apiUse InstagramInterestResponse
     *
     * @apiDescription
     * Get specific instagram interests.
     *
     * @return \Illuminate\Http\Response
     */
    public function interests($interest)
    {
        return $this->serve(GetTrellisInterestForInstagramFeature::class, compact('interest'));
    }
}
