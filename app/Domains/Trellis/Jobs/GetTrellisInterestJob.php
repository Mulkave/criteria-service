<?php

namespace Trellis\Criteria\Domains\Trellis\Jobs;

use Config;
use Lucid\Foundation\Job;

class GetTrellisInterestJob extends Job
{
    private $interest;

    /**
     * Create a new job instance.
     */
    public function __construct($interest)
    {
        $this->interest = $interest;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $interests = Config::get('criteria.trellis.interests');

        $platformInterests = Config::get('criteria.trellis.platform_interests');

        $result = [];

        foreach ($interests as $interest) {
            foreach ($this->interest as $clientInterest) {
                if ($interest['id'] == $clientInterest) {
                    $result[$interest['id']] = $platformInterests[$clientInterest];
                    $result[$interest['id']]['title'] = $interest['title'];
                }
            }
        }

        return $result;
    }
}
