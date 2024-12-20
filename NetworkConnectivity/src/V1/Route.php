<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A route defines a path from VM instances within a spoke to a specific
 * destination resource. Only VPC spokes have routes.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.Route</code>
 */
class Route extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The name of the route. Route names must be unique. Route names
     * use the following form:
     *      `projects/{project_number}/locations/global/hubs/{hub}/routeTables/{route_table_id}/routes/{route_id}`
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Output only. The time the route was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time the route was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * The destination IP address range.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 1;</code>
     */
    protected $ip_cidr_range = '';
    /**
     * Output only. The route's type. Its type is determined by the properties of
     * its IP address range.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.RouteType type = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Immutable. The destination VPC network for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopVpcNetwork next_hop_vpc_network = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $next_hop_vpc_network = null;
    /**
     * Optional labels in key-value pair format. For more information about
     * labels, see [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     */
    private $labels;
    /**
     * An optional description of the route.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     */
    protected $description = '';
    /**
     * Output only. The Google-generated UUID for the route. This value is unique
     * across all Network Connectivity Center route resources. If a
     * route is deleted and another with the same name is created,
     * the new route is assigned a different `uid`.
     *
     * Generated from protobuf field <code>string uid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. The current lifecycle state of the route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Immutable. The spoke that this route leads to.
     * Example: projects/12345/locations/global/spokes/SPOKE
     *
     * Generated from protobuf field <code>string spoke = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $spoke = '';
    /**
     * Output only. The origin location of the route.
     * Uses the following form: "projects/{project}/locations/{location}"
     * Example: projects/1234/locations/us-central1
     *
     * Generated from protobuf field <code>string location = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $location = '';
    /**
     * Output only. The priority of this route. Priority is used to break ties in
     * cases where a destination matches more than one route. In these cases the
     * route with the lowest-numbered priority value wins.
     *
     * Generated from protobuf field <code>int64 priority = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $priority = 0;
    /**
     * Immutable. The next-hop VPN tunnel for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopVPNTunnel next_hop_vpn_tunnel = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $next_hop_vpn_tunnel = null;
    /**
     * Immutable. The next-hop Router appliance instance for packets on this
     * route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopRouterApplianceInstance next_hop_router_appliance_instance = 15 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $next_hop_router_appliance_instance = null;
    /**
     * Immutable. The next-hop VLAN attachment for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopInterconnectAttachment next_hop_interconnect_attachment = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $next_hop_interconnect_attachment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The name of the route. Route names must be unique. Route names
     *           use the following form:
     *                `projects/{project_number}/locations/global/hubs/{hub}/routeTables/{route_table_id}/routes/{route_id}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the route was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the route was last updated.
     *     @type string $ip_cidr_range
     *           The destination IP address range.
     *     @type int $type
     *           Output only. The route's type. Its type is determined by the properties of
     *           its IP address range.
     *     @type \Google\Cloud\NetworkConnectivity\V1\NextHopVpcNetwork $next_hop_vpc_network
     *           Immutable. The destination VPC network for packets on this route.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional labels in key-value pair format. For more information about
     *           labels, see [Requirements for
     *           labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *     @type string $description
     *           An optional description of the route.
     *     @type string $uid
     *           Output only. The Google-generated UUID for the route. This value is unique
     *           across all Network Connectivity Center route resources. If a
     *           route is deleted and another with the same name is created,
     *           the new route is assigned a different `uid`.
     *     @type int $state
     *           Output only. The current lifecycle state of the route.
     *     @type string $spoke
     *           Immutable. The spoke that this route leads to.
     *           Example: projects/12345/locations/global/spokes/SPOKE
     *     @type string $location
     *           Output only. The origin location of the route.
     *           Uses the following form: "projects/{project}/locations/{location}"
     *           Example: projects/1234/locations/us-central1
     *     @type int|string $priority
     *           Output only. The priority of this route. Priority is used to break ties in
     *           cases where a destination matches more than one route. In these cases the
     *           route with the lowest-numbered priority value wins.
     *     @type \Google\Cloud\NetworkConnectivity\V1\NextHopVPNTunnel $next_hop_vpn_tunnel
     *           Immutable. The next-hop VPN tunnel for packets on this route.
     *     @type \Google\Cloud\NetworkConnectivity\V1\NextHopRouterApplianceInstance $next_hop_router_appliance_instance
     *           Immutable. The next-hop Router appliance instance for packets on this
     *           route.
     *     @type \Google\Cloud\NetworkConnectivity\V1\NextHopInterconnectAttachment $next_hop_interconnect_attachment
     *           Immutable. The next-hop VLAN attachment for packets on this route.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The name of the route. Route names must be unique. Route names
     * use the following form:
     *      `projects/{project_number}/locations/global/hubs/{hub}/routeTables/{route_table_id}/routes/{route_id}`
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The name of the route. Route names must be unique. Route names
     * use the following form:
     *      `projects/{project_number}/locations/global/hubs/{hub}/routeTables/{route_table_id}/routes/{route_id}`
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time the route was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the route was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time the route was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time the route was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The destination IP address range.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 1;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return $this->ip_cidr_range;
    }

    /**
     * The destination IP address range.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * Output only. The route's type. Its type is determined by the properties of
     * its IP address range.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.RouteType type = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The route's type. Its type is determined by the properties of
     * its IP address range.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.RouteType type = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkConnectivity\V1\RouteType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Immutable. The destination VPC network for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopVpcNetwork next_hop_vpc_network = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\NextHopVpcNetwork|null
     */
    public function getNextHopVpcNetwork()
    {
        return $this->next_hop_vpc_network;
    }

    public function hasNextHopVpcNetwork()
    {
        return isset($this->next_hop_vpc_network);
    }

    public function clearNextHopVpcNetwork()
    {
        unset($this->next_hop_vpc_network);
    }

    /**
     * Immutable. The destination VPC network for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopVpcNetwork next_hop_vpc_network = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\NextHopVpcNetwork $var
     * @return $this
     */
    public function setNextHopVpcNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\NextHopVpcNetwork::class);
        $this->next_hop_vpc_network = $var;

        return $this;
    }

    /**
     * Optional labels in key-value pair format. For more information about
     * labels, see [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional labels in key-value pair format. For more information about
     * labels, see [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * An optional description of the route.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional description of the route.
     *
     * Generated from protobuf field <code>string description = 7;</code>
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
     * Output only. The Google-generated UUID for the route. This value is unique
     * across all Network Connectivity Center route resources. If a
     * route is deleted and another with the same name is created,
     * the new route is assigned a different `uid`.
     *
     * Generated from protobuf field <code>string uid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. The Google-generated UUID for the route. This value is unique
     * across all Network Connectivity Center route resources. If a
     * route is deleted and another with the same name is created,
     * the new route is assigned a different `uid`.
     *
     * Generated from protobuf field <code>string uid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The current lifecycle state of the route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current lifecycle state of the route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkConnectivity\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Immutable. The spoke that this route leads to.
     * Example: projects/12345/locations/global/spokes/SPOKE
     *
     * Generated from protobuf field <code>string spoke = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSpoke()
    {
        return $this->spoke;
    }

    /**
     * Immutable. The spoke that this route leads to.
     * Example: projects/12345/locations/global/spokes/SPOKE
     *
     * Generated from protobuf field <code>string spoke = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSpoke($var)
    {
        GPBUtil::checkString($var, True);
        $this->spoke = $var;

        return $this;
    }

    /**
     * Output only. The origin location of the route.
     * Uses the following form: "projects/{project}/locations/{location}"
     * Example: projects/1234/locations/us-central1
     *
     * Generated from protobuf field <code>string location = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Output only. The origin location of the route.
     * Uses the following form: "projects/{project}/locations/{location}"
     * Example: projects/1234/locations/us-central1
     *
     * Generated from protobuf field <code>string location = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Output only. The priority of this route. Priority is used to break ties in
     * cases where a destination matches more than one route. In these cases the
     * route with the lowest-numbered priority value wins.
     *
     * Generated from protobuf field <code>int64 priority = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Output only. The priority of this route. Priority is used to break ties in
     * cases where a destination matches more than one route. In these cases the
     * route with the lowest-numbered priority value wins.
     *
     * Generated from protobuf field <code>int64 priority = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt64($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Immutable. The next-hop VPN tunnel for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopVPNTunnel next_hop_vpn_tunnel = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\NextHopVPNTunnel|null
     */
    public function getNextHopVpnTunnel()
    {
        return $this->next_hop_vpn_tunnel;
    }

    public function hasNextHopVpnTunnel()
    {
        return isset($this->next_hop_vpn_tunnel);
    }

    public function clearNextHopVpnTunnel()
    {
        unset($this->next_hop_vpn_tunnel);
    }

    /**
     * Immutable. The next-hop VPN tunnel for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopVPNTunnel next_hop_vpn_tunnel = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\NextHopVPNTunnel $var
     * @return $this
     */
    public function setNextHopVpnTunnel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\NextHopVPNTunnel::class);
        $this->next_hop_vpn_tunnel = $var;

        return $this;
    }

    /**
     * Immutable. The next-hop Router appliance instance for packets on this
     * route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopRouterApplianceInstance next_hop_router_appliance_instance = 15 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\NextHopRouterApplianceInstance|null
     */
    public function getNextHopRouterApplianceInstance()
    {
        return $this->next_hop_router_appliance_instance;
    }

    public function hasNextHopRouterApplianceInstance()
    {
        return isset($this->next_hop_router_appliance_instance);
    }

    public function clearNextHopRouterApplianceInstance()
    {
        unset($this->next_hop_router_appliance_instance);
    }

    /**
     * Immutable. The next-hop Router appliance instance for packets on this
     * route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopRouterApplianceInstance next_hop_router_appliance_instance = 15 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\NextHopRouterApplianceInstance $var
     * @return $this
     */
    public function setNextHopRouterApplianceInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\NextHopRouterApplianceInstance::class);
        $this->next_hop_router_appliance_instance = $var;

        return $this;
    }

    /**
     * Immutable. The next-hop VLAN attachment for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopInterconnectAttachment next_hop_interconnect_attachment = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\NextHopInterconnectAttachment|null
     */
    public function getNextHopInterconnectAttachment()
    {
        return $this->next_hop_interconnect_attachment;
    }

    public function hasNextHopInterconnectAttachment()
    {
        return isset($this->next_hop_interconnect_attachment);
    }

    public function clearNextHopInterconnectAttachment()
    {
        unset($this->next_hop_interconnect_attachment);
    }

    /**
     * Immutable. The next-hop VLAN attachment for packets on this route.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.NextHopInterconnectAttachment next_hop_interconnect_attachment = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\NextHopInterconnectAttachment $var
     * @return $this
     */
    public function setNextHopInterconnectAttachment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\NextHopInterconnectAttachment::class);
        $this->next_hop_interconnect_attachment = $var;

        return $this;
    }

}

