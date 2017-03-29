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
 * Instagram Interests Mapper.
 *
 * @author Charalampos Raftopoulos <harris@vinelab.com>
 */
class InstagramInterestsMapper
{
    /**
     * @apiDefine InstagramInterestMapper
     * @apiVersion 1.0.0
     * @apiParam (InstagramInterest Object) {string[]} data
     */
    /**
     * @apiDefine InstagramInterestResponse
     * @apiVersion 1.0.0
     * @apiSuccessExample {json} InstagramInterest
     *   {
     *    "id": "2dfad0e4f82a-7537-2dfad0e4f82a-2dfad0e4f82a",
     *    "platform_id":
     *    {
     *        "Shopping",
     *    },
     *    "title": "Shopping"
     *  },
     *  {
     *    "id": "2dfad0e4f82a-9059-4368-85a4-2dfad0e4f82a",
     *    "platform_id":
     *    {
     *        "Fashion",
     *    },
     *    "title": "Fashion"
     *  },
     */
    public function map()
    {
    }
}
