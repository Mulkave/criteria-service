<?php

namespace Trellis\Criteria\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Trellis\Criteria\Features\GetFacebookGendersFeature;
use Trellis\Criteria\Features\GetFacebookRegionsFeature;
use Trellis\Criteria\Features\GetFacebookAgeGroupsFeature;
use Trellis\Criteria\Features\GetFacebookCountriesFeature;
use Trellis\Criteria\Features\GetFacebookInterestsFeature;
use Trellis\Criteria\Features\GetAllFacebookCriteriaFeature;

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
}
