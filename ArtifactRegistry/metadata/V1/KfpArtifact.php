<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/kfp_artifact.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1;

class KfpArtifact
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/devtools/artifactregistry/v1/kfp_artifact.proto#google.devtools.artifactregistry.v1google/api/resource.proto"�
KfpArtifact
name (	B�A
version (	:��A�
+artifactregistry.googleapis.com/KfpArtifact]projects/{project}/locations/{location}/repositories/{repository}/kfpArtifacts/{kfp_artifact}B�
\'com.google.devtools.artifactregistry.v1BKfpArtifactProtoPZPcloud.google.com/go/artifactregistry/apiv1/artifactregistrypb;artifactregistrypb� Google.Cloud.ArtifactRegistry.V1� Google\\Cloud\\ArtifactRegistry\\V1�#Google::Cloud::ArtifactRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

