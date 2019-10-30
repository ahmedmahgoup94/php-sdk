<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
 *  SDK: 2.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;
use \Wallee\Sdk\ObjectSerializer;

/**
 * ProductMeteredTierPricing model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ProductMeteredTierPricing
{
    /**
     * Possible values of this enum
     */
    const CHEAPEST_TIER_PRICING = 'CHEAPEST_TIER_PRICING';
    const INCREMENTAL_DISCOUNT_PRICING = 'INCREMENTAL_DISCOUNT_PRICING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHEAPEST_TIER_PRICING,
            self::INCREMENTAL_DISCOUNT_PRICING,
        ];
    }
}


