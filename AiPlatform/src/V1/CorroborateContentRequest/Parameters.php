<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_service.proto

namespace Google\Cloud\AIPlatform\V1\CorroborateContentRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that can be overrided per request.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CorroborateContentRequest.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Only return claims with citation score larger than the
     * threshold.
     *
     * Generated from protobuf field <code>double citation_threshold = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $citation_threshold = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $citation_threshold
     *           Optional. Only return claims with citation score larger than the
     *           threshold.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Only return claims with citation score larger than the
     * threshold.
     *
     * Generated from protobuf field <code>double citation_threshold = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getCitationThreshold()
    {
        return $this->citation_threshold;
    }

    /**
     * Optional. Only return claims with citation score larger than the
     * threshold.
     *
     * Generated from protobuf field <code>double citation_threshold = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setCitationThreshold($var)
    {
        GPBUtil::checkDouble($var);
        $this->citation_threshold = $var;

        return $this;
    }

}


