<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/user/v1alpha/user.proto

namespace Sugarcrm\Apis\Iam\User\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.user.v1alpha.SendEmailForResetPasswordRequest</code>
 */
class SendEmailForResetPasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apis\Iam\User\V1Alpha\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

