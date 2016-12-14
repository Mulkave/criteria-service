<?php
namespace Trellis\Criteria\Tests\Features;

use Config;
use TestCase;
use Trellis\Criteria\Features\GetFacebookInterestsFeature;

class GetFacebookInterestsFeatureTest extends TestCase
{
    public function test_getfacebookinterestsfeature()
    {
        $this->visit('/criteria/facebook/interests')
            ->seeJson([
                'status' => 200,
                'data' => Config::get('criteria.facebook.interests'),
            ]);
    }
}
