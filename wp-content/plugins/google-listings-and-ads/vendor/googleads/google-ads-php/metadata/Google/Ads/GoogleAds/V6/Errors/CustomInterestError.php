<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/custom_interest_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Errors;

class CustomInterestError
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
?
:google/ads/googleads/v6/errors/custom_interest_error.protogoogle.ads.googleads.v6.errors"?
CustomInterestErrorEnum"?
CustomInterestError
UNSPECIFIED 
UNKNOWN
NAME_ALREADY_USEDF
BCUSTOM_INTEREST_MEMBER_ID_AND_TYPE_PARAMETER_NOT_PRESENT_IN_REMOVE 
TYPE_AND_PARAMETER_NOT_FOUND&
"TYPE_AND_PARAMETER_ALREADY_EXISTED\'
#INVALID_CUSTOM_INTEREST_MEMBER_TYPE
CANNOT_REMOVE_WHILE_IN_USE
CANNOT_CHANGE_TYPEB?
"com.google.ads.googleads.v6.errorsBCustomInterestErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors?GAA?Google.Ads.GoogleAds.V6.Errors?Google\\Ads\\GoogleAds\\V6\\Errors?"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

