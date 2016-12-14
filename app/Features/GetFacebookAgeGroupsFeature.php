<?php

namespace Trellis\Criteria\Features;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;
use Trellis\Criteria\Domains\Facebook\Jobs\GetFacebookAgeGroupsJob;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookAgeGroupsFeature extends Feature
{
    public function handle(Request $request)
    {
        $ageGroups = $this->run(GetFacebookAgeGroupsJob::class);

        return $this->run(new RespondWithJsonJob($ageGroups));
    }
}
