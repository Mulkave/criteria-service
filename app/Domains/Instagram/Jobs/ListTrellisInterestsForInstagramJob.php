<?php

namespace Trellis\Criteria\Domains\Instagram\Jobs;

use Config;
use Lucid\Foundation\Job;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class ListTrellisInterestsForInstagramJob extends Job
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Config::get('criteria.trellis.instagram.interests');
    }
}
