<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START backupdr_v1_generated_BackupDR_CreateBackupVault_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\BackupDR\V1\BackupVault;
use Google\Cloud\BackupDR\V1\Client\BackupDRClient;
use Google\Cloud\BackupDR\V1\CreateBackupVaultRequest;
use Google\Protobuf\Duration;
use Google\Rpc\Status;

/**
 * Creates a new BackupVault in a given project and location.
 *
 * @param string $formattedParent Value for parent. Please see
 *                                {@see BackupDRClient::locationName()} for help formatting this field.
 * @param string $backupVaultId   ID of the requesting object
 *                                If auto-generating ID server-side, remove this field and
 *                                backup_vault_id from the method_signature of Create RPC
 */
function create_backup_vault_sample(string $formattedParent, string $backupVaultId): void
{
    // Create a client.
    $backupDRClient = new BackupDRClient();

    // Prepare the request message.
    $backupVaultBackupMinimumEnforcedRetentionDuration = new Duration();
    $backupVault = (new BackupVault())
        ->setBackupMinimumEnforcedRetentionDuration($backupVaultBackupMinimumEnforcedRetentionDuration);
    $request = (new CreateBackupVaultRequest())
        ->setParent($formattedParent)
        ->setBackupVaultId($backupVaultId)
        ->setBackupVault($backupVault);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $backupDRClient->createBackupVault($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var BackupVault $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = BackupDRClient::locationName('[PROJECT]', '[LOCATION]');
    $backupVaultId = '[BACKUP_VAULT_ID]';

    create_backup_vault_sample($formattedParent, $backupVaultId);
}
// [END backupdr_v1_generated_BackupDR_CreateBackupVault_sync]
