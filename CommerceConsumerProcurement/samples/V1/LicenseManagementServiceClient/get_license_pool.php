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

// [START cloudcommerceconsumerprocurement_v1_generated_LicenseManagementService_GetLicensePool_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Commerce\Consumer\Procurement\V1\Client\LicenseManagementServiceClient;
use Google\Cloud\Commerce\Consumer\Procurement\V1\GetLicensePoolRequest;
use Google\Cloud\Commerce\Consumer\Procurement\V1\LicensePool;

/**
 * Gets the license pool.
 *
 * @param string $name The name of the license pool to get.
 *                     Format: `billingAccounts/{billing_account}/orders/{order}/licensePool`
 */
function get_license_pool_sample(string $name): void
{
    // Create a client.
    $licenseManagementServiceClient = new LicenseManagementServiceClient();

    // Prepare the request message.
    $request = (new GetLicensePoolRequest())
        ->setName($name);

    // Call the API and handle any network failures.
    try {
        /** @var LicensePool $response */
        $response = $licenseManagementServiceClient->getLicensePool($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $name = '[NAME]';

    get_license_pool_sample($name);
}
// [END cloudcommerceconsumerprocurement_v1_generated_LicenseManagementService_GetLicensePool_sync]
