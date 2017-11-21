<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;
use Trellis\Criteria\Domains\Instagram\Jobs\ListTrellisInterestsForInstagramJob;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class ListTrellisInterestsForInstagramFeature extends Feature
{
    public function handle()
    {
        $interests = $this->run(ListTrellisInterestsForInstagramJob::class);

        return $this->run(new RespondWithJsonJob($interests));
    }
}
