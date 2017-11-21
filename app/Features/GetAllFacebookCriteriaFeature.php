<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;
use Trellis\Criteria\Domains\Facebook\Jobs\GetFacebookCriteriaJob;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetAllFacebookCriteriaFeature extends Feature
{
    public function handle()
    {
        $criteria = $this->run(GetFacebookCriteriaJob::class);

        return $this->run(new RespondWithJsonJob($criteria));
    }
}
