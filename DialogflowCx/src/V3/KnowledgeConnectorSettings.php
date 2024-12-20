<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/page.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Knowledge Connector settings for this page or flow.
 * This includes information such as the attached Knowledge Bases, and the way
 * to execute fulfillment.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.KnowledgeConnectorSettings</code>
 */
class KnowledgeConnectorSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether Knowledge Connector is enabled or not.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;
    /**
     * The fulfillment to be triggered.
     * When the answers from the Knowledge Connector are selected by Dialogflow,
     * you can utitlize the request scoped parameter `$request.knowledge.answers`
     * (contains up to the 5 highest confidence answers) and
     * `$request.knowledge.questions` (contains the corresponding questions) to
     * construct the fulfillment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Fulfillment trigger_fulfillment = 3;</code>
     */
    protected $trigger_fulfillment = null;
    /**
     * Optional. List of related data store connections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.DataStoreConnection data_store_connections = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $data_store_connections;
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether Knowledge Connector is enabled or not.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Fulfillment $trigger_fulfillment
     *           The fulfillment to be triggered.
     *           When the answers from the Knowledge Connector are selected by Dialogflow,
     *           you can utitlize the request scoped parameter `$request.knowledge.answers`
     *           (contains up to the 5 highest confidence answers) and
     *           `$request.knowledge.questions` (contains the corresponding questions) to
     *           construct the fulfillment.
     *     @type string $target_page
     *           The target page to transition to.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *     @type string $target_flow
     *           The target flow to transition to.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\DataStoreConnection>|\Google\Protobuf\Internal\RepeatedField $data_store_connections
     *           Optional. List of related data store connections.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Page::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether Knowledge Connector is enabled or not.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether Knowledge Connector is enabled or not.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * The fulfillment to be triggered.
     * When the answers from the Knowledge Connector are selected by Dialogflow,
     * you can utitlize the request scoped parameter `$request.knowledge.answers`
     * (contains up to the 5 highest confidence answers) and
     * `$request.knowledge.questions` (contains the corresponding questions) to
     * construct the fulfillment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Fulfillment trigger_fulfillment = 3;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Fulfillment|null
     */
    public function getTriggerFulfillment()
    {
        return $this->trigger_fulfillment;
    }

    public function hasTriggerFulfillment()
    {
        return isset($this->trigger_fulfillment);
    }

    public function clearTriggerFulfillment()
    {
        unset($this->trigger_fulfillment);
    }

    /**
     * The fulfillment to be triggered.
     * When the answers from the Knowledge Connector are selected by Dialogflow,
     * you can utitlize the request scoped parameter `$request.knowledge.answers`
     * (contains up to the 5 highest confidence answers) and
     * `$request.knowledge.questions` (contains the corresponding questions) to
     * construct the fulfillment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Fulfillment trigger_fulfillment = 3;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Fulfillment $var
     * @return $this
     */
    public function setTriggerFulfillment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Fulfillment::class);
        $this->trigger_fulfillment = $var;

        return $this;
    }

    /**
     * The target page to transition to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *
     * Generated from protobuf field <code>string target_page = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetPage()
    {
        return $this->readOneof(4);
    }

    public function hasTargetPage()
    {
        return $this->hasOneof(4);
    }

    /**
     * The target page to transition to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *
     * Generated from protobuf field <code>string target_page = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The target flow to transition to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string target_flow = 5 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetFlow()
    {
        return $this->readOneof(5);
    }

    public function hasTargetFlow()
    {
        return $this->hasOneof(5);
    }

    /**
     * The target flow to transition to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string target_flow = 5 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetFlow($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. List of related data store connections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.DataStoreConnection data_store_connections = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataStoreConnections()
    {
        return $this->data_store_connections;
    }

    /**
     * Optional. List of related data store connections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.DataStoreConnection data_store_connections = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\DataStoreConnection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataStoreConnections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\DataStoreConnection::class);
        $this->data_store_connections = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

