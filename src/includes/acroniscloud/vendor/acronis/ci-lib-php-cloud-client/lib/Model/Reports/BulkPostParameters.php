<?php
/**
 * BulkPostParameters
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

use Acronis\Cloud\Client\BaseModel;
/**
 * BulkPostParameters Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkPostParameters extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Reports\BulkPostParameters';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'tenant_ids' => 'string[]',
            'level' => '\Acronis\Cloud\Client\Model\Reports\BulkPostLevel',
            'kind' => '\Acronis\Cloud\Client\Model\Reports\BulkPostKind',
            'formats' => '\Acronis\Cloud\Client\Model\Reports\BulkPostItems[]',
            'period' => '\Acronis\Cloud\Client\Model\Reports\BulkPostPeriod'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'tenant_ids' => null,
            'level' => null,
            'kind' => null,
            'formats' => null,
            'period' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'tenant_ids' => 'tenant_ids',
            'level' => 'level',
            'kind' => 'kind',
            'formats' => 'formats',
            'period' => 'period'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'tenant_ids' => 'setTenantIds',
            'level' => 'setLevel',
            'kind' => 'setKind',
            'formats' => 'setFormats',
            'period' => 'setPeriod'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'tenant_ids' => 'getTenantIds',
            'level' => 'getLevel',
            'kind' => 'getKind',
            'formats' => 'getFormats',
            'period' => 'getPeriod'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'tenant_ids' => 'hasTenantIds',
            'level' => 'hasLevel',
            'kind' => 'hasKind',
            'formats' => 'hasFormats',
            'period' => 'hasPeriod'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'tenant_ids' => 'validateTenantIds',
            'level' => 'validateLevel',
            'kind' => 'validateKind',
            'formats' => 'validateFormats',
            'period' => 'validatePeriod'
        ];
    }

    

    

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!empty($this->validateTenantIds())) {
            $invalid_properties[] = $this->validateTenantIds();
        }
        if (!empty($this->validateLevel())) {
            $invalid_properties[] = $this->validateLevel();
        }
        if (!empty($this->validateKind())) {
            $invalid_properties[] = $this->validateKind();
        }
        if (!empty($this->validateFormats())) {
            $invalid_properties[] = $this->validateFormats();
        }
        if (!empty($this->validatePeriod())) {
            $invalid_properties[] = $this->validatePeriod();
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!empty($this->validateTenantIds())) {
            return false;
        }
        if (!empty($this->validateLevel())) {
            return false;
        }
        if (!empty($this->validateKind())) {
            return false;
        }
        if (!empty($this->validateFormats())) {
            return false;
        }
        if (!empty($this->validatePeriod())) {
            return false;
        }
        return true;
    }


    /**
     * Gets tenant_ids
     * @return string[]
     */
    public function getTenantIds()
    {
        return $this->offsetGet('tenant_ids');
    }

    /**
     * Checks tenant_ids
     * @return boolean
     */
    public function hasTenantIds()
    {
        return $this->offsetExists('tenant_ids');
    }

    /**
     * Sets tenant_ids
     * @param string[] $tenant_ids IDs of the tenants that will be the subject of this report
     * @return $this
     */
    public function setTenantIds($tenant_ids)
    {
        $this->offsetSet('tenant_ids', $tenant_ids);

        return $this;
    }

    /**
     * Unset tenant_ids
     */
    public function unsetTenantIds() {
        $this->offsetUnset('tenant_ids');
    }

    /**
     * Valid tenant_ids
     * @return array|boolean
     */
    public function validateTenantIds()
    {
        if (!$this->offsetExists('tenant_ids')) {
            return "Property 'tenant_ids' was not initialized.";
        }
        return false;
    }


    /**
     * Gets level
     * @return \Acronis\Cloud\Client\Model\Reports\BulkPostLevel
     */
    public function getLevel()
    {
        return $this->offsetGet('level');
    }

    /**
     * Checks level
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->offsetExists('level');
    }

    /**
     * Sets level
     * @param \Acronis\Cloud\Client\Model\Reports\BulkPostLevel $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->offsetSet('level', $level);

        return $this;
    }

    /**
     * Unset level
     */
    public function unsetLevel() {
        $this->offsetUnset('level');
    }

    /**
     * Valid level
     * @return array|boolean
     */
    public function validateLevel()
    {
        if (!$this->offsetExists('level')) {
            return "Property 'level' was not initialized.";
        }
        return false;
    }


    /**
     * Gets kind
     * @return \Acronis\Cloud\Client\Model\Reports\BulkPostKind
     */
    public function getKind()
    {
        return $this->offsetGet('kind');
    }

    /**
     * Checks kind
     * @return boolean
     */
    public function hasKind()
    {
        return $this->offsetExists('kind');
    }

    /**
     * Sets kind
     * @param \Acronis\Cloud\Client\Model\Reports\BulkPostKind $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->offsetSet('kind', $kind);

        return $this;
    }

    /**
     * Unset kind
     */
    public function unsetKind() {
        $this->offsetUnset('kind');
    }

    /**
     * Valid kind
     * @return array|boolean
     */
    public function validateKind()
    {
        if (!$this->offsetExists('kind')) {
            return "Property 'kind' was not initialized.";
        }
        return false;
    }


    /**
     * Gets formats
     * @return \Acronis\Cloud\Client\Model\Reports\BulkPostItems[]
     */
    public function getFormats()
    {
        return $this->offsetGet('formats');
    }

    /**
     * Checks formats
     * @return boolean
     */
    public function hasFormats()
    {
        return $this->offsetExists('formats');
    }

    /**
     * Sets formats
     * @param \Acronis\Cloud\Client\Model\Reports\BulkPostItems[] $formats Report formats
     * @return $this
     */
    public function setFormats($formats)
    {
        $this->offsetSet('formats', $formats);

        return $this;
    }

    /**
     * Unset formats
     */
    public function unsetFormats() {
        $this->offsetUnset('formats');
    }

    /**
     * Valid formats
     * @return array|boolean
     */
    public function validateFormats()
    {
        if (!$this->offsetExists('formats')) {
            return false;
        }
        return false;
    }


    /**
     * Gets period
     * @return \Acronis\Cloud\Client\Model\Reports\BulkPostPeriod
     */
    public function getPeriod()
    {
        return $this->offsetGet('period');
    }

    /**
     * Checks period
     * @return boolean
     */
    public function hasPeriod()
    {
        return $this->offsetExists('period');
    }

    /**
     * Sets period
     * @param \Acronis\Cloud\Client\Model\Reports\BulkPostPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->offsetSet('period', $period);

        return $this;
    }

    /**
     * Unset period
     */
    public function unsetPeriod() {
        $this->offsetUnset('period');
    }

    /**
     * Valid period
     * @return array|boolean
     */
    public function validatePeriod()
    {
        if (!$this->offsetExists('period')) {
            return false;
        }
        return false;
    }

}


