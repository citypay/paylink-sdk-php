<?php
/**
 * Config
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Paylink API
 *
 * API for creating payments with CityPay's Paylink system.
 *
 * OpenAPI spec version: 3.1
 * Contact: support@citypay.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Config Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Config implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acs_mode' => 'string',
        'custom_params' => '\Swagger\Client\Model\CustomParam[]',
        'expire_in' => 'string',
        'merch_branding' => 'string',
        'merch_logo' => 'string',
        'merch_terms' => 'string',
        'lock_params' => 'string',
        'options' => '\Swagger\Client\Model\Options[]',
        'postback' => 'string',
        'postback_policy' => 'string',
        'redirect_delay' => 'int',
        'redirect_success' => 'string',
        'redirect_failure' => 'string',
        'return_params' => 'bool',
        'renderer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acs_mode' => null,
        'custom_params' => null,
        'expire_in' => null,
        'merch_branding' => null,
        'merch_logo' => null,
        'merch_terms' => null,
        'lock_params' => null,
        'options' => null,
        'postback' => null,
        'postback_policy' => null,
        'redirect_delay' => null,
        'redirect_success' => null,
        'redirect_failure' => null,
        'return_params' => null,
        'renderer' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'acs_mode' => 'acsMode',
        'custom_params' => 'customParams',
        'expire_in' => 'expireIn',
        'merch_branding' => 'merch_branding',
        'merch_logo' => 'merch_logo',
        'merch_terms' => 'merch_terms',
        'lock_params' => 'lockParams',
        'options' => 'options',
        'postback' => 'postback',
        'postback_policy' => 'postback_policy',
        'redirect_delay' => 'redirect_delay',
        'redirect_success' => 'redirect_success',
        'redirect_failure' => 'redirect_failure',
        'return_params' => 'return_params',
        'renderer' => 'renderer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acs_mode' => 'setAcsMode',
        'custom_params' => 'setCustomParams',
        'expire_in' => 'setExpireIn',
        'merch_branding' => 'setMerchBranding',
        'merch_logo' => 'setMerchLogo',
        'merch_terms' => 'setMerchTerms',
        'lock_params' => 'setLockParams',
        'options' => 'setOptions',
        'postback' => 'setPostback',
        'postback_policy' => 'setPostbackPolicy',
        'redirect_delay' => 'setRedirectDelay',
        'redirect_success' => 'setRedirectSuccess',
        'redirect_failure' => 'setRedirectFailure',
        'return_params' => 'setReturnParams',
        'renderer' => 'setRenderer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acs_mode' => 'getAcsMode',
        'custom_params' => 'getCustomParams',
        'expire_in' => 'getExpireIn',
        'merch_branding' => 'getMerchBranding',
        'merch_logo' => 'getMerchLogo',
        'merch_terms' => 'getMerchTerms',
        'lock_params' => 'getLockParams',
        'options' => 'getOptions',
        'postback' => 'getPostback',
        'postback_policy' => 'getPostbackPolicy',
        'redirect_delay' => 'getRedirectDelay',
        'redirect_success' => 'getRedirectSuccess',
        'redirect_failure' => 'getRedirectFailure',
        'return_params' => 'getReturnParams',
        'renderer' => 'getRenderer'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['acs_mode'] = isset($data['acs_mode']) ? $data['acs_mode'] : null;
        $this->container['custom_params'] = isset($data['custom_params']) ? $data['custom_params'] : null;
        $this->container['expire_in'] = isset($data['expire_in']) ? $data['expire_in'] : null;
        $this->container['merch_branding'] = isset($data['merch_branding']) ? $data['merch_branding'] : null;
        $this->container['merch_logo'] = isset($data['merch_logo']) ? $data['merch_logo'] : null;
        $this->container['merch_terms'] = isset($data['merch_terms']) ? $data['merch_terms'] : null;
        $this->container['lock_params'] = isset($data['lock_params']) ? $data['lock_params'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['postback'] = isset($data['postback']) ? $data['postback'] : null;
        $this->container['postback_policy'] = isset($data['postback_policy']) ? $data['postback_policy'] : null;
        $this->container['redirect_delay'] = isset($data['redirect_delay']) ? $data['redirect_delay'] : null;
        $this->container['redirect_success'] = isset($data['redirect_success']) ? $data['redirect_success'] : null;
        $this->container['redirect_failure'] = isset($data['redirect_failure']) ? $data['redirect_failure'] : null;
        $this->container['return_params'] = isset($data['return_params']) ? $data['return_params'] : null;
        $this->container['renderer'] = isset($data['renderer']) ? $data['renderer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets acs_mode
     *
     * @return string
     */
    public function getAcsMode()
    {
        return $this->container['acs_mode'];
    }

    /**
     * Sets acs_mode
     *
     * @param string $acs_mode The `acsMode` field specifies what approach is to be adopted by the Paylink payment form when displaying a 3-D Secure authentication window. The values may be as follows - *iframe*: shows the 3-D Secure ACS in an iframe dialog, neatly embedding it in Paylink. This provides a more seamless flow for the card holder who is able to validate and authenticate their card through the dialog provided by their bank. - *inline*: an inline mode transfers the full browser window to the ACS which allowing the payment card holder to see their payment card issuer's details and the accompanying SSL connection status and certificate in the address bar of the cardholder's browser. Note: If you request an iframe mode and the browser width is deemed as being small (< 768px) then an inline mode will be enforced. This is to ensure that mobile users have an improved user experience.
     *
     * @return $this
     */
    public function setAcsMode($acs_mode)
    {
        $this->container['acs_mode'] = $acs_mode;

        return $this;
    }

    /**
     * Gets custom_params
     *
     * @return \Swagger\Client\Model\CustomParam[]
     */
    public function getCustomParams()
    {
        return $this->container['custom_params'];
    }

    /**
     * Sets custom_params
     *
     * @param \Swagger\Client\Model\CustomParam[] $custom_params custom_params
     *
     * @return $this
     */
    public function setCustomParams($custom_params)
    {
        $this->container['custom_params'] = $custom_params;

        return $this;
    }

    /**
     * Gets expire_in
     *
     * @return string
     */
    public function getExpireIn()
    {
        return $this->container['expire_in'];
    }

    /**
     * Sets expire_in
     *
     * @param string $expire_in The expireIn field specifies a period of time in _seconds_ after which the Paylink token will expire. A default value of 30 minutes is specified by the service. There is presently no limit imposed as to how long a given token may be held open and a value of 0 defines that the token will never expire. The API can also convert an expiry time based on a string value. The following values are accepted s  Time in seconds, for example 90s m  Time in minutes, for example 20m h  Time in hours, for example 4h w  Time in weeks, for example 4w M  Time in months, for example 6M y  Time in years, for example 1y
     *
     * @return $this
     */
    public function setExpireIn($expire_in)
    {
        $this->container['expire_in'] = $expire_in;

        return $this;
    }

    /**
     * Gets merch_branding
     *
     * @return string
     */
    public function getMerchBranding()
    {
        return $this->container['merch_branding'];
    }

    /**
     * Sets merch_branding
     *
     * @param string $merch_branding The merch_branding field may be used to specify a URL for a custom cascading style sheet (\"CSS\") for to customise the appearance of the payment form.
     *
     * @return $this
     */
    public function setMerchBranding($merch_branding)
    {
        $this->container['merch_branding'] = $merch_branding;

        return $this;
    }

    /**
     * Gets merch_logo
     *
     * @return string
     */
    public function getMerchLogo()
    {
        return $this->container['merch_logo'];
    }

    /**
     * Sets merch_logo
     *
     * @param string $merch_logo A URL of a merchant logo to include. The URL should be delivered using HTTPS.
     *
     * @return $this
     */
    public function setMerchLogo($merch_logo)
    {
        $this->container['merch_logo'] = $merch_logo;

        return $this;
    }

    /**
     * Gets merch_terms
     *
     * @return string
     */
    public function getMerchTerms()
    {
        return $this->container['merch_terms'];
    }

    /**
     * Sets merch_terms
     *
     * @param string $merch_terms A URL of the terms of payment that you wish to be confirmed. If provided, a link and checkbox will be added that will be Required to be checked before payment may continue.
     *
     * @return $this
     */
    public function setMerchTerms($merch_terms)
    {
        $this->container['merch_terms'] = $merch_terms;

        return $this;
    }

    /**
     * Gets lock_params
     *
     * @return string
     */
    public function getLockParams()
    {
        return $this->container['lock_params'];
    }

    /**
     * Sets lock_params
     *
     * @param string $lock_params The `lockParams` field may be used to lock fields which are displayed in the form. For example, if the cardholder.address.postcode field were to be specified this would prevent the customer amending the postal code for the payment card holder.  Field locking may be specified on a _fine-grained_ parameter level such as cardholder.address.postcode or alternatively a coarsely-grained object level basis such as cardholder.address which operates to lock all of the address related fields.
     *
     * @return $this
     */
    public function setLockParams($lock_params)
    {
        $this->container['lock_params'] = $lock_params;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\Options[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\Options[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets postback
     *
     * @return string
     */
    public function getPostback()
    {
        return $this->container['postback'];
    }

    /**
     * Sets postback
     *
     * @param string $postback The `postback` field specifies an RFC1738 compliant URL which is used to notify you of the outcome of the transaction. The URL must be a valid publicly available URL which is accessible by the Paylink service on ports 80 or 443. Merchant internal or localhost addresses often used for development testing cannot be used unless made publicly available. The token request will validate this as part of the incoming request. We recommend [ngrok.com] for development purposes. Paylink can be configured to support endpoints that use self signed certificates, or certificates signed by a private CA.
     *
     * @return $this
     */
    public function setPostback($postback)
    {
        $this->container['postback'] = $postback;

        return $this;
    }

    /**
     * Gets postback_policy
     *
     * @return string
     */
    public function getPostbackPolicy()
    {
        return $this->container['postback_policy'];
    }

    /**
     * Sets postback_policy
     *
     * @param string $postback_policy The `postback_policy` field is used to specify a policy for POSTback URL handling, the options are as follows: - *sync*: the operation will be performed before a Response is returned to the cardholder's browser to ensure that the transaction may be authoritatively confirmed as successful by the Merchant Application before the outcome of the transaction is communicated to the customer. - *async*: the operation will be performed in the background whilst a response is returned to the customer's browser effectively speeding up the communication of the result to the customer - *none*: no operation willbe performed. No value or any other value will trigger the default setting.
     *
     * @return $this
     */
    public function setPostbackPolicy($postback_policy)
    {
        $this->container['postback_policy'] = $postback_policy;

        return $this;
    }

    /**
     * Gets redirect_delay
     *
     * @return int
     */
    public function getRedirectDelay()
    {
        return $this->container['redirect_delay'];
    }

    /**
     * Sets redirect_delay
     *
     * @param int $redirect_delay The `redirect_delay` field may be used to specify a delay in seconds before the cardholder's browser is redirected by the payment form on conclusion of a successful transaction.  If the transaction fails, the customer may be given the opportunity to resubmit a transaction with differing card details for reprocessing.  If no value is set or is a negative value, Paylink will not redirect the cardholder's browser until the end user has clicked on a button to return to the store.  If `redirect_delay` is set to 0, the cardholder's browser will be redirected immediately on a successful transaction with no delay.  If `redirect_delay` is set to a value greater than 0, the form will display a dialog and redirect after the specified number of seconds have elapsed.
     *
     * @return $this
     */
    public function setRedirectDelay($redirect_delay)
    {
        $this->container['redirect_delay'] = $redirect_delay;

        return $this;
    }

    /**
     * Gets redirect_success
     *
     * @return string
     */
    public function getRedirectSuccess()
    {
        return $this->container['redirect_success'];
    }

    /**
     * Sets redirect_success
     *
     * @param string $redirect_success The `redirect_success` field may contain a URL which the cardholder's browser is redirected to by the payment form on a succesful transaction. The call will be sent as a HTTP POST request.  If no value is specified, the application will not return Merchant's site, but will provide advice of the outcome of the transaction to the cardholder until they close their browser window.
     *
     * @return $this
     */
    public function setRedirectSuccess($redirect_success)
    {
        $this->container['redirect_success'] = $redirect_success;

        return $this;
    }

    /**
     * Gets redirect_failure
     *
     * @return string
     */
    public function getRedirectFailure()
    {
        return $this->container['redirect_failure'];
    }

    /**
     * Sets redirect_failure
     *
     * @param string $redirect_failure The `redirect_failure` field may contain a URL which the cardholder's browser is redirected to by the payment form on a failed or declined transaction.  If no value is specified, the application will not return Merchant's site, but will provide advice of the outcome of the transaction to the cardholder until they close their browser window.
     *
     * @return $this
     */
    public function setRedirectFailure($redirect_failure)
    {
        $this->container['redirect_failure'] = $redirect_failure;

        return $this;
    }

    /**
     * Gets return_params
     *
     * @return bool
     */
    public function getReturnParams()
    {
        return $this->container['return_params'];
    }

    /**
     * Sets return_params
     *
     * @param bool $return_params The `return_params` field is used to determine whether Paylink should return the results of the transaction within the HTTP POST redirection.  If the value is true, the call will be accompanied by the results for the transaction passed as an `application/json` body of the request.   We do not recommended you to rely on the values in a redirection response without checking the SHA256 digest value as there is a risk that the values may have been tampered with.
     *
     * @return $this
     */
    public function setReturnParams($return_params)
    {
        $this->container['return_params'] = $return_params;

        return $this;
    }

    /**
     * Gets renderer
     *
     * @return string
     */
    public function getRenderer()
    {
        return $this->container['renderer'];
    }

    /**
     * Sets renderer
     *
     * @param string $renderer The `renderer` field specifies the rendering process to to use for the transaction. We currently only support the *main* renderer however this may change in future versions.
     *
     * @return $this
     */
    public function setRenderer($renderer)
    {
        $this->container['renderer'] = $renderer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


