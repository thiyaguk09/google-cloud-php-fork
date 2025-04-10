<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\FraudPreventionAssessment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about card testing fraud, where an adversary is testing
 * fraudulently obtained cards or brute forcing their details.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.FraudPreventionAssessment.CardTestingVerdict</code>
 */
class CardTestingVerdict extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Probability of this transaction attempt being part of a card
     * testing attack. Values are from 0.0 (lowest) to 1.0 (highest).
     *
     * Generated from protobuf field <code>float risk = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $risk = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $risk
     *           Output only. Probability of this transaction attempt being part of a card
     *           testing attack. Values are from 0.0 (lowest) to 1.0 (highest).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Probability of this transaction attempt being part of a card
     * testing attack. Values are from 0.0 (lowest) to 1.0 (highest).
     *
     * Generated from protobuf field <code>float risk = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * Output only. Probability of this transaction attempt being part of a card
     * testing attack. Values are from 0.0 (lowest) to 1.0 (highest).
     *
     * Generated from protobuf field <code>float risk = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setRisk($var)
    {
        GPBUtil::checkFloat($var);
        $this->risk = $var;

        return $this;
    }

}


