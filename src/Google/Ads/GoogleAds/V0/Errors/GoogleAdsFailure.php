<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/errors.proto

namespace Google\Ads\GoogleAds\V0\Errors;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes how a GoogleAds API call failed. It's returned inside
 * google.rpc.Status.details when a call fails.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.errors.GoogleAdsFailure</code>
 */
class GoogleAdsFailure extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of errors that occurred.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.errors.GoogleAdsError errors = 1;</code>
     */
    private $errors;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\Errors::initOnce();
        parent::__construct();
    }

    /**
     * The list of errors that occurred.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.errors.GoogleAdsError errors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * The list of errors that occurred.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.errors.GoogleAdsError errors = 1;</code>
     * @param \Google\Ads\GoogleAds\V0\Errors\GoogleAdsError[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Errors\GoogleAdsError::class);
        $this->errors = $arr;

        return $this;
    }

}

