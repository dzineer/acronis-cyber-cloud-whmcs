<?php
/**
 * Idp
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

namespace Acronis\Cloud\Client\Model\IdentityProviders;

use Acronis\Cloud\Client\BaseModel;
/**
 * Idp Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Idp extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IdentityProviders\Idp';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'id' => 'string',
            'owner_tenant_id' => 'string',
            'domain' => 'string',
            'idp_type' => 'string',
            'address' => 'string',
            'oauth2_client_id' => 'string',
            'oauth2_client_secret' => 'string',
            'forgot_password_url' => 'string',
            'change_password_url' => 'string',
            'reset_password_url' => 'string',
            'redirect_logout_url' => 'string',
            'version' => 'int'
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
            'owner_tenant_id' => null,
            'domain' => null,
            'idp_type' => null,
            'address' => null,
            'oauth2_client_id' => null,
            'oauth2_client_secret' => null,
            'forgot_password_url' => null,
            'change_password_url' => null,
            'reset_password_url' => null,
            'redirect_logout_url' => null,
            'version' => 'int32'
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
            'owner_tenant_id' => 'owner_tenant_id',
            'domain' => 'domain',
            'idp_type' => 'idp_type',
            'address' => 'address',
            'oauth2_client_id' => 'oauth2_client_id',
            'oauth2_client_secret' => 'oauth2_client_secret',
            'forgot_password_url' => 'forgot_password_url',
            'change_password_url' => 'change_password_url',
            'reset_password_url' => 'reset_password_url',
            'redirect_logout_url' => 'redirect_logout_url',
            'version' => 'version'
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
            'owner_tenant_id' => 'setOwnerTenantId',
            'domain' => 'setDomain',
            'idp_type' => 'setIdpType',
            'address' => 'setAddress',
            'oauth2_client_id' => 'setOauth2ClientId',
            'oauth2_client_secret' => 'setOauth2ClientSecret',
            'forgot_password_url' => 'setForgotPasswordUrl',
            'change_password_url' => 'setChangePasswordUrl',
            'reset_password_url' => 'setResetPasswordUrl',
            'redirect_logout_url' => 'setRedirectLogoutUrl',
            'version' => 'setVersion'
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
            'owner_tenant_id' => 'getOwnerTenantId',
            'domain' => 'getDomain',
            'idp_type' => 'getIdpType',
            'address' => 'getAddress',
            'oauth2_client_id' => 'getOauth2ClientId',
            'oauth2_client_secret' => 'getOauth2ClientSecret',
            'forgot_password_url' => 'getForgotPasswordUrl',
            'change_password_url' => 'getChangePasswordUrl',
            'reset_password_url' => 'getResetPasswordUrl',
            'redirect_logout_url' => 'getRedirectLogoutUrl',
            'version' => 'getVersion'
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
            'owner_tenant_id' => 'hasOwnerTenantId',
            'domain' => 'hasDomain',
            'idp_type' => 'hasIdpType',
            'address' => 'hasAddress',
            'oauth2_client_id' => 'hasOauth2ClientId',
            'oauth2_client_secret' => 'hasOauth2ClientSecret',
            'forgot_password_url' => 'hasForgotPasswordUrl',
            'change_password_url' => 'hasChangePasswordUrl',
            'reset_password_url' => 'hasResetPasswordUrl',
            'redirect_logout_url' => 'hasRedirectLogoutUrl',
            'version' => 'hasVersion'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'id' => 'validateId',
            'owner_tenant_id' => 'validateOwnerTenantId',
            'domain' => 'validateDomain',
            'idp_type' => 'validateIdpType',
            'address' => 'validateAddress',
            'oauth2_client_id' => 'validateOauth2ClientId',
            'oauth2_client_secret' => 'validateOauth2ClientSecret',
            'forgot_password_url' => 'validateForgotPasswordUrl',
            'change_password_url' => 'validateChangePasswordUrl',
            'reset_password_url' => 'validateResetPasswordUrl',
            'redirect_logout_url' => 'validateRedirectLogoutUrl',
            'version' => 'validateVersion'
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
        if (!empty($this->validateOwnerTenantId())) {
            $invalid_properties[] = $this->validateOwnerTenantId();
        }
        if (!empty($this->validateDomain())) {
            $invalid_properties[] = $this->validateDomain();
        }
        if (!empty($this->validateIdpType())) {
            $invalid_properties[] = $this->validateIdpType();
        }
        if (!empty($this->validateAddress())) {
            $invalid_properties[] = $this->validateAddress();
        }
        if (!empty($this->validateOauth2ClientId())) {
            $invalid_properties[] = $this->validateOauth2ClientId();
        }
        if (!empty($this->validateOauth2ClientSecret())) {
            $invalid_properties[] = $this->validateOauth2ClientSecret();
        }
        if (!empty($this->validateForgotPasswordUrl())) {
            $invalid_properties[] = $this->validateForgotPasswordUrl();
        }
        if (!empty($this->validateChangePasswordUrl())) {
            $invalid_properties[] = $this->validateChangePasswordUrl();
        }
        if (!empty($this->validateResetPasswordUrl())) {
            $invalid_properties[] = $this->validateResetPasswordUrl();
        }
        if (!empty($this->validateRedirectLogoutUrl())) {
            $invalid_properties[] = $this->validateRedirectLogoutUrl();
        }
        if (!empty($this->validateVersion())) {
            $invalid_properties[] = $this->validateVersion();
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
        if (!empty($this->validateOwnerTenantId())) {
            return false;
        }
        if (!empty($this->validateDomain())) {
            return false;
        }
        if (!empty($this->validateIdpType())) {
            return false;
        }
        if (!empty($this->validateAddress())) {
            return false;
        }
        if (!empty($this->validateOauth2ClientId())) {
            return false;
        }
        if (!empty($this->validateOauth2ClientSecret())) {
            return false;
        }
        if (!empty($this->validateForgotPasswordUrl())) {
            return false;
        }
        if (!empty($this->validateChangePasswordUrl())) {
            return false;
        }
        if (!empty($this->validateResetPasswordUrl())) {
            return false;
        }
        if (!empty($this->validateRedirectLogoutUrl())) {
            return false;
        }
        if (!empty($this->validateVersion())) {
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
            throw new \InvalidArgumentException('invalid length for $id when calling Idp., must be smaller than or equal to 36.');
        }
        if ((strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Idp., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling Idp., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
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
            throw new \InvalidArgumentException('invalid length for $owner_tenant_id when calling Idp., must be smaller than or equal to 36.');
        }
        if ((strlen($owner_tenant_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $owner_tenant_id when calling Idp., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $owner_tenant_id))) {
            throw new \InvalidArgumentException("invalid value for $owner_tenant_id when calling Idp., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
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


    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->offsetGet('domain');
    }

    /**
     * Checks domain
     * @return boolean
     */
    public function hasDomain()
    {
        return $this->offsetExists('domain');
    }

    /**
     * Sets domain
     * @param string $domain Unique domain name of identity provider, e.g. 'example.com'
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->offsetSet('domain', $domain);

        return $this;
    }

    /**
     * Unset domain
     */
    public function unsetDomain() {
        $this->offsetUnset('domain');
    }

    /**
     * Valid domain
     * @return array|boolean
     */
    public function validateDomain()
    {
        if (!$this->offsetExists('domain')) {
            return "Property 'domain' was not initialized.";
        }
        return false;
    }


    /**
     * Gets idp_type
     * @return string
     */
    public function getIdpType()
    {
        return $this->offsetGet('idp_type');
    }

    /**
     * Checks idp_type
     * @return boolean
     */
    public function hasIdpType()
    {
        return $this->offsetExists('idp_type');
    }

    /**
     * Sets idp_type
     * @param string $idp_type Supported types are: 'internal' and 'oidc'
     * @return $this
     */
    public function setIdpType($idp_type)
    {
        $this->offsetSet('idp_type', $idp_type);

        return $this;
    }

    /**
     * Unset idp_type
     */
    public function unsetIdpType() {
        $this->offsetUnset('idp_type');
    }

    /**
     * Valid idp_type
     * @return array|boolean
     */
    public function validateIdpType()
    {
        if (!$this->offsetExists('idp_type')) {
            return "Property 'idp_type' was not initialized.";
        }
        return false;
    }


    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->offsetGet('address');
    }

    /**
     * Checks address
     * @return boolean
     */
    public function hasAddress()
    {
        return $this->offsetExists('address');
    }

    /**
     * Sets address
     * @param string $address URL
     * @return $this
     */
    public function setAddress($address)
    {

        if (!is_null($address) && (!preg_match("/^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/", $address))) {
            throw new \InvalidArgumentException("invalid value for $address when calling Idp., must conform to the pattern /^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/.");
        }

        $this->offsetSet('address', $address);

        return $this;
    }

    /**
     * Unset address
     */
    public function unsetAddress() {
        $this->offsetUnset('address');
    }

    /**
     * Valid address
     * @return array|boolean
     */
    public function validateAddress()
    {
        if (!$this->offsetExists('address')) {
            return false;
        }
            if ($this->offsetExists('address') && !preg_match("/^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/", $this->offsetGet('address'))) {
                return "invalid value for 'address', must be conform to the pattern /^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/.";
            }
        return false;
    }


    /**
     * Gets oauth2_client_id
     * @return string
     */
    public function getOauth2ClientId()
    {
        return $this->offsetGet('oauth2_client_id');
    }

    /**
     * Checks oauth2_client_id
     * @return boolean
     */
    public function hasOauth2ClientId()
    {
        return $this->offsetExists('oauth2_client_id');
    }

    /**
     * Sets oauth2_client_id
     * @param string $oauth2_client_id OAuth2 client ID. Required for OIDC identity providers
     * @return $this
     */
    public function setOauth2ClientId($oauth2_client_id)
    {
        $this->offsetSet('oauth2_client_id', $oauth2_client_id);

        return $this;
    }

    /**
     * Unset oauth2_client_id
     */
    public function unsetOauth2ClientId() {
        $this->offsetUnset('oauth2_client_id');
    }

    /**
     * Valid oauth2_client_id
     * @return array|boolean
     */
    public function validateOauth2ClientId()
    {
        if (!$this->offsetExists('oauth2_client_id')) {
            return false;
        }
        return false;
    }


    /**
     * Gets oauth2_client_secret
     * @return string
     */
    public function getOauth2ClientSecret()
    {
        return $this->offsetGet('oauth2_client_secret');
    }

    /**
     * Checks oauth2_client_secret
     * @return boolean
     */
    public function hasOauth2ClientSecret()
    {
        return $this->offsetExists('oauth2_client_secret');
    }

    /**
     * Sets oauth2_client_secret
     * @param string $oauth2_client_secret OAuth2 client secret. Required for OIDC identity provider
     * @return $this
     */
    public function setOauth2ClientSecret($oauth2_client_secret)
    {
        $this->offsetSet('oauth2_client_secret', $oauth2_client_secret);

        return $this;
    }

    /**
     * Unset oauth2_client_secret
     */
    public function unsetOauth2ClientSecret() {
        $this->offsetUnset('oauth2_client_secret');
    }

    /**
     * Valid oauth2_client_secret
     * @return array|boolean
     */
    public function validateOauth2ClientSecret()
    {
        if (!$this->offsetExists('oauth2_client_secret')) {
            return false;
        }
        return false;
    }


    /**
     * Gets forgot_password_url
     * @return string
     */
    public function getForgotPasswordUrl()
    {
        return $this->offsetGet('forgot_password_url');
    }

    /**
     * Checks forgot_password_url
     * @return boolean
     */
    public function hasForgotPasswordUrl()
    {
        return $this->offsetExists('forgot_password_url');
    }

    /**
     * Sets forgot_password_url
     * @param string $forgot_password_url Forgot password URL (for not authenticated users)
     * @return $this
     */
    public function setForgotPasswordUrl($forgot_password_url)
    {
        $this->offsetSet('forgot_password_url', $forgot_password_url);

        return $this;
    }

    /**
     * Unset forgot_password_url
     */
    public function unsetForgotPasswordUrl() {
        $this->offsetUnset('forgot_password_url');
    }

    /**
     * Valid forgot_password_url
     * @return array|boolean
     */
    public function validateForgotPasswordUrl()
    {
        if (!$this->offsetExists('forgot_password_url')) {
            return false;
        }
        return false;
    }


    /**
     * Gets change_password_url
     * @return string
     */
    public function getChangePasswordUrl()
    {
        return $this->offsetGet('change_password_url');
    }

    /**
     * Checks change_password_url
     * @return boolean
     */
    public function hasChangePasswordUrl()
    {
        return $this->offsetExists('change_password_url');
    }

    /**
     * Sets change_password_url
     * @param string $change_password_url Change password URL (for authenticated users)
     * @return $this
     */
    public function setChangePasswordUrl($change_password_url)
    {
        $this->offsetSet('change_password_url', $change_password_url);

        return $this;
    }

    /**
     * Unset change_password_url
     */
    public function unsetChangePasswordUrl() {
        $this->offsetUnset('change_password_url');
    }

    /**
     * Valid change_password_url
     * @return array|boolean
     */
    public function validateChangePasswordUrl()
    {
        if (!$this->offsetExists('change_password_url')) {
            return false;
        }
        return false;
    }


    /**
     * Gets reset_password_url
     * @return string
     */
    public function getResetPasswordUrl()
    {
        return $this->offsetGet('reset_password_url');
    }

    /**
     * Checks reset_password_url
     * @return boolean
     */
    public function hasResetPasswordUrl()
    {
        return $this->offsetExists('reset_password_url');
    }

    /**
     * Sets reset_password_url
     * @param string $reset_password_url Reset Password URL (for administrators)
     * @return $this
     */
    public function setResetPasswordUrl($reset_password_url)
    {
        $this->offsetSet('reset_password_url', $reset_password_url);

        return $this;
    }

    /**
     * Unset reset_password_url
     */
    public function unsetResetPasswordUrl() {
        $this->offsetUnset('reset_password_url');
    }

    /**
     * Valid reset_password_url
     * @return array|boolean
     */
    public function validateResetPasswordUrl()
    {
        if (!$this->offsetExists('reset_password_url')) {
            return false;
        }
        return false;
    }


    /**
     * Gets redirect_logout_url
     * @return string
     */
    public function getRedirectLogoutUrl()
    {
        return $this->offsetGet('redirect_logout_url');
    }

    /**
     * Checks redirect_logout_url
     * @return boolean
     */
    public function hasRedirectLogoutUrl()
    {
        return $this->offsetExists('redirect_logout_url');
    }

    /**
     * Sets redirect_logout_url
     * @param string $redirect_logout_url URL to redirect user to after logout
     * @return $this
     */
    public function setRedirectLogoutUrl($redirect_logout_url)
    {
        $this->offsetSet('redirect_logout_url', $redirect_logout_url);

        return $this;
    }

    /**
     * Unset redirect_logout_url
     */
    public function unsetRedirectLogoutUrl() {
        $this->offsetUnset('redirect_logout_url');
    }

    /**
     * Valid redirect_logout_url
     * @return array|boolean
     */
    public function validateRedirectLogoutUrl()
    {
        if (!$this->offsetExists('redirect_logout_url')) {
            return false;
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
     * @param int $version Auto-incremented identity provider version
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

}

