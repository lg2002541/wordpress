<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/targeting_setting.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Common;

class TargetingSetting
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v6/enums/targeting_dimension.protogoogle.ads.googleads.v6.enums"�
TargetingDimensionEnum"�
TargetingDimension
UNSPECIFIED 
UNKNOWN
KEYWORD
AUDIENCE	
TOPIC

GENDER
	AGE_RANGE
	PLACEMENT
PARENTAL_STATUS
INCOME_RANGE	B�
!com.google.ads.googleads.v6.enumsBTargetingDimensionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
6google/ads/googleads/v6/common/targeting_setting.protogoogle.ads.googleads.v6.commongoogle/api/annotations.proto"�
TargetingSettingN
target_restrictions (21.google.ads.googleads.v6.common.TargetRestrictiona
target_restriction_operations (2:.google.ads.googleads.v6.common.TargetRestrictionOperation"�
TargetRestrictione
targeting_dimension (2H.google.ads.googleads.v6.enums.TargetingDimensionEnum.TargetingDimension
bid_only (H �B
	_bid_only"�
TargetRestrictionOperationU
operator (2C.google.ads.googleads.v6.common.TargetRestrictionOperation.Operator@
value (21.google.ads.googleads.v6.common.TargetRestriction"=
Operator
UNSPECIFIED 
UNKNOWN
ADD

REMOVEB�
"com.google.ads.googleads.v6.commonBTargetingSettingProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

