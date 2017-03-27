<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Facebook\Jobs\ListTrellisInterestsForFacebookJob;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class ListTrellisInterestsForFacebookFeature extends Feature
{
    public function handle()
    {
        $interests = $this->run(ListTrellisInterestsForFacebookJob::class);

        return $this->run(new RespondWithJsonJob($interests));
    }
}
