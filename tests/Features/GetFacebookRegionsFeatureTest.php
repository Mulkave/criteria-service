<?php

namespace Trellis\Criteria\Tests\Features;

use Config;
use TestCase;

class GetFacebookRegionsFeatureTest extends TestCase
{
    public function test_getfacebookregionsfeature()
    {
        $this->visit('/criteria/facebook/regions')
            ->seeJson([
                'status' => 200,
                'data' => Config::get('criteria.facebook.regions'),
            ]);
    }
}
