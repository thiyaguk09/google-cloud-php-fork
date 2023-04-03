<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model creation event.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.ModelCreation</code>
 */
class ModelCreation extends \Google\Protobuf\Internal\Message
{
    /**
     * Model metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Model model = 1;</code>
     */
    protected $model = null;
    /**
     * Describes how the model was created.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelCreation.Reason reason = 3;</code>
     */
    protected $reason = 0;
    /**
     * The URI of the job that created the model.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     */
    protected $job_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\Model $model
     *           Model metadata.
     *     @type int $reason
     *           Describes how the model was created.
     *     @type string $job_name
     *           The URI of the job that created the model.
     *           Format: `projects/<project_id>/jobs/<job_id>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Model metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Model model = 1;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function hasModel()
    {
        return isset($this->model);
    }

    public function clearModel()
    {
        unset($this->model);
    }

    /**
     * Model metadata.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Model model = 1;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\Model::class);
        $this->model = $var;

        return $this;
    }

    /**
     * Describes how the model was created.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelCreation.Reason reason = 3;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Describes how the model was created.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.ModelCreation.Reason reason = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Audit\BigQueryAuditMetadata\ModelCreation\Reason::class);
        $this->reason = $var;

        return $this;
    }

    /**
     * The URI of the job that created the model.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * The URI of the job that created the model.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

}

