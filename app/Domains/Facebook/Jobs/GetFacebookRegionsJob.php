<?php

namespace Trellis\Criteria\Domains\Facebook\Jobs;

use Config;
use Lucid\Foundation\Job;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookRegionsJob extends Job
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Config::get('criteria.facebook.regions');
    }
}
