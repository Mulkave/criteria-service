<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;
use Trellis\Criteria\Domains\Facebook\Jobs\GetFacebookRegionsJob;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookRegionsFeature extends Feature
{
    public function handle()
    {
        $regions = $this->run(GetFacebookRegionsJob::class);

        return $this->run(new RespondWithJsonJob($regions));
    }
}
