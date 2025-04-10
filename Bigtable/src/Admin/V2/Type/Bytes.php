<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/types.proto

namespace Google\Cloud\Bigtable\Admin\V2\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Bytes
 * Values of type `Bytes` are stored in `Value.bytes_value`.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Type.Bytes</code>
 */
class Bytes extends \Google\Protobuf\Internal\Message
{
    /**
     * The encoding to use when converting to or from lower level types.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Bytes.Encoding encoding = 1;</code>
     */
    protected $encoding = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Type\Bytes\Encoding $encoding
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
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Bytes.Encoding encoding = 1;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Type\Bytes\Encoding|null
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
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Type.Bytes.Encoding encoding = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Type\Bytes\Encoding $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Type\Bytes\Encoding::class);
        $this->encoding = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Bytes::class, \Google\Cloud\Bigtable\Admin\V2\Type_Bytes::class);

