<?php

namespace Trellis\Criteria\Tests\Features;

use Config;
use TestCase;

class GetFacebookGendersFeatureTest extends TestCase
{
    public function test_getfacebookgendersfeature()
    {
        $genders = array_map(function ($gender) {
            return $gender['title'];
        }, Config::get('criteria.facebook.genders'));

        $this->visit('/criteria/facebook/genders')
            ->seeJson([
                'status' => 200,
                'data' => $genders,
            ]);
    }
}
