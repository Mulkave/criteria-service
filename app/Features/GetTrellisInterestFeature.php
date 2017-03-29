<?php

namespace Trellis\Criteria\Features;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonErrorJob;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;
use Trellis\Criteria\Domains\Trellis\Jobs\GetTrellisInterestJob;

class GetTrellisInterestFeature extends Feature
{
    private $interest;

    public function __construct($interest)
    {
        $this->interest = $interest;
    }

    public function handle(Request $request)
    {
        $id = $this->run(GetTrellisInterestJob::class, ['interest' => array_filter(explode(',', $this->interest))]);

        if ($id) {
            $response = $this->run(new RespondWithJsonJob($id));
        } else {
            $response = $this->run(new RespondWithJsonErrorJob([trans('messages.trellis.interest_not_found')]));
        }

        return $response;
    }
}
