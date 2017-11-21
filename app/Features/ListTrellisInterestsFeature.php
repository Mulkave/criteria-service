<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Facebook\Jobs\ListTrellisInterestsJob;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class ListTrellisInterestsFeature extends Feature
{
    public function handle()
    {
        $interests = $this->run(ListTrellisInterestsJob::class);

        return $this->run(new RespondWithJsonJob($interests));
    }
}
