<?php

namespace Trellis\Criteria\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Trellis\Criteria\Features\GetTrellisInterestForInstagramFeature;
use Trellis\Criteria\Features\ListTrellisInterestsForInstagramFeature;

/**
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class InstagramController extends Controller
{
    public function all()
    {
        return $this->serve(ListTrellisInterestsForInstagramFeature::class);
    }

    public function interests($interest)
    {
        return $this->serve(GetTrellisInterestForInstagramFeature::class, compact('interest'));
    }
}
