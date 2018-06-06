<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/geo_target_constant.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geo target constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.GeoTargetConstant</code>
 */
class GeoTargetConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * Geo target constant English name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    private $name = null;
    /**
     * The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 5;</code>
     */
    private $country_code = null;
    /**
     * Geo target constant target type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_type = 6;</code>
     */
    private $target_type = null;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\GeoTargetConstant::initOnce();
        parent::__construct();
    }

    /**
     * The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Geo target constant English name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Geo target constant English name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Geo target constant target type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_type = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetType()
    {
        return $this->target_type;
    }

    /**
     * Geo target constant target type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_type = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetType($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->target_type = $var;

        return $this;
    }

}

