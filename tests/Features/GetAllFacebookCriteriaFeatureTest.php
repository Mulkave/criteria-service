<?php

namespace Trellis\Criteria\Tests\Features;

use Config;
use TestCase;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetAllFacebookCriteriaFeatureTest extends TestCase
{
    public function test_getallfacebookcriteriafeature()
    {
        $this->visit('/criteria/facebook')
            ->seeJson([
                'status' => 200,
                'data' => Config::get('criteria.facebook'),
            ]);
    }
}
