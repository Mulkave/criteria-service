<?php

namespace Trellis\Criteria\Tests\Features;

use Config;
use TestCase;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookAgeGroupsFeatureTest extends TestCase
{
    public function test_getfacebookagegroupsfeature()
    {
        $this->visit('/criteria/facebook/age-groups')
            ->seeJson([
                'status' => 200,
                'data' => Config::get('criteria.facebook.age_groups'),
            ]);
    }
}
