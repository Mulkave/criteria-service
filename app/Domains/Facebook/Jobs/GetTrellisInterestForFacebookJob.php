<?php

namespace Trellis\Criteria\Domains\Facebook\Jobs;

use Config;
use Lucid\Foundation\Job;

class GetTrellisInterestForFacebookJob extends Job
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
        $interests = Config::get('criteria.trellis.facebook.interests');

        foreach ($interests as $interest) {
            $finalInterests[$interest['title']] = [
                'id' => $interest['id'],
                'platform_id' => $interest['platform_id'],
            ];
        }

        foreach ($this->interest as $interest) {
            if (array_key_exists($interest, $finalInterests)) {
                $result[$interest] = $finalInterests[$interest];
            }
        }

        if (!isset($result) || empty($result)) {
            $result = [];
        }

        return $result;
    }
}
