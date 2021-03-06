<?php
/**
 * UserGroup
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

namespace Acronis\Cloud\Client\Model\UserGroups;

use Acronis\Cloud\Client\BaseModel;
/**
 * UserGroup Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserGroup extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserGroups\UserGroup';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'id' => 'string',
            'version' => 'int',
            'name' => 'string',
            'owner_tenant_id' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'id' => null,
            'version' => 'int32',
            'name' => null,
            'owner_tenant_id' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'id' => 'id',
            'version' => 'version',
            'name' => 'name',
            'owner_tenant_id' => 'owner_tenant_id'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'id' => 'setId',
            'version' => 'setVersion',
            'name' => 'setName',
            'owner_tenant_id' => 'setOwnerTenantId'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'id' => 'getId',
            'version' => 'getVersion',
            'name' => 'getName',
            'owner_tenant_id' => 'getOwnerTenantId'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'id' => 'hasId',
            'version' => 'hasVersion',
            'name' => 'hasName',
            'owner_tenant_id' => 'hasOwnerTenantId'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'id' => 'validateId',
            'version' => 'validateVersion',
            'name' => 'validateName',
            'owner_tenant_id' => 'validateOwnerTenantId'
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
        if (!empty($this->validateId())) {
            $invalid_properties[] = $this->validateId();
        }
        if (!empty($this->validateVersion())) {
            $invalid_properties[] = $this->validateVersion();
        }
        if (!empty($this->validateName())) {
            $invalid_properties[] = $this->validateName();
        }
        if (!empty($this->validateOwnerTenantId())) {
            $invalid_properties[] = $this->validateOwnerTenantId();
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
        if (!empty($this->validateId())) {
            return false;
        }
        if (!empty($this->validateVersion())) {
            return false;
        }
        if (!empty($this->validateName())) {
            return false;
        }
        if (!empty($this->validateOwnerTenantId())) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->offsetGet('id');
    }

    /**
     * Checks id
     * @return boolean
     */
    public function hasId()
    {
        return $this->offsetExists('id');
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        if ((strlen($id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling UserGroup., must be smaller than or equal to 36.');
        }
        if ((strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling UserGroup., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling UserGroup., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('id', $id);

        return $this;
    }

    /**
     * Unset id
     */
    public function unsetId() {
        $this->offsetUnset('id');
    }

    /**
     * Valid id
     * @return array|boolean
     */
    public function validateId()
    {
        if (!$this->offsetExists('id')) {
            return "Property 'id' was not initialized.";
        }
            if ($this->offsetExists('id') && strlen($this->offsetGet('id')) > 36) {
                return "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('id') && strlen($this->offsetGet('id')) < 36) {
                return "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('id'))) {
                return "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->offsetGet('version');
    }

    /**
     * Checks version
     * @return boolean
     */
    public function hasVersion()
    {
        return $this->offsetExists('version');
    }

    /**
     * Sets version
     * @param int $version Auto-incremented entity version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->offsetSet('version', $version);

        return $this;
    }

    /**
     * Unset version
     */
    public function unsetVersion() {
        $this->offsetUnset('version');
    }

    /**
     * Valid version
     * @return array|boolean
     */
    public function validateVersion()
    {
        if (!$this->offsetExists('version')) {
            return "Property 'version' was not initialized.";
        }
        return false;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->offsetGet('name');
    }

    /**
     * Checks name
     * @return boolean
     */
    public function hasName()
    {
        return $this->offsetExists('name');
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->offsetSet('name', $name);

        return $this;
    }

    /**
     * Unset name
     */
    public function unsetName() {
        $this->offsetUnset('name');
    }

    /**
     * Valid name
     * @return array|boolean
     */
    public function validateName()
    {
        if (!$this->offsetExists('name')) {
            return "Property 'name' was not initialized.";
        }
        return false;
    }


    /**
     * Gets owner_tenant_id
     * @return string
     */
    public function getOwnerTenantId()
    {
        return $this->offsetGet('owner_tenant_id');
    }

    /**
     * Checks owner_tenant_id
     * @return boolean
     */
    public function hasOwnerTenantId()
    {
        return $this->offsetExists('owner_tenant_id');
    }

    /**
     * Sets owner_tenant_id
     * @param string $owner_tenant_id
     * @return $this
     */
    public function setOwnerTenantId($owner_tenant_id)
    {
        if ((strlen($owner_tenant_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $owner_tenant_id when calling UserGroup., must be smaller than or equal to 36.');
        }
        if ((strlen($owner_tenant_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $owner_tenant_id when calling UserGroup., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $owner_tenant_id))) {
            throw new \InvalidArgumentException("invalid value for $owner_tenant_id when calling UserGroup., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('owner_tenant_id', $owner_tenant_id);

        return $this;
    }

    /**
     * Unset owner_tenant_id
     */
    public function unsetOwnerTenantId() {
        $this->offsetUnset('owner_tenant_id');
    }

    /**
     * Valid owner_tenant_id
     * @return array|boolean
     */
    public function validateOwnerTenantId()
    {
        if (!$this->offsetExists('owner_tenant_id')) {
            return "Property 'owner_tenant_id' was not initialized.";
        }
            if ($this->offsetExists('owner_tenant_id') && strlen($this->offsetGet('owner_tenant_id')) > 36) {
                return "invalid value for 'owner_tenant_id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('owner_tenant_id') && strlen($this->offsetGet('owner_tenant_id')) < 36) {
                return "invalid value for 'owner_tenant_id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('owner_tenant_id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('owner_tenant_id'))) {
                return "invalid value for 'owner_tenant_id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }

}


