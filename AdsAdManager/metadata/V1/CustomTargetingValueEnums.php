<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/custom_targeting_value_enums.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class CustomTargetingValueEnums
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/admanager/v1/custom_targeting_value_enums.protogoogle.ads.admanager.v1"�
CustomTargetingValueStatusEnum"e
CustomTargetingValueStatus-
)CUSTOM_TARGETING_VALUE_STATUS_UNSPECIFIED 

ACTIVE
INACTIVE"�
!CustomTargetingValueMatchTypeEnum"�
CustomTargetingValueMatchType1
-CUSTOM_TARGETING_VALUE_MATCH_TYPE_UNSPECIFIED 	
EXACT	
BROAD

PREFIX
BROAD_PREFIX

SUFFIX
CONTAINSB�
com.google.ads.admanager.v1BCustomTargetingValueEnumsProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

