<?php

namespace Trellis\Criteria\Features;

use Lucid\Foundation\Feature;
use Trellis\Criteria\Domains\Facebook\Jobs\GetFacebookGendersJob;
use Trellis\Criteria\Domains\Http\Jobs\RespondWithJsonJob;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class GetFacebookGendersFeature extends Feature
{
    public function handle()
    {
        $genders = $this->run(GetFacebookGendersJob::class);

        return $this->run(new RespondWithJsonJob($genders));
    }
}
