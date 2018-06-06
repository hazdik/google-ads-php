<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/bidding.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manual click-based bidding where user pays per click.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.ManualCpc</code>
 */
class ManualCpc extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     */
    private $enhanced_cpc_enabled = null;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Bidding::initOnce();
        parent::__construct();
    }

    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getEnhancedCpcEnabled()
    {
        return $this->enhanced_cpc_enabled;
    }

    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnhancedCpcEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enhanced_cpc_enabled = $var;

        return $this;
    }

}

