<?php
/**
 * TenantPutUpdateLock
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

namespace Acronis\Cloud\Client\Model\Tenants;

use Acronis\Cloud\Client\BaseModel;
/**
 * TenantPutUpdateLock Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TenantPutUpdateLock extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tenants\TenantPutUpdateLock';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'enabled' => 'bool'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'enabled' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'enabled' => 'enabled'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'enabled' => 'setEnabled'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'enabled' => 'getEnabled'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'enabled' => 'hasEnabled'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'enabled' => 'validateEnabled'
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
        if (!empty($this->validateEnabled())) {
            $invalid_properties[] = $this->validateEnabled();
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
        if (!empty($this->validateEnabled())) {
            return false;
        }
        return true;
    }


    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->offsetGet('enabled');
    }

    /**
     * Checks enabled
     * @return boolean
     */
    public function hasEnabled()
    {
        return $this->offsetExists('enabled');
    }

    /**
     * Sets enabled
     * @param bool $enabled If true, updating the tenant via API is not allowed to anyone except for users of the tenant that owns the lock
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->offsetSet('enabled', $enabled);

        return $this;
    }

    /**
     * Unset enabled
     */
    public function unsetEnabled() {
        $this->offsetUnset('enabled');
    }

    /**
     * Valid enabled
     * @return array|boolean
     */
    public function validateEnabled()
    {
        if (!$this->offsetExists('enabled')) {
            return "Property 'enabled' was not initialized.";
        }
        return false;
    }

}

