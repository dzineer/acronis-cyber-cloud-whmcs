<?php
/**
 * LocationList
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

namespace Acronis\Cloud\Client\Model\Locations;

use Acronis\Cloud\Client\BaseModel;
/**
 * LocationList Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocationList extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Locations\LocationList';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'locations' => 'string[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'locations' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'locations' => 'locations'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'locations' => 'setLocations'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'locations' => 'getLocations'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'locations' => 'hasLocations'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'locations' => 'validateLocations'
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
        if (!empty($this->validateLocations())) {
            $invalid_properties[] = $this->validateLocations();
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
        if (!empty($this->validateLocations())) {
            return false;
        }
        return true;
    }


    /**
     * Gets locations
     * @return string[]
     */
    public function getLocations()
    {
        return $this->offsetGet('locations');
    }

    /**
     * Checks locations
     * @return boolean
     */
    public function hasLocations()
    {
        return $this->offsetExists('locations');
    }

    /**
     * Sets locations
     * @param string[] $locations
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->offsetSet('locations', $locations);

        return $this;
    }

    /**
     * Unset locations
     */
    public function unsetLocations() {
        $this->offsetUnset('locations');
    }

    /**
     * Valid locations
     * @return array|boolean
     */
    public function validateLocations()
    {
        if (!$this->offsetExists('locations')) {
            return false;
        }
        return false;
    }

}

