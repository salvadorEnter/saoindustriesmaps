<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/provider/v1alpha/provider.proto

namespace Sugarcrm\Apis\Iam\Provider\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Login lockout control
 *
 * Generated from protobuf message <code>sugarcrm.apis.iam.provider.v1alpha.LoginLockout</code>
 */
class LoginLockout extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.provider.v1alpha.LoginLockout.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * Lockout users after un-successful login attempts
     *
     * Generated from protobuf field <code>uint32 attempt = 2;</code>
     */
    private $attempt = 0;
    /**
     * Login lockout time. Used if type TIME.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time = 3;</code>
     */
    private $time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type int $attempt
     *           Lockout users after un-successful login attempts
     *     @type \Google\Protobuf\Duration $time
     *           Login lockout time. Used if type TIME.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apis\Iam\Provider\V1Alpha\Provider::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.provider.v1alpha.LoginLockout.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.provider.v1alpha.LoginLockout.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Sugarcrm\Apis\Iam\Provider\V1alpha\LoginLockout_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Lockout users after un-successful login attempts
     *
     * Generated from protobuf field <code>uint32 attempt = 2;</code>
     * @return int
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Lockout users after un-successful login attempts
     *
     * Generated from protobuf field <code>uint32 attempt = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAttempt($var)
    {
        GPBUtil::checkUint32($var);
        $this->attempt = $var;

        return $this;
    }

    /**
     * Login lockout time. Used if type TIME.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time = 3;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Login lockout time. Used if type TIME.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->time = $var;

        return $this;
    }

}
