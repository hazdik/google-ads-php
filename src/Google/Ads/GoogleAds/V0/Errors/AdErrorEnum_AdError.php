<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/ad_error.proto

namespace Google\Ads\GoogleAds\V0\Errors;

/**
 * Enum describing possible ad errors.
 *
 * Protobuf enum <code>Google\Ads\Googleads\V0\Errors\AdErrorEnum\AdError</code>
 */
class AdErrorEnum_AdError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Ad customizers are not supported for ad type.
     *
     * Generated from protobuf enum <code>AD_CUSTOMIZERS_NOT_SUPPORTED_FOR_AD_TYPE = 2;</code>
     */
    const AD_CUSTOMIZERS_NOT_SUPPORTED_FOR_AD_TYPE = 2;
    /**
     * Estimating character sizes the string is too long.
     *
     * Generated from protobuf enum <code>APPROXIMATELY_TOO_LONG = 3;</code>
     */
    const APPROXIMATELY_TOO_LONG = 3;
    /**
     * Estimating character sizes the string is too short.
     *
     * Generated from protobuf enum <code>APPROXIMATELY_TOO_SHORT = 4;</code>
     */
    const APPROXIMATELY_TOO_SHORT = 4;
    /**
     * There is a problem with the snippet.
     *
     * Generated from protobuf enum <code>BAD_SNIPPET = 5;</code>
     */
    const BAD_SNIPPET = 5;
    /**
     * Cannot modify an ad.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_AD = 6;</code>
     */
    const CANNOT_MODIFY_AD = 6;
    /**
     * business name and url cannot be set at the same time
     *
     * Generated from protobuf enum <code>CANNOT_SET_BUSINESS_NAME_IF_URL_SET = 7;</code>
     */
    const CANNOT_SET_BUSINESS_NAME_IF_URL_SET = 7;
    /**
     * The specified field is incompatible with this ad's type or settings.
     *
     * Generated from protobuf enum <code>CANNOT_SET_FIELD = 8;</code>
     */
    const CANNOT_SET_FIELD = 8;
    /**
     * Cannot set field when originAdId is set.
     *
     * Generated from protobuf enum <code>CANNOT_SET_FIELD_WITH_ORIGIN_AD_ID_SET = 9;</code>
     */
    const CANNOT_SET_FIELD_WITH_ORIGIN_AD_ID_SET = 9;
    /**
     * Cannot set field when an existing ad id is set for sharing.
     *
     * Generated from protobuf enum <code>CANNOT_SET_FIELD_WITH_AD_ID_SET_FOR_SHARING = 10;</code>
     */
    const CANNOT_SET_FIELD_WITH_AD_ID_SET_FOR_SHARING = 10;
    /**
     * Cannot set allowFlexibleColor false if no color is provided by user.
     *
     * Generated from protobuf enum <code>CANNOT_SET_ALLOW_FLEXIBLE_COLOR_FALSE = 11;</code>
     */
    const CANNOT_SET_ALLOW_FLEXIBLE_COLOR_FALSE = 11;
    /**
     * When user select native, no color control is allowed because we will
     * always respect publisher color for native format serving.
     *
     * Generated from protobuf enum <code>CANNOT_SET_COLOR_CONTROL_WHEN_NATIVE_FORMAT_SETTING = 12;</code>
     */
    const CANNOT_SET_COLOR_CONTROL_WHEN_NATIVE_FORMAT_SETTING = 12;
    /**
     * Cannot specify a url for the ad type
     *
     * Generated from protobuf enum <code>CANNOT_SET_URL = 13;</code>
     */
    const CANNOT_SET_URL = 13;
    /**
     * Cannot specify a tracking or mobile url without also setting final urls
     *
     * Generated from protobuf enum <code>CANNOT_SET_WITHOUT_FINAL_URLS = 14;</code>
     */
    const CANNOT_SET_WITHOUT_FINAL_URLS = 14;
    /**
     * Cannot specify a legacy url and a final url simultaneously
     *
     * Generated from protobuf enum <code>CANNOT_SET_WITH_FINAL_URLS = 15;</code>
     */
    const CANNOT_SET_WITH_FINAL_URLS = 15;
    /**
     * Cannot specify a legacy url and a tracking url template simultaneously in
     * a DSA.
     *
     * Generated from protobuf enum <code>CANNOT_SET_WITH_TRACKING_URL_TEMPLATE = 16;</code>
     */
    const CANNOT_SET_WITH_TRACKING_URL_TEMPLATE = 16;
    /**
     * Cannot specify a urls in UrlData and in template fields simultaneously.
     *
     * Generated from protobuf enum <code>CANNOT_SET_WITH_URL_DATA = 17;</code>
     */
    const CANNOT_SET_WITH_URL_DATA = 17;
    /**
     * This operator cannot be used with a subclass of Ad.
     *
     * Generated from protobuf enum <code>CANNOT_USE_AD_SUBCLASS_FOR_OPERATOR = 18;</code>
     */
    const CANNOT_USE_AD_SUBCLASS_FOR_OPERATOR = 18;
    /**
     * Customer is not approved for mobile ads.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_APPROVED_MOBILEADS = 19;</code>
     */
    const CUSTOMER_NOT_APPROVED_MOBILEADS = 19;
    /**
     * Customer is not approved for 3PAS richmedia ads.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS = 20;</code>
     */
    const CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS = 20;
    /**
     * Customer is not approved for 3PAS redirect richmedia (Ad Exchange) ads.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS = 21;</code>
     */
    const CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS = 21;
    /**
     * Not an eligible customer
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_ELIGIBLE = 22;</code>
     */
    const CUSTOMER_NOT_ELIGIBLE = 22;
    /**
     * Customer is not eligible for updating beacon url
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL = 23;</code>
     */
    const CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL = 23;
    /**
     * There already exists an ad with the same dimensions in the union.
     *
     * Generated from protobuf enum <code>DIMENSION_ALREADY_IN_UNION = 24;</code>
     */
    const DIMENSION_ALREADY_IN_UNION = 24;
    /**
     * Ad's dimension must be set before setting union dimension.
     *
     * Generated from protobuf enum <code>DIMENSION_MUST_BE_SET = 25;</code>
     */
    const DIMENSION_MUST_BE_SET = 25;
    /**
     * Ad's dimension must be included in the union dimensions.
     *
     * Generated from protobuf enum <code>DIMENSION_NOT_IN_UNION = 26;</code>
     */
    const DIMENSION_NOT_IN_UNION = 26;
    /**
     * Display Url cannot be specified (applies to Ad Exchange Ads)
     *
     * Generated from protobuf enum <code>DISPLAY_URL_CANNOT_BE_SPECIFIED = 27;</code>
     */
    const DISPLAY_URL_CANNOT_BE_SPECIFIED = 27;
    /**
     * Telephone number contains invalid characters or invalid format. Please
     * re-enter your number using digits (0-9), dashes (-), and parentheses
     * only.
     *
     * Generated from protobuf enum <code>DOMESTIC_PHONE_NUMBER_FORMAT = 28;</code>
     */
    const DOMESTIC_PHONE_NUMBER_FORMAT = 28;
    /**
     * Emergency telephone numbers are not allowed. Please enter a valid
     * domestic phone number to connect customers to your business.
     *
     * Generated from protobuf enum <code>EMERGENCY_PHONE_NUMBER = 29;</code>
     */
    const EMERGENCY_PHONE_NUMBER = 29;
    /**
     * A required field was not specified or is an empty string.
     *
     * Generated from protobuf enum <code>EMPTY_FIELD = 30;</code>
     */
    const EMPTY_FIELD = 30;
    /**
     * A feed attribute referenced in an ad customizer tag is not in the ad
     * customizer mapping for the feed.
     *
     * Generated from protobuf enum <code>FEED_ATTRIBUTE_MUST_HAVE_MAPPING_FOR_TYPE_ID = 31;</code>
     */
    const FEED_ATTRIBUTE_MUST_HAVE_MAPPING_FOR_TYPE_ID = 31;
    /**
     * The ad customizer field mapping for the feed attribute does not match the
     * expected field type.
     *
     * Generated from protobuf enum <code>FEED_ATTRIBUTE_MAPPING_TYPE_MISMATCH = 32;</code>
     */
    const FEED_ATTRIBUTE_MAPPING_TYPE_MISMATCH = 32;
    /**
     * The use of ad customizer tags in the ad text is disallowed. Details in
     * trigger.
     *
     * Generated from protobuf enum <code>ILLEGAL_AD_CUSTOMIZER_TAG_USE = 33;</code>
     */
    const ILLEGAL_AD_CUSTOMIZER_TAG_USE = 33;
    /**
     * Tags of the form {PH_x}, where x is a number, are disallowed in ad text.
     *
     * Generated from protobuf enum <code>ILLEGAL_TAG_USE = 34;</code>
     */
    const ILLEGAL_TAG_USE = 34;
    /**
     * The dimensions of the ad are specified or derived in multiple ways and
     * are not consistent.
     *
     * Generated from protobuf enum <code>INCONSISTENT_DIMENSIONS = 35;</code>
     */
    const INCONSISTENT_DIMENSIONS = 35;
    /**
     * The status cannot differ among template ads of the same union.
     *
     * Generated from protobuf enum <code>INCONSISTENT_STATUS_IN_TEMPLATE_UNION = 36;</code>
     */
    const INCONSISTENT_STATUS_IN_TEMPLATE_UNION = 36;
    /**
     * The length of the string is not valid.
     *
     * Generated from protobuf enum <code>INCORRECT_LENGTH = 37;</code>
     */
    const INCORRECT_LENGTH = 37;
    /**
     * The ad is ineligible for upgrade.
     *
     * Generated from protobuf enum <code>INELIGIBLE_FOR_UPGRADE = 38;</code>
     */
    const INELIGIBLE_FOR_UPGRADE = 38;
    /**
     * User cannot create mobile ad for countries targeted in specified
     * campaign.
     *
     * Generated from protobuf enum <code>INVALID_AD_ADDRESS_CAMPAIGN_TARGET = 39;</code>
     */
    const INVALID_AD_ADDRESS_CAMPAIGN_TARGET = 39;
    /**
     * Invalid Ad type. A specific type of Ad is required.
     *
     * Generated from protobuf enum <code>INVALID_AD_TYPE = 40;</code>
     */
    const INVALID_AD_TYPE = 40;
    /**
     * Headline, description or phone cannot be present when creating mobile
     * image ad.
     *
     * Generated from protobuf enum <code>INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE = 41;</code>
     */
    const INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE = 41;
    /**
     * Image cannot be present when creating mobile text ad.
     *
     * Generated from protobuf enum <code>INVALID_ATTRIBUTES_FOR_MOBILE_TEXT = 42;</code>
     */
    const INVALID_ATTRIBUTES_FOR_MOBILE_TEXT = 42;
    /**
     * Invalid call to action text.
     *
     * Generated from protobuf enum <code>INVALID_CALL_TO_ACTION_TEXT = 43;</code>
     */
    const INVALID_CALL_TO_ACTION_TEXT = 43;
    /**
     * Invalid character in URL.
     *
     * Generated from protobuf enum <code>INVALID_CHARACTER_FOR_URL = 44;</code>
     */
    const INVALID_CHARACTER_FOR_URL = 44;
    /**
     * Creative's country code is not valid.
     *
     * Generated from protobuf enum <code>INVALID_COUNTRY_CODE = 45;</code>
     */
    const INVALID_COUNTRY_CODE = 45;
    /**
     * Invalid use of Dynamic Search Ads tags ({lpurl} etc.)
     *
     * Generated from protobuf enum <code>INVALID_DSA_URL_TAG = 46;</code>
     */
    const INVALID_DSA_URL_TAG = 46;
    /**
     * Invalid use of Expanded Dynamic Search Ads tags ({lpurl} etc.)
     *
     * Generated from protobuf enum <code>INVALID_EXPANDED_DYNAMIC_SEARCH_AD_TAG = 47;</code>
     */
    const INVALID_EXPANDED_DYNAMIC_SEARCH_AD_TAG = 47;
    /**
     * An input error whose real reason was not properly mapped (should not
     * happen).
     *
     * Generated from protobuf enum <code>INVALID_INPUT = 48;</code>
     */
    const INVALID_INPUT = 48;
    /**
     * An invalid markup language was entered.
     *
     * Generated from protobuf enum <code>INVALID_MARKUP_LANGUAGE = 49;</code>
     */
    const INVALID_MARKUP_LANGUAGE = 49;
    /**
     * An invalid mobile carrier was entered.
     *
     * Generated from protobuf enum <code>INVALID_MOBILE_CARRIER = 50;</code>
     */
    const INVALID_MOBILE_CARRIER = 50;
    /**
     * Specified mobile carriers target a country not targeted by the campaign.
     *
     * Generated from protobuf enum <code>INVALID_MOBILE_CARRIER_TARGET = 51;</code>
     */
    const INVALID_MOBILE_CARRIER_TARGET = 51;
    /**
     * Wrong number of elements for given element type
     *
     * Generated from protobuf enum <code>INVALID_NUMBER_OF_ELEMENTS = 52;</code>
     */
    const INVALID_NUMBER_OF_ELEMENTS = 52;
    /**
     * The format of the telephone number is incorrect. Please re-enter the
     * number using the correct format.
     *
     * Generated from protobuf enum <code>INVALID_PHONE_NUMBER_FORMAT = 53;</code>
     */
    const INVALID_PHONE_NUMBER_FORMAT = 53;
    /**
     * The certified vendor format id is incorrect.
     *
     * Generated from protobuf enum <code>INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID = 54;</code>
     */
    const INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID = 54;
    /**
     * The template ad data contains validation errors.
     *
     * Generated from protobuf enum <code>INVALID_TEMPLATE_DATA = 55;</code>
     */
    const INVALID_TEMPLATE_DATA = 55;
    /**
     * The template field doesn't have have the correct type.
     *
     * Generated from protobuf enum <code>INVALID_TEMPLATE_ELEMENT_FIELD_TYPE = 56;</code>
     */
    const INVALID_TEMPLATE_ELEMENT_FIELD_TYPE = 56;
    /**
     * Invalid template id.
     *
     * Generated from protobuf enum <code>INVALID_TEMPLATE_ID = 57;</code>
     */
    const INVALID_TEMPLATE_ID = 57;
    /**
     * After substituting replacement strings, the line is too wide.
     *
     * Generated from protobuf enum <code>LINE_TOO_WIDE = 58;</code>
     */
    const LINE_TOO_WIDE = 58;
    /**
     * The feed referenced must have ad customizer mapping to be used in a
     * customizer tag.
     *
     * Generated from protobuf enum <code>MISSING_AD_CUSTOMIZER_MAPPING = 59;</code>
     */
    const MISSING_AD_CUSTOMIZER_MAPPING = 59;
    /**
     * Missing address component in template element address field.
     *
     * Generated from protobuf enum <code>MISSING_ADDRESS_COMPONENT = 60;</code>
     */
    const MISSING_ADDRESS_COMPONENT = 60;
    /**
     * An ad name must be entered.
     *
     * Generated from protobuf enum <code>MISSING_ADVERTISEMENT_NAME = 61;</code>
     */
    const MISSING_ADVERTISEMENT_NAME = 61;
    /**
     * Business name must be entered.
     *
     * Generated from protobuf enum <code>MISSING_BUSINESS_NAME = 62;</code>
     */
    const MISSING_BUSINESS_NAME = 62;
    /**
     * Description (line 2) must be entered.
     *
     * Generated from protobuf enum <code>MISSING_DESCRIPTION1 = 63;</code>
     */
    const MISSING_DESCRIPTION1 = 63;
    /**
     * Description (line 3) must be entered.
     *
     * Generated from protobuf enum <code>MISSING_DESCRIPTION2 = 64;</code>
     */
    const MISSING_DESCRIPTION2 = 64;
    /**
     * The destination url must contain at least one tag (e.g. {lpurl})
     *
     * Generated from protobuf enum <code>MISSING_DESTINATION_URL_TAG = 65;</code>
     */
    const MISSING_DESTINATION_URL_TAG = 65;
    /**
     * The tracking url template of ExpandedDynamicSearchAd must contain at
     * least one tag. (e.g. {lpurl})
     *
     * Generated from protobuf enum <code>MISSING_LANDING_PAGE_URL_TAG = 66;</code>
     */
    const MISSING_LANDING_PAGE_URL_TAG = 66;
    /**
     * A valid dimension must be specified for this ad.
     *
     * Generated from protobuf enum <code>MISSING_DIMENSION = 67;</code>
     */
    const MISSING_DIMENSION = 67;
    /**
     * A display URL must be entered.
     *
     * Generated from protobuf enum <code>MISSING_DISPLAY_URL = 68;</code>
     */
    const MISSING_DISPLAY_URL = 68;
    /**
     * Headline must be entered.
     *
     * Generated from protobuf enum <code>MISSING_HEADLINE = 69;</code>
     */
    const MISSING_HEADLINE = 69;
    /**
     * A height must be entered.
     *
     * Generated from protobuf enum <code>MISSING_HEIGHT = 70;</code>
     */
    const MISSING_HEIGHT = 70;
    /**
     * An image must be entered.
     *
     * Generated from protobuf enum <code>MISSING_IMAGE = 71;</code>
     */
    const MISSING_IMAGE = 71;
    /**
     * Marketing image or product videos are required.
     *
     * Generated from protobuf enum <code>MISSING_MARKETING_IMAGE_OR_PRODUCT_VIDEOS = 72;</code>
     */
    const MISSING_MARKETING_IMAGE_OR_PRODUCT_VIDEOS = 72;
    /**
     * The markup language in which your site is written must be entered.
     *
     * Generated from protobuf enum <code>MISSING_MARKUP_LANGUAGES = 73;</code>
     */
    const MISSING_MARKUP_LANGUAGES = 73;
    /**
     * A mobile carrier must be entered.
     *
     * Generated from protobuf enum <code>MISSING_MOBILE_CARRIER = 74;</code>
     */
    const MISSING_MOBILE_CARRIER = 74;
    /**
     * Phone number must be entered.
     *
     * Generated from protobuf enum <code>MISSING_PHONE = 75;</code>
     */
    const MISSING_PHONE = 75;
    /**
     * Missing required template fields
     *
     * Generated from protobuf enum <code>MISSING_REQUIRED_TEMPLATE_FIELDS = 76;</code>
     */
    const MISSING_REQUIRED_TEMPLATE_FIELDS = 76;
    /**
     * Missing a required field value
     *
     * Generated from protobuf enum <code>MISSING_TEMPLATE_FIELD_VALUE = 77;</code>
     */
    const MISSING_TEMPLATE_FIELD_VALUE = 77;
    /**
     * The ad must have text.
     *
     * Generated from protobuf enum <code>MISSING_TEXT = 78;</code>
     */
    const MISSING_TEXT = 78;
    /**
     * A visible URL must be entered.
     *
     * Generated from protobuf enum <code>MISSING_VISIBLE_URL = 79;</code>
     */
    const MISSING_VISIBLE_URL = 79;
    /**
     * A width must be entered.
     *
     * Generated from protobuf enum <code>MISSING_WIDTH = 80;</code>
     */
    const MISSING_WIDTH = 80;
    /**
     * Only 1 feed can be used as the source of ad customizer substitutions in a
     * single ad.
     *
     * Generated from protobuf enum <code>MULTIPLE_DISTINCT_FEEDS_UNSUPPORTED = 81;</code>
     */
    const MULTIPLE_DISTINCT_FEEDS_UNSUPPORTED = 81;
    /**
     * TempAdUnionId must be use when adding template ads.
     *
     * Generated from protobuf enum <code>MUST_USE_TEMP_AD_UNION_ID_ON_ADD = 82;</code>
     */
    const MUST_USE_TEMP_AD_UNION_ID_ON_ADD = 82;
    /**
     * The string has too many characters.
     *
     * Generated from protobuf enum <code>TOO_LONG = 83;</code>
     */
    const TOO_LONG = 83;
    /**
     * The string has too few characters.
     *
     * Generated from protobuf enum <code>TOO_SHORT = 84;</code>
     */
    const TOO_SHORT = 84;
    /**
     * Ad union dimensions cannot change for saved ads.
     *
     * Generated from protobuf enum <code>UNION_DIMENSIONS_CANNOT_CHANGE = 85;</code>
     */
    const UNION_DIMENSIONS_CANNOT_CHANGE = 85;
    /**
     * Address component is not {country, lat, lng}.
     *
     * Generated from protobuf enum <code>UNKNOWN_ADDRESS_COMPONENT = 86;</code>
     */
    const UNKNOWN_ADDRESS_COMPONENT = 86;
    /**
     * Unknown unique field name
     *
     * Generated from protobuf enum <code>UNKNOWN_FIELD_NAME = 87;</code>
     */
    const UNKNOWN_FIELD_NAME = 87;
    /**
     * Unknown unique name (template element type specifier)
     *
     * Generated from protobuf enum <code>UNKNOWN_UNIQUE_NAME = 88;</code>
     */
    const UNKNOWN_UNIQUE_NAME = 88;
    /**
     * Unsupported ad dimension
     *
     * Generated from protobuf enum <code>UNSUPPORTED_DIMENSIONS = 89;</code>
     */
    const UNSUPPORTED_DIMENSIONS = 89;
    /**
     * URL starts with an invalid scheme.
     *
     * Generated from protobuf enum <code>URL_INVALID_SCHEME = 90;</code>
     */
    const URL_INVALID_SCHEME = 90;
    /**
     * URL ends with an invalid top-level domain name.
     *
     * Generated from protobuf enum <code>URL_INVALID_TOP_LEVEL_DOMAIN = 91;</code>
     */
    const URL_INVALID_TOP_LEVEL_DOMAIN = 91;
    /**
     * URL contains illegal characters.
     *
     * Generated from protobuf enum <code>URL_MALFORMED = 92;</code>
     */
    const URL_MALFORMED = 92;
    /**
     * URL must contain a host name.
     *
     * Generated from protobuf enum <code>URL_NO_HOST = 93;</code>
     */
    const URL_NO_HOST = 93;
    /**
     * URL not equivalent during upgrade.
     *
     * Generated from protobuf enum <code>URL_NOT_EQUIVALENT = 94;</code>
     */
    const URL_NOT_EQUIVALENT = 94;
    /**
     * URL host name too long to be stored as visible URL (applies to Ad
     * Exchange ads)
     *
     * Generated from protobuf enum <code>URL_HOST_NAME_TOO_LONG = 95;</code>
     */
    const URL_HOST_NAME_TOO_LONG = 95;
    /**
     * URL must start with a scheme.
     *
     * Generated from protobuf enum <code>URL_NO_SCHEME = 96;</code>
     */
    const URL_NO_SCHEME = 96;
    /**
     * URL should end in a valid domain extension, such as .com or .net.
     *
     * Generated from protobuf enum <code>URL_NO_TOP_LEVEL_DOMAIN = 97;</code>
     */
    const URL_NO_TOP_LEVEL_DOMAIN = 97;
    /**
     * URL must not end with a path.
     *
     * Generated from protobuf enum <code>URL_PATH_NOT_ALLOWED = 98;</code>
     */
    const URL_PATH_NOT_ALLOWED = 98;
    /**
     * URL must not specify a port.
     *
     * Generated from protobuf enum <code>URL_PORT_NOT_ALLOWED = 99;</code>
     */
    const URL_PORT_NOT_ALLOWED = 99;
    /**
     * URL must not contain a query.
     *
     * Generated from protobuf enum <code>URL_QUERY_NOT_ALLOWED = 100;</code>
     */
    const URL_QUERY_NOT_ALLOWED = 100;
    /**
     * A url scheme is not allowed in front of tag in dest url (e.g.
     * http://{lpurl})
     *
     * Generated from protobuf enum <code>URL_SCHEME_BEFORE_DSA_TAG = 101;</code>
     */
    const URL_SCHEME_BEFORE_DSA_TAG = 101;
    /**
     * A url scheme is not allowed in front of tag in tracking url template
     * (e.g. http://{lpurl})
     *
     * Generated from protobuf enum <code>URL_SCHEME_BEFORE_EXPANDED_DYNAMIC_SEARCH_AD_TAG = 102;</code>
     */
    const URL_SCHEME_BEFORE_EXPANDED_DYNAMIC_SEARCH_AD_TAG = 102;
    /**
     * The user does not have permissions to create a template ad for the given
     * template.
     *
     * Generated from protobuf enum <code>USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE = 103;</code>
     */
    const USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE = 103;
    /**
     * Expandable setting is inconsistent/wrong. For example, an AdX ad is
     * invalid if it has a expandable vendor format but no expanding directions
     * specified, or expanding directions is specified, but the vendor format is
     * not expandable.
     *
     * Generated from protobuf enum <code>INCONSISTENT_EXPANDABLE_SETTINGS = 104;</code>
     */
    const INCONSISTENT_EXPANDABLE_SETTINGS = 104;
    /**
     * Format is invalid
     *
     * Generated from protobuf enum <code>INVALID_FORMAT = 105;</code>
     */
    const INVALID_FORMAT = 105;
    /**
     * The text of this field did not match a pattern of allowed values.
     *
     * Generated from protobuf enum <code>INVALID_FIELD_TEXT = 106;</code>
     */
    const INVALID_FIELD_TEXT = 106;
    /**
     * Template element is mising
     *
     * Generated from protobuf enum <code>ELEMENT_NOT_PRESENT = 107;</code>
     */
    const ELEMENT_NOT_PRESENT = 107;
    /**
     * Error occurred during image processing
     *
     * Generated from protobuf enum <code>IMAGE_ERROR = 108;</code>
     */
    const IMAGE_ERROR = 108;
    /**
     * The value is not within the valid range
     *
     * Generated from protobuf enum <code>VALUE_NOT_IN_RANGE = 109;</code>
     */
    const VALUE_NOT_IN_RANGE = 109;
    /**
     * Template element field is not present
     *
     * Generated from protobuf enum <code>FIELD_NOT_PRESENT = 110;</code>
     */
    const FIELD_NOT_PRESENT = 110;
    /**
     * Address is incomplete
     *
     * Generated from protobuf enum <code>ADDRESS_NOT_COMPLETE = 111;</code>
     */
    const ADDRESS_NOT_COMPLETE = 111;
    /**
     * Invalid address
     *
     * Generated from protobuf enum <code>ADDRESS_INVALID = 112;</code>
     */
    const ADDRESS_INVALID = 112;
    /**
     * Error retrieving specified video
     *
     * Generated from protobuf enum <code>VIDEO_RETRIEVAL_ERROR = 113;</code>
     */
    const VIDEO_RETRIEVAL_ERROR = 113;
    /**
     * Error processing audio
     *
     * Generated from protobuf enum <code>AUDIO_ERROR = 114;</code>
     */
    const AUDIO_ERROR = 114;
    /**
     * Display URL is incorrect for YouTube PYV ads
     *
     * Generated from protobuf enum <code>INVALID_YOUTUBE_DISPLAY_URL = 115;</code>
     */
    const INVALID_YOUTUBE_DISPLAY_URL = 115;
    /**
     * Too many product Images in GmailAd
     *
     * Generated from protobuf enum <code>TOO_MANY_PRODUCT_IMAGES = 116;</code>
     */
    const TOO_MANY_PRODUCT_IMAGES = 116;
    /**
     * Too many product Videos in GmailAd
     *
     * Generated from protobuf enum <code>TOO_MANY_PRODUCT_VIDEOS = 117;</code>
     */
    const TOO_MANY_PRODUCT_VIDEOS = 117;
    /**
     * The device preference is not compatible with the ad type
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_AD_TYPE_AND_DEVICE_PREFERENCE = 118;</code>
     */
    const INCOMPATIBLE_AD_TYPE_AND_DEVICE_PREFERENCE = 118;
    /**
     * Call tracking is not supported for specified country.
     *
     * Generated from protobuf enum <code>CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 119;</code>
     */
    const CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 119;
    /**
     * Carrier specific short number is not allowed.
     *
     * Generated from protobuf enum <code>CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 120;</code>
     */
    const CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 120;
    /**
     * Specified phone number type is disallowed.
     *
     * Generated from protobuf enum <code>DISALLOWED_NUMBER_TYPE = 121;</code>
     */
    const DISALLOWED_NUMBER_TYPE = 121;
    /**
     * Phone number not supported for country.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 122;</code>
     */
    const PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 122;
    /**
     * Phone number not supported with call tracking enabled for country.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 123;</code>
     */
    const PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 123;
    /**
     * Premium rate phone number is not allowed.
     *
     * Generated from protobuf enum <code>PREMIUM_RATE_NUMBER_NOT_ALLOWED = 124;</code>
     */
    const PREMIUM_RATE_NUMBER_NOT_ALLOWED = 124;
    /**
     * Vanity phone number is not allowed.
     *
     * Generated from protobuf enum <code>VANITY_PHONE_NUMBER_NOT_ALLOWED = 125;</code>
     */
    const VANITY_PHONE_NUMBER_NOT_ALLOWED = 125;
    /**
     * Invalid call conversion type id.
     *
     * Generated from protobuf enum <code>INVALID_CALL_CONVERSION_TYPE_ID = 126;</code>
     */
    const INVALID_CALL_CONVERSION_TYPE_ID = 126;
    /**
     * Cannot disable call conversion and set conversion type id.
     *
     * Generated from protobuf enum <code>CANNOT_DISABLE_CALL_CONVERSION_AND_SET_CONVERSION_TYPE_ID = 127;</code>
     */
    const CANNOT_DISABLE_CALL_CONVERSION_AND_SET_CONVERSION_TYPE_ID = 127;
    /**
     * Cannot set path2 without path1.
     *
     * Generated from protobuf enum <code>CANNOT_SET_PATH2_WITHOUT_PATH1 = 128;</code>
     */
    const CANNOT_SET_PATH2_WITHOUT_PATH1 = 128;
    /**
     * Missing domain name in campaign setting when adding expanded dynamic
     * search ad.
     *
     * Generated from protobuf enum <code>MISSING_DYNAMIC_SEARCH_ADS_SETTING_DOMAIN_NAME = 129;</code>
     */
    const MISSING_DYNAMIC_SEARCH_ADS_SETTING_DOMAIN_NAME = 129;
    /**
     * The associated ad is not compatible with restriction type.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_WITH_RESTRICTION_TYPE = 130;</code>
     */
    const INCOMPATIBLE_WITH_RESTRICTION_TYPE = 130;
}

