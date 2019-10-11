<?php
/**
 * UserChangeEmailPost
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

namespace Acronis\Cloud\Client\Model\Users;

use Acronis\Cloud\Client\BaseModel;
/**
 * UserChangeEmailPost Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserChangeEmailPost extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Users\UserChangeEmailPost';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'new_email' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'new_email' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'new_email' => 'new_email'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'new_email' => 'setNewEmail'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'new_email' => 'getNewEmail'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'new_email' => 'hasNewEmail'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'new_email' => 'validateNewEmail'
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
        if (!empty($this->validateNewEmail())) {
            $invalid_properties[] = $this->validateNewEmail();
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
        if (!empty($this->validateNewEmail())) {
            return false;
        }
        return true;
    }


    /**
     * Gets new_email
     * @return string
     */
    public function getNewEmail()
    {
        return $this->offsetGet('new_email');
    }

    /**
     * Checks new_email
     * @return boolean
     */
    public function hasNewEmail()
    {
        return $this->offsetExists('new_email');
    }

    /**
     * Sets new_email
     * @param string $new_email
     * @return $this
     */
    public function setNewEmail($new_email)
    {

        if ((strlen($new_email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $new_email when calling UserChangeEmailPost., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/\\S+@\\S+/", $new_email))) {
            throw new \InvalidArgumentException("invalid value for $new_email when calling UserChangeEmailPost., must conform to the pattern /\\S+@\\S+/.");
        }

        $this->offsetSet('new_email', $new_email);

        return $this;
    }

    /**
     * Unset new_email
     */
    public function unsetNewEmail() {
        $this->offsetUnset('new_email');
    }

    /**
     * Valid new_email
     * @return array|boolean
     */
    public function validateNewEmail()
    {
        if (!$this->offsetExists('new_email')) {
            return "Property 'new_email' was not initialized.";
        }
            if ($this->offsetExists('new_email') && strlen($this->offsetGet('new_email')) < 3) {
                return "invalid value for 'new_email', the character length must be bigger than or equal to 3.";
            }
            if ($this->offsetExists('new_email') && !preg_match("/\\S+@\\S+/", $this->offsetGet('new_email'))) {
                return "invalid value for 'new_email', must be conform to the pattern /\\S+@\\S+/.";
            }
        return false;
    }

}

