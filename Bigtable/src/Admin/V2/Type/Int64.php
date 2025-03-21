<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/types.proto

namespace Google\Cloud\Bigtable\Admin\V2\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Int64
 * Values of type `Int64` are stored in `Value.int_value`.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Type.Int64</code>
 */
class Int64 extends \Google\Protobuf\Internal\Message
{
    /**
     * The encoding to use when converting to or from lower level types.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Int64.Encoding encoding = 1;</code>
     */
    protected $encoding = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Type\Int64\Encoding $encoding
     *           The encoding to use when converting to or from lower level types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * The encoding to use when converting to or from lower level types.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Int64.Encoding encoding = 1;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Type\Int64\Encoding|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    public function hasEncoding()
    {
        return isset($this->encoding);
    }

    public function clearEncoding()
    {
        unset($this->encoding);
    }

    /**
     * The encoding to use when converting to or from lower level types.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Int64.Encoding encoding = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Type\Int64\Encoding $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Type\Int64\Encoding::class);
        $this->encoding = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Int64::class, \Google\Cloud\Bigtable\Admin\V2\Type_Int64::class);

