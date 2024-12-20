<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterNatRule</code>
 */
class RouterNatRule extends \Google\Protobuf\Internal\Message
{
    /**
     * The action to be enforced for traffic that matches this rule.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterNatRuleAction action = 187661878;</code>
     */
    private $action = null;
    /**
     * An optional description of this rule.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * CEL expression that specifies the match condition that egress traffic from a VM is evaluated against. If it evaluates to true, the corresponding `action` is enforced. The following examples are valid match expressions for public NAT: `inIpRange(destination.ip, '1.1.0.0/16') || inIpRange(destination.ip, '2.2.0.0/16')` `destination.ip == '1.1.0.1' || destination.ip == '8.8.8.8'` The following example is a valid match expression for private NAT: `nexthop.hub == '//networkconnectivity.googleapis.com/projects/my-project/locations/global/hubs/hub-1'`
     *
     * Generated from protobuf field <code>optional string match = 103668165;</code>
     */
    private $match = null;
    /**
     * An integer uniquely identifying a rule in the list. The rule number must be a positive value between 0 and 65000, and must be unique among rules within a NAT.
     *
     * Generated from protobuf field <code>optional uint32 rule_number = 535211500;</code>
     */
    private $rule_number = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\RouterNatRuleAction $action
     *           The action to be enforced for traffic that matches this rule.
     *     @type string $description
     *           An optional description of this rule.
     *     @type string $match
     *           CEL expression that specifies the match condition that egress traffic from a VM is evaluated against. If it evaluates to true, the corresponding `action` is enforced. The following examples are valid match expressions for public NAT: `inIpRange(destination.ip, '1.1.0.0/16') || inIpRange(destination.ip, '2.2.0.0/16')` `destination.ip == '1.1.0.1' || destination.ip == '8.8.8.8'` The following example is a valid match expression for private NAT: `nexthop.hub == '//networkconnectivity.googleapis.com/projects/my-project/locations/global/hubs/hub-1'`
     *     @type int $rule_number
     *           An integer uniquely identifying a rule in the list. The rule number must be a positive value between 0 and 65000, and must be unique among rules within a NAT.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The action to be enforced for traffic that matches this rule.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterNatRuleAction action = 187661878;</code>
     * @return \Google\Cloud\Compute\V1\RouterNatRuleAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    public function hasAction()
    {
        return isset($this->action);
    }

    public function clearAction()
    {
        unset($this->action);
    }

    /**
     * The action to be enforced for traffic that matches this rule.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterNatRuleAction action = 187661878;</code>
     * @param \Google\Cloud\Compute\V1\RouterNatRuleAction $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RouterNatRuleAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * An optional description of this rule.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this rule.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * CEL expression that specifies the match condition that egress traffic from a VM is evaluated against. If it evaluates to true, the corresponding `action` is enforced. The following examples are valid match expressions for public NAT: `inIpRange(destination.ip, '1.1.0.0/16') || inIpRange(destination.ip, '2.2.0.0/16')` `destination.ip == '1.1.0.1' || destination.ip == '8.8.8.8'` The following example is a valid match expression for private NAT: `nexthop.hub == '//networkconnectivity.googleapis.com/projects/my-project/locations/global/hubs/hub-1'`
     *
     * Generated from protobuf field <code>optional string match = 103668165;</code>
     * @return string
     */
    public function getMatch()
    {
        return isset($this->match) ? $this->match : '';
    }

    public function hasMatch()
    {
        return isset($this->match);
    }

    public function clearMatch()
    {
        unset($this->match);
    }

    /**
     * CEL expression that specifies the match condition that egress traffic from a VM is evaluated against. If it evaluates to true, the corresponding `action` is enforced. The following examples are valid match expressions for public NAT: `inIpRange(destination.ip, '1.1.0.0/16') || inIpRange(destination.ip, '2.2.0.0/16')` `destination.ip == '1.1.0.1' || destination.ip == '8.8.8.8'` The following example is a valid match expression for private NAT: `nexthop.hub == '//networkconnectivity.googleapis.com/projects/my-project/locations/global/hubs/hub-1'`
     *
     * Generated from protobuf field <code>optional string match = 103668165;</code>
     * @param string $var
     * @return $this
     */
    public function setMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->match = $var;

        return $this;
    }

    /**
     * An integer uniquely identifying a rule in the list. The rule number must be a positive value between 0 and 65000, and must be unique among rules within a NAT.
     *
     * Generated from protobuf field <code>optional uint32 rule_number = 535211500;</code>
     * @return int
     */
    public function getRuleNumber()
    {
        return isset($this->rule_number) ? $this->rule_number : 0;
    }

    public function hasRuleNumber()
    {
        return isset($this->rule_number);
    }

    public function clearRuleNumber()
    {
        unset($this->rule_number);
    }

    /**
     * An integer uniquely identifying a rule in the list. The rule number must be a positive value between 0 and 65000, and must be unique among rules within a NAT.
     *
     * Generated from protobuf field <code>optional uint32 rule_number = 535211500;</code>
     * @param int $var
     * @return $this
     */
    public function setRuleNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->rule_number = $var;

        return $this;
    }

}

