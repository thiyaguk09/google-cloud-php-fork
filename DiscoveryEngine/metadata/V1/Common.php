<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/common.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/discoveryengine/v1/common.protogoogle.cloud.discoveryengine.v1"x
Interval
minimum (H 
exclusive_minimum (H 
maximum (H
exclusive_maximum (HB
minB
max"0
CustomAttribute
text (	
numbers ("/
UserInfo
user_id (	

user_agent (	*b
IndustryVertical!
INDUSTRY_VERTICAL_UNSPECIFIED 
GENERIC	
MEDIA
HEALTHCARE_FHIR*�
SolutionType
SOLUTION_TYPE_UNSPECIFIED  
SOLUTION_TYPE_RECOMMENDATION
SOLUTION_TYPE_SEARCH
SOLUTION_TYPE_CHAT!
SOLUTION_TYPE_GENERATIVE_CHAT*h
SearchUseCase
SEARCH_USE_CASE_UNSPECIFIED 
SEARCH_USE_CASE_SEARCH
SEARCH_USE_CASE_BROWSE*_

SearchTier
SEARCH_TIER_UNSPECIFIED 
SEARCH_TIER_STANDARD
SEARCH_TIER_ENTERPRISE*C
SearchAddOn
SEARCH_ADD_ON_UNSPECIFIED 
SEARCH_ADD_ON_LLMB�
#com.google.cloud.discoveryengine.v1BCommonProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1�A�
%discoveryengine.googleapis.com/BranchQprojects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}jprojects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}�Am
)discoveryengine.googleapis.com/Collection@projects/{project}/locations/{location}/collections/{collection}�AR
\'discoveryengine.googleapis.com/Location\'projects/{project}/locations/{location}�A�
,discoveryengine.googleapis.com/ServingConfig_projects/{project}/locations/{location}/dataStores/{data_store}/servingConfigs/{serving_config}xprojects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/servingConfigs/{serving_config}qprojects/{project}/locations/{location}/collections/{collection}/engines/{engine}/servingConfigs/{serving_config}�A}
.discoveryengine.googleapis.com/GroundingConfigKprojects/{project}/locations/{location}/groundingConfigs/{grounding_config}�Aw
,discoveryengine.googleapis.com/RankingConfigGprojects/{project}/locations/{location}/rankingConfigs/{ranking_config}�Ay
#healthcare.googleapis.com/FhirStoreRprojects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}�A�
&healthcare.googleapis.com/FhirResourcezprojects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}/fhir/{resource_type}/{fhir_resource_id}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

