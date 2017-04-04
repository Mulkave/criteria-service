<?php
/*
 * This file is part of the Trellis Audience service.
 *
 * (c) Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Trellis\Critera\Mappers;

/**
 * Facebook Interests Mapper.
 *
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class TrellisInterestsMapper
{
    /**
     * @apiDefine TrellisInterestMapper
     * @apiVersion 1.0.0
     * @apiParam (TrellisInterest Object) {string[]} data
     */
    /**
     * @apiDefine TrellisInterestResponse
     * @apiVersion 1.0.0
     * @apiSuccessExample {json} TrellisInterest
     *   {
     *    "2dfad0e4f82a-7537-2dfad0e4f82a-2dfad0e4f82a": {
     *        "facebook": ["2dfad0e4f82a-7537-2dfad0e4f82a-2dfad0e4f82a"],
     *        "instagram": ["Shopping"]
     *  },
     *   {
     *    "2dfad0e4f82a-7537-2dfad0e4f82a-2dfad0e4f82a": {
     *        "facebook": ["123123213-7537-234234234-34j3453j"],
     *        "instagram": ["Fashion"]
     *  },
     */
    public function map()
    {
    }
}
