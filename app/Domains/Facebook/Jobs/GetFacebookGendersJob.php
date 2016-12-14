<?php

namespace Trellis\Criteria\Domains\Facebook\Jobs;

use Config;
use Lucid\Foundation\Job;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookGendersJob extends Job
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return array_map(function ($gender) {
           return $gender['title'];
        }, Config::get('criteria.facebook.genders'));
    }
}
