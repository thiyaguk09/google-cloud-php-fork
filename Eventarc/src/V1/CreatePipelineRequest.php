<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the CreatePipeline method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.CreatePipelineRequest</code>
 */
class CreatePipelineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent collection in which to add this pipeline.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The pipeline to create.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Pipeline pipeline = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $pipeline = null;
    /**
     * Required. The user-provided ID to be assigned to the Pipeline.
     *
     * Generated from protobuf field <code>string pipeline_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $pipeline_id = '';
    /**
     * Optional. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                             $parent     Required. The parent collection in which to add this pipeline. Please see
     *                                                       {@see EventarcClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Eventarc\V1\Pipeline $pipeline   Required. The pipeline to create.
     * @param string                             $pipelineId Required. The user-provided ID to be assigned to the Pipeline.
     *
     * @return \Google\Cloud\Eventarc\V1\CreatePipelineRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Eventarc\V1\Pipeline $pipeline, string $pipelineId): self
    {
        return (new self())
            ->setParent($parent)
            ->setPipeline($pipeline)
            ->setPipelineId($pipelineId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent collection in which to add this pipeline.
     *     @type \Google\Cloud\Eventarc\V1\Pipeline $pipeline
     *           Required. The pipeline to create.
     *     @type string $pipeline_id
     *           Required. The user-provided ID to be assigned to the Pipeline.
     *     @type bool $validate_only
     *           Optional. If set, validate the request and preview the review, but do not
     *           post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent collection in which to add this pipeline.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent collection in which to add this pipeline.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The pipeline to create.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Pipeline pipeline = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Eventarc\V1\Pipeline|null
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }

    public function hasPipeline()
    {
        return isset($this->pipeline);
    }

    public function clearPipeline()
    {
        unset($this->pipeline);
    }

    /**
     * Required. The pipeline to create.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Pipeline pipeline = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Eventarc\V1\Pipeline $var
     * @return $this
     */
    public function setPipeline($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Eventarc\V1\Pipeline::class);
        $this->pipeline = $var;

        return $this;
    }

    /**
     * Required. The user-provided ID to be assigned to the Pipeline.
     *
     * Generated from protobuf field <code>string pipeline_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPipelineId()
    {
        return $this->pipeline_id;
    }

    /**
     * Required. The user-provided ID to be assigned to the Pipeline.
     *
     * Generated from protobuf field <code>string pipeline_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineId($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_id = $var;

        return $this;
    }

    /**
     * Optional. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

