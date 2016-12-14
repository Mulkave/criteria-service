<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;
use Trellis\Criteria\Domains\Facebook\Jobs\GetFacebookInterestsJob;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookInterestsFeature extends Feature
{
    public function handle()
    {
        $interests = $this->run(GetFacebookInterestsJob::class);

        return $this->run(new RespondWithJsonJob($interests));
    }
}
