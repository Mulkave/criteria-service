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
class FacebookInterestsMapper
{
    /**
     * @apiDefine FacebookInterestMapper
     * @apiVersion 1.0.0
     * @apiParam (FacebookInterest Object) {string[]} data
     */
    /**
     * @apiDefine FacebookInterestResponse
     * @apiVersion 1.0.0
     * @apiSuccessExample {json} FacebookInterest
     *   {
     *    "id": "2dfad0e4f82a-7537-2dfad0e4f82a-2dfad0e4f82a",
     *    "platform_id": "6003263791114",
     *    "title": "Shopping"
     *  },
     *  {
     *    "id": "2dfad0e4f82a-9059-4368-85a4-2dfad0e4f82a",
     *    "platform_id": "6003456388203_6003348604581",
     *    "title": "Fashion"
     *  },
     */
    public function map()
    {
    }
}
