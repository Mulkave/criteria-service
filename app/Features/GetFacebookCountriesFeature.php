<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;
use Trellis\Criteria\Domains\Facebook\Jobs\GetFacebookCountriesJob;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookCountriesFeature extends Feature
{
    public function handle()
    {
        $countries = $this->run(GetFacebookCountriesJob::class);

        return $this->run(new RespondWithJsonJob($countries));
    }
}
