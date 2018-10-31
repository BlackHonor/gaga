<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_group_profile.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.group.profile
 *
 * Generated from protobuf message <code>site.ApiGroupProfileRequest</code>
 */
class ApiGroupProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     */
    private $groupId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $groupId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiGroupProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupId = $var;

        return $this;
    }

}

