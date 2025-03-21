<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [TestCases.ImportTestCases][google.cloud.dialogflow.cx.v3.TestCases.ImportTestCases].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ImportTestCasesResponse</code>
 */
class ImportTestCasesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifiers of the new test cases.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>`.
     *
     * Generated from protobuf field <code>repeated string names = 1 [(.google.api.resource_reference) = {</code>
     */
    private $names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $names
     *           The unique identifiers of the new test cases.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifiers of the new test cases.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>`.
     *
     * Generated from protobuf field <code>repeated string names = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * The unique identifiers of the new test cases.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/testCases/<TestCaseID>`.
     *
     * Generated from protobuf field <code>repeated string names = 1 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

}

