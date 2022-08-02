<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup_plan.proto

namespace Google\Cloud\GkeBackup\V1\BackupPlan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BackupConfig defines the configuration of Backups created via this
 * BackupPlan.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.BackupPlan.BackupConfig</code>
 */
class BackupConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * This flag specifies whether volume data should be backed up when
     * PVCs are included in the scope of a Backup.
     * Default: False
     *
     * Generated from protobuf field <code>bool include_volume_data = 4;</code>
     */
    private $include_volume_data = false;
    /**
     * This flag specifies whether Kubernetes Secret resources should be
     * included when they fall into the scope of Backups.
     * Default: False
     *
     * Generated from protobuf field <code>bool include_secrets = 5;</code>
     */
    private $include_secrets = false;
    /**
     * This defines a customer managed encryption key that will be used to
     * encrypt the "config" portion (the Kubernetes resources) of Backups
     * created via this plan.
     * Default (empty): Config backup artifacts will not be encrypted.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.EncryptionKey encryption_key = 6;</code>
     */
    private $encryption_key = null;
    protected $backup_scope;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $all_namespaces
     *           If True, include all namespaced resources
     *     @type \Google\Cloud\GkeBackup\V1\Namespaces $selected_namespaces
     *           If set, include just the resources in the listed namespaces.
     *     @type \Google\Cloud\GkeBackup\V1\NamespacedNames $selected_applications
     *           If set, include just the resources referenced by the listed
     *           ProtectedApplications.
     *     @type bool $include_volume_data
     *           This flag specifies whether volume data should be backed up when
     *           PVCs are included in the scope of a Backup.
     *           Default: False
     *     @type bool $include_secrets
     *           This flag specifies whether Kubernetes Secret resources should be
     *           included when they fall into the scope of Backups.
     *           Default: False
     *     @type \Google\Cloud\GkeBackup\V1\EncryptionKey $encryption_key
     *           This defines a customer managed encryption key that will be used to
     *           encrypt the "config" portion (the Kubernetes resources) of Backups
     *           created via this plan.
     *           Default (empty): Config backup artifacts will not be encrypted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\BackupPlan::initOnce();
        parent::__construct($data);
    }

    /**
     * If True, include all namespaced resources
     *
     * Generated from protobuf field <code>bool all_namespaces = 1;</code>
     * @return bool
     */
    public function getAllNamespaces()
    {
        return $this->readOneof(1);
    }

    public function hasAllNamespaces()
    {
        return $this->hasOneof(1);
    }

    /**
     * If True, include all namespaced resources
     *
     * Generated from protobuf field <code>bool all_namespaces = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllNamespaces($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * If set, include just the resources in the listed namespaces.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.Namespaces selected_namespaces = 2;</code>
     * @return \Google\Cloud\GkeBackup\V1\Namespaces|null
     */
    public function getSelectedNamespaces()
    {
        return $this->readOneof(2);
    }

    public function hasSelectedNamespaces()
    {
        return $this->hasOneof(2);
    }

    /**
     * If set, include just the resources in the listed namespaces.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.Namespaces selected_namespaces = 2;</code>
     * @param \Google\Cloud\GkeBackup\V1\Namespaces $var
     * @return $this
     */
    public function setSelectedNamespaces($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\Namespaces::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * If set, include just the resources referenced by the listed
     * ProtectedApplications.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.NamespacedNames selected_applications = 3;</code>
     * @return \Google\Cloud\GkeBackup\V1\NamespacedNames|null
     */
    public function getSelectedApplications()
    {
        return $this->readOneof(3);
    }

    public function hasSelectedApplications()
    {
        return $this->hasOneof(3);
    }

    /**
     * If set, include just the resources referenced by the listed
     * ProtectedApplications.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.NamespacedNames selected_applications = 3;</code>
     * @param \Google\Cloud\GkeBackup\V1\NamespacedNames $var
     * @return $this
     */
    public function setSelectedApplications($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\NamespacedNames::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * This flag specifies whether volume data should be backed up when
     * PVCs are included in the scope of a Backup.
     * Default: False
     *
     * Generated from protobuf field <code>bool include_volume_data = 4;</code>
     * @return bool
     */
    public function getIncludeVolumeData()
    {
        return $this->include_volume_data;
    }

    /**
     * This flag specifies whether volume data should be backed up when
     * PVCs are included in the scope of a Backup.
     * Default: False
     *
     * Generated from protobuf field <code>bool include_volume_data = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeVolumeData($var)
    {
        GPBUtil::checkBool($var);
        $this->include_volume_data = $var;

        return $this;
    }

    /**
     * This flag specifies whether Kubernetes Secret resources should be
     * included when they fall into the scope of Backups.
     * Default: False
     *
     * Generated from protobuf field <code>bool include_secrets = 5;</code>
     * @return bool
     */
    public function getIncludeSecrets()
    {
        return $this->include_secrets;
    }

    /**
     * This flag specifies whether Kubernetes Secret resources should be
     * included when they fall into the scope of Backups.
     * Default: False
     *
     * Generated from protobuf field <code>bool include_secrets = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeSecrets($var)
    {
        GPBUtil::checkBool($var);
        $this->include_secrets = $var;

        return $this;
    }

    /**
     * This defines a customer managed encryption key that will be used to
     * encrypt the "config" portion (the Kubernetes resources) of Backups
     * created via this plan.
     * Default (empty): Config backup artifacts will not be encrypted.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.EncryptionKey encryption_key = 6;</code>
     * @return \Google\Cloud\GkeBackup\V1\EncryptionKey|null
     */
    public function getEncryptionKey()
    {
        return $this->encryption_key;
    }

    public function hasEncryptionKey()
    {
        return isset($this->encryption_key);
    }

    public function clearEncryptionKey()
    {
        unset($this->encryption_key);
    }

    /**
     * This defines a customer managed encryption key that will be used to
     * encrypt the "config" portion (the Kubernetes resources) of Backups
     * created via this plan.
     * Default (empty): Config backup artifacts will not be encrypted.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.EncryptionKey encryption_key = 6;</code>
     * @param \Google\Cloud\GkeBackup\V1\EncryptionKey $var
     * @return $this
     */
    public function setEncryptionKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\EncryptionKey::class);
        $this->encryption_key = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackupScope()
    {
        return $this->whichOneof("backup_scope");
    }

}

