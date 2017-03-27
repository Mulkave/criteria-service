<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Facebook\Jobs\GetTrellisInterestsForFacebookJob;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class GetTrellisInterestsForFacebookFeature extends Feature
{
    public function handle()
    {
        $interests = $this->run(GetTrellisInterestsForFacebookJob::class);

        return $this->run(new RespondWithJsonJob($interests));
    }
}
