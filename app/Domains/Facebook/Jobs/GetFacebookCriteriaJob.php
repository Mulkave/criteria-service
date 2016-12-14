<?php

namespace Trellis\Criteria\Domains\Facebook\Jobs;

use Config;
use Lucid\Foundation\Job;

class GetFacebookCriteriaJob extends Job
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Config::get('criteria.facebook');
    }
}
