<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_push_notification.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: platform/api.push.notification
 *
 * Generated from protobuf message <code>platform.ApiPushNotificationRequest</code>
 */
class ApiPushNotificationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.platform.PushHeader pushHeader = 1;</code>
     */
    private $pushHeader = null;
    /**
     * Generated from protobuf field <code>.platform.PushBody pushBody = 2;</code>
     */
    private $pushBody = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zaly\Proto\Platform\PushHeader $pushHeader
     *     @type \Zaly\Proto\Platform\PushBody $pushBody
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\ApiPushNotification::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.platform.PushHeader pushHeader = 1;</code>
     * @return \Zaly\Proto\Platform\PushHeader
     */
    public function getPushHeader()
    {
        return $this->pushHeader;
    }

    /**
     * Generated from protobuf field <code>.platform.PushHeader pushHeader = 1;</code>
     * @param \Zaly\Proto\Platform\PushHeader $var
     * @return $this
     */
    public function setPushHeader($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Platform\PushHeader::class);
        $this->pushHeader = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.platform.PushBody pushBody = 2;</code>
     * @return \Zaly\Proto\Platform\PushBody
     */
    public function getPushBody()
    {
        return $this->pushBody;
    }

    /**
     * Generated from protobuf field <code>.platform.PushBody pushBody = 2;</code>
     * @param \Zaly\Proto\Platform\PushBody $var
     * @return $this
     */
    public function setPushBody($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Platform\PushBody::class);
        $this->pushBody = $var;

        return $this;
    }

}

