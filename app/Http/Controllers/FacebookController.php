<?php

namespace Trellis\Criteria\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Trellis\Criteria\Features\GetAllFacebookCriteriaFeature;
use Trellis\Criteria\Features\GetFacebookAgeGroupsFeature;
use Trellis\Criteria\Features\GetFacebookCountriesFeature;
use Trellis\Criteria\Features\GetFacebookGendersFeature;
use Trellis\Criteria\Features\GetFacebookInterestsFeature;
use Trellis\Criteria\Features\GetFacebookRegionsFeature;
use Trellis\Criteria\Features\GetTrellisInterestForFacebookFeature;
use Trellis\Criteria\Features\ListTrellisInterestsForFacebookFeature;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class FacebookController extends Controller
{
    public function all()
    {
        return $this->serve(GetAllFacebookCriteriaFeature::class);
    }

    public function genders()
    {
        return $this->serve(GetFacebookGendersFeature::class);
    }

    public function regions()
    {
        return $this->serve(GetFacebookRegionsFeature::class);
    }

    public function countries()
    {
        return $this->serve(GetFacebookCountriesFeature::class);
    }

    public function interests()
    {
        return $this->serve(GetFacebookInterestsFeature::class);
    }

    public function ageGroups()
    {
        return $this->serve(GetFacebookAgeGroupsFeature::class);
    }

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
    public function trellisFacebookInterests()
    {
        return $this->serve(ListTrellisInterestsForFacebookFeature::class);
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
    public function trellisFacebookInterest($interest)
    {
        return $this->serve(GetTrellisInterestForFacebookFeature::class, compact('interest'));
    }
}
