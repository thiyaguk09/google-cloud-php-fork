<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Switches to another input stream. Automatic failover is then disabled.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.Event.InputSwitchTask</code>
 */
class InputSwitchTask extends \Google\Protobuf\Internal\Message
{
    /**
     * The
     * [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     * of the input to switch to.
     *
     * Generated from protobuf field <code>string input_key = 1;</code>
     */
    private $input_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input_key
     *           The
     *           [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     *           of the input to switch to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The
     * [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     * of the input to switch to.
     *
     * Generated from protobuf field <code>string input_key = 1;</code>
     * @return string
     */
    public function getInputKey()
    {
        return $this->input_key;
    }

    /**
     * The
     * [InputAttachment.key][google.cloud.video.livestream.v1.InputAttachment.key]
     * of the input to switch to.
     *
     * Generated from protobuf field <code>string input_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInputKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_key = $var;

        return $this;
    }

}

