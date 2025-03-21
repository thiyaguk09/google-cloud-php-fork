<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This field specifies all related information for tile navigation that will
 * be used in client side.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SearchResponse.TileNavigationResult</code>
 */
class TileNavigationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The current tiles that are used for tile navigation, sorted by
     * engagement.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Tile tiles = 1;</code>
     */
    private $tiles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Retail\V2\Tile>|\Google\Protobuf\Internal\RepeatedField $tiles
     *           The current tiles that are used for tile navigation, sorted by
     *           engagement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The current tiles that are used for tile navigation, sorted by
     * engagement.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Tile tiles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTiles()
    {
        return $this->tiles;
    }

    /**
     * The current tiles that are used for tile navigation, sorted by
     * engagement.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Tile tiles = 1;</code>
     * @param array<\Google\Cloud\Retail\V2\Tile>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\Tile::class);
        $this->tiles = $arr;

        return $this;
    }

}


