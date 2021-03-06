<?php
/**
 * VerifyPost
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

namespace Acronis\Cloud\Client\Model\Totp;

use Acronis\Cloud\Client\BaseModel;
/**
 * VerifyPost Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VerifyPost extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Totp\VerifyPost';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'code' => 'string',
            'challenge' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'code' => null,
            'challenge' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'code' => 'code',
            'challenge' => 'challenge'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'code' => 'setCode',
            'challenge' => 'setChallenge'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'code' => 'getCode',
            'challenge' => 'getChallenge'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'code' => 'hasCode',
            'challenge' => 'hasChallenge'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'code' => 'validateCode',
            'challenge' => 'validateChallenge'
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
        if (!empty($this->validateCode())) {
            $invalid_properties[] = $this->validateCode();
        }
        if (!empty($this->validateChallenge())) {
            $invalid_properties[] = $this->validateChallenge();
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
        if (!empty($this->validateCode())) {
            return false;
        }
        if (!empty($this->validateChallenge())) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->offsetGet('code');
    }

    /**
     * Checks code
     * @return boolean
     */
    public function hasCode()
    {
        return $this->offsetExists('code');
    }

    /**
     * Sets code
     * @param string $code TOTP code
     * @return $this
     */
    public function setCode($code)
    {
        $this->offsetSet('code', $code);

        return $this;
    }

    /**
     * Unset code
     */
    public function unsetCode() {
        $this->offsetUnset('code');
    }

    /**
     * Valid code
     * @return array|boolean
     */
    public function validateCode()
    {
        if (!$this->offsetExists('code')) {
            return "Property 'code' was not initialized.";
        }
        return false;
    }


    /**
     * Gets challenge
     * @return string
     */
    public function getChallenge()
    {
        return $this->offsetGet('challenge');
    }

    /**
     * Checks challenge
     * @return boolean
     */
    public function hasChallenge()
    {
        return $this->offsetExists('challenge');
    }

    /**
     * Sets challenge
     * @param string $challenge The reason for TOTP verification: 'login' or 'action'
     * @return $this
     */
    public function setChallenge($challenge)
    {
        $this->offsetSet('challenge', $challenge);

        return $this;
    }

    /**
     * Unset challenge
     */
    public function unsetChallenge() {
        $this->offsetUnset('challenge');
    }

    /**
     * Valid challenge
     * @return array|boolean
     */
    public function validateChallenge()
    {
        if (!$this->offsetExists('challenge')) {
            return false;
        }
        return false;
    }

}


