<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/preferred_content_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\PreferredContentTypeEnum;

/**
 * Enumerates preferred content criterion type.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.PreferredContentTypeEnum.PreferredContentType</code>
 */
class PreferredContentType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Represents top content on YouTube.
     *
     * Generated from protobuf enum <code>YOUTUBE_TOP_CONTENT = 400;</code>
     */
    const YOUTUBE_TOP_CONTENT = 400;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PreferredContentType::class, \Google\Ads\GoogleAds\V0\Enums\PreferredContentTypeEnum_PreferredContentType::class);
