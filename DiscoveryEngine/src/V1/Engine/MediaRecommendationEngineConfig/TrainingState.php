<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/engine.proto

namespace Google\Cloud\DiscoveryEngine\V1\Engine\MediaRecommendationEngineConfig;

use UnexpectedValueException;

/**
 * The training state of the engine.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.Engine.MediaRecommendationEngineConfig.TrainingState</code>
 */
class TrainingState
{
    /**
     * Unspecified training state.
     *
     * Generated from protobuf enum <code>TRAINING_STATE_UNSPECIFIED = 0;</code>
     */
    const TRAINING_STATE_UNSPECIFIED = 0;
    /**
     * The engine training is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 1;</code>
     */
    const PAUSED = 1;
    /**
     * The engine is training.
     *
     * Generated from protobuf enum <code>TRAINING = 2;</code>
     */
    const TRAINING = 2;

    private static $valueToName = [
        self::TRAINING_STATE_UNSPECIFIED => 'TRAINING_STATE_UNSPECIFIED',
        self::PAUSED => 'PAUSED',
        self::TRAINING => 'TRAINING',
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


