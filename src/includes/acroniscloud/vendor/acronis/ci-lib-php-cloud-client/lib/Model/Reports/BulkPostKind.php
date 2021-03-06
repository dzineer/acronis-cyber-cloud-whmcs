<?php
/**
 * BulkPostKind
 *
 * PHP version 5
 *
 * @category Class
 * @package  Acronis\Cloud\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API v2 description for Multi-service Portal
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Acronis\Cloud\Client\Model\Reports;


/**
 * BulkPostKind Class Doc Comment
 *
 * @category    Class
 * @description Kind of report
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkPostKind
{
    /**
     * Possible values of this enum
     */
    const DAILY = 'usage_daily';
    const SUMMARY = 'usage_summary';
    const CURRENT = 'usage_current';
    const BREAKDOWN = 'usage_breakdown';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAILY,
            self::SUMMARY,
            self::CURRENT,
            self::BREAKDOWN,
        ];
    }
}


