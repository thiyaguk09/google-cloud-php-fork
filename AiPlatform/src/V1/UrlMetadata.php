<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Context of the a single url retrieval.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UrlMetadata</code>
 */
class UrlMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Retrieved url by the tool.
     *
     * Generated from protobuf field <code>string retrieved_url = 1;</code>
     */
    protected $retrieved_url = '';
    /**
     * Status of the url retrieval.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.UrlMetadata.UrlRetrievalStatus url_retrieval_status = 2;</code>
     */
    protected $url_retrieval_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $retrieved_url
     *           Retrieved url by the tool.
     *     @type int $url_retrieval_status
     *           Status of the url retrieval.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Retrieved url by the tool.
     *
     * Generated from protobuf field <code>string retrieved_url = 1;</code>
     * @return string
     */
    public function getRetrievedUrl()
    {
        return $this->retrieved_url;
    }

    /**
     * Retrieved url by the tool.
     *
     * Generated from protobuf field <code>string retrieved_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRetrievedUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->retrieved_url = $var;

        return $this;
    }

    /**
     * Status of the url retrieval.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.UrlMetadata.UrlRetrievalStatus url_retrieval_status = 2;</code>
     * @return int
     */
    public function getUrlRetrievalStatus()
    {
        return $this->url_retrieval_status;
    }

    /**
     * Status of the url retrieval.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.UrlMetadata.UrlRetrievalStatus url_retrieval_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUrlRetrievalStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\UrlMetadata\UrlRetrievalStatus::class);
        $this->url_retrieval_status = $var;

        return $this;
    }

}

