<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\KeyEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a default value/currency for a key event.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.KeyEvent.DefaultValue</code>
 */
class DefaultValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. This will be used to populate the "value" parameter for all
     * occurrences of this Key Event (specified by event_name) where that
     * parameter is unset.
     *
     * Generated from protobuf field <code>double numeric_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $numeric_value = 0.0;
    /**
     * Required. When an occurrence of this Key Event (specified by event_name)
     * has no set currency this currency will be applied as the default. Must be
     * in ISO 4217 currency code format.
     * See https://en.wikipedia.org/wiki/ISO_4217 for more information.
     *
     * Generated from protobuf field <code>string currency_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $currency_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $numeric_value
     *           Required. This will be used to populate the "value" parameter for all
     *           occurrences of this Key Event (specified by event_name) where that
     *           parameter is unset.
     *     @type string $currency_code
     *           Required. When an occurrence of this Key Event (specified by event_name)
     *           has no set currency this currency will be applied as the default. Must be
     *           in ISO 4217 currency code format.
     *           See https://en.wikipedia.org/wiki/ISO_4217 for more information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. This will be used to populate the "value" parameter for all
     * occurrences of this Key Event (specified by event_name) where that
     * parameter is unset.
     *
     * Generated from protobuf field <code>double numeric_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getNumericValue()
    {
        return $this->numeric_value;
    }

    /**
     * Required. This will be used to populate the "value" parameter for all
     * occurrences of this Key Event (specified by event_name) where that
     * parameter is unset.
     *
     * Generated from protobuf field <code>double numeric_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setNumericValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->numeric_value = $var;

        return $this;
    }

    /**
     * Required. When an occurrence of this Key Event (specified by event_name)
     * has no set currency this currency will be applied as the default. Must be
     * in ISO 4217 currency code format.
     * See https://en.wikipedia.org/wiki/ISO_4217 for more information.
     *
     * Generated from protobuf field <code>string currency_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Required. When an occurrence of this Key Event (specified by event_name)
     * has no set currency this currency will be applied as the default. Must be
     * in ISO 4217 currency code format.
     * See https://en.wikipedia.org/wiki/ISO_4217 for more information.
     *
     * Generated from protobuf field <code>string currency_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

}


