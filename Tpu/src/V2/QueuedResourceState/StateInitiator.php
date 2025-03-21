<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2\QueuedResourceState;

use UnexpectedValueException;

/**
 * The initiator of the QueuedResource's SUSPENDING/SUSPENDED state.
 *
 * Protobuf type <code>google.cloud.tpu.v2.QueuedResourceState.StateInitiator</code>
 */
class StateInitiator
{
    /**
     * The state initiator is unspecified.
     *
     * Generated from protobuf enum <code>STATE_INITIATOR_UNSPECIFIED = 0;</code>
     */
    const STATE_INITIATOR_UNSPECIFIED = 0;
    /**
     * The current QueuedResource state was initiated by the user.
     *
     * Generated from protobuf enum <code>USER = 1;</code>
     */
    const USER = 1;
    /**
     * The current QueuedResource state was initiated by the service.
     *
     * Generated from protobuf enum <code>SERVICE = 2;</code>
     */
    const SERVICE = 2;

    private static $valueToName = [
        self::STATE_INITIATOR_UNSPECIFIED => 'STATE_INITIATOR_UNSPECIFIED',
        self::USER => 'USER',
        self::SERVICE => 'SERVICE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


