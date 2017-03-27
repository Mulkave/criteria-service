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
            $finalInterests[$interest['title']] = $interest['id'];
        }

        $result = [
            'value' => null,
        ];

        if (array_key_exists($this->interest, $finalInterests)) {
            $result = [
                'value' => $finalInterests[$this->interest]
            ];
        }

        return $result;
    }
}
