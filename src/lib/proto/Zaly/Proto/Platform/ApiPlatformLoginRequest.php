<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_platform_login.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: platform.api.platform.login
 * error:
 *    error.phone  the phone number format is invalid.
 *    error.needRegister
 *
 * Generated from protobuf message <code>platform.ApiPlatformLoginRequest</code>
 */
class ApiPlatformLoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string phoneCountryCode = 1;</code>
     */
    private $phoneCountryCode = '';
    /**
     * Generated from protobuf field <code>string phoneNumber = 2;</code>
     */
    private $phoneNumber = '';
    /**
     * Generated from protobuf field <code>string verifyCode = 3;</code>
     */
    private $verifyCode = '';
    /**
     * Generated from protobuf field <code>string sitePubkPem = 4;</code>
     */
    private $sitePubkPem = '';
    /**
     * Generated from protobuf field <code>string loginNameForRegister = 5;</code>
     */
    private $loginNameForRegister = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phoneCountryCode
     *     @type string $phoneNumber
     *     @type string $verifyCode
     *     @type string $sitePubkPem
     *     @type string $loginNameForRegister
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\ApiPlatformLogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string phoneCountryCode = 1;</code>
     * @return string
     */
    public function getPhoneCountryCode()
    {
        return $this->phoneCountryCode;
    }

    /**
     * Generated from protobuf field <code>string phoneCountryCode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->phoneCountryCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phoneNumber = 2;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Generated from protobuf field <code>string phoneNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phoneNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string verifyCode = 3;</code>
     * @return string
     */
    public function getVerifyCode()
    {
        return $this->verifyCode;
    }

    /**
     * Generated from protobuf field <code>string verifyCode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVerifyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->verifyCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sitePubkPem = 4;</code>
     * @return string
     */
    public function getSitePubkPem()
    {
        return $this->sitePubkPem;
    }

    /**
     * Generated from protobuf field <code>string sitePubkPem = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSitePubkPem($var)
    {
        GPBUtil::checkString($var, True);
        $this->sitePubkPem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string loginNameForRegister = 5;</code>
     * @return string
     */
    public function getLoginNameForRegister()
    {
        return $this->loginNameForRegister;
    }

    /**
     * Generated from protobuf field <code>string loginNameForRegister = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginNameForRegister($var)
    {
        GPBUtil::checkString($var, True);
        $this->loginNameForRegister = $var;

        return $this;
    }

}

