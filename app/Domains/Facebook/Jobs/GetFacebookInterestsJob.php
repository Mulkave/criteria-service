<?php
namespace Trellis\Criteria\Domains\Facebook\Jobs;

use Config;
use Lucid\Foundation\Job;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookInterestsJob extends Job
{
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Config::get('criteria.facebook.interests');
    }
}
