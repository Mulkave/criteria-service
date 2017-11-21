<?php

namespace Trellis\Criteria\Domains\Facebook\Jobs;

use Config;
use Lucid\Foundation\Job;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class ListTrellisInterestsJob extends Job
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Config::get('criteria.trellis.interests');
    }
}
