<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/value.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A generic data container.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    protected $value;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Value::initOnce();
        parent::__construct();
    }

    /**
     * A boolean.
     *
     * Generated from protobuf field <code>bool boolean_value = 1;</code>
     * @return bool
     */
    public function getBooleanValue()
    {
        return $this->readOneof(1);
    }

    /**
     * A boolean.
     *
     * Generated from protobuf field <code>bool boolean_value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setBooleanValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An int64.
     *
     * Generated from protobuf field <code>int64 int64_value = 2;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(2);
    }

    /**
     * An int64.
     *
     * Generated from protobuf field <code>int64 int64_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A float.
     *
     * Generated from protobuf field <code>float float_value = 3;</code>
     * @return float
     */
    public function getFloatValue()
    {
        return $this->readOneof(3);
    }

    /**
     * A float.
     *
     * Generated from protobuf field <code>float float_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A double.
     *
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(4);
    }

    /**
     * A double.
     *
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A string.
     *
     * Generated from protobuf field <code>string string_value = 5;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(5);
    }

    /**
     * A string.
     *
     * Generated from protobuf field <code>string string_value = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

