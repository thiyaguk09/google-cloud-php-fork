<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/generic.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1;

class Generic
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/devtools/artifactregistry/v1/generic.proto#google.devtools.artifactregistry.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
GenericArtifact
name (	
version (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A:��A�
/artifactregistry.googleapis.com/GenericArtifacteprojects/{project}/locations/{location}/repositories/{repository}/genericArtifacts/{generic_artifact}B�
\'com.google.devtools.artifactregistry.v1BGenericProtoPZPcloud.google.com/go/artifactregistry/apiv1/artifactregistrypb;artifactregistrypb� Google.Cloud.ArtifactRegistry.V1� Google\\Cloud\\ArtifactRegistry\\V1�#Google::Cloud::ArtifactRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

