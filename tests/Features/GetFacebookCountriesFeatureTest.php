<?php

namespace Trellis\Criteria\Tests\Features;

use Config;
use TestCase;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookCountriesFeatureTest extends TestCase
{
    public function test_getfacebookcountriesfeature()
    {
        $this->visit('/criteria/facebook/countries')
            ->seeJson([
                'status' => 200,
                'data' => Config::get('criteria.facebook.countries'),
            ]);
    }
}
