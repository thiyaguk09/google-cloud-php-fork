<?php
/*
 * Copyright 2022 Google LLC
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

// [START gsuiteaddons_v1_generated_GSuiteAddOns_GetAuthorization_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\GSuiteAddOns\V1\Authorization;
use Google\Cloud\GSuiteAddOns\V1\Client\GSuiteAddOnsClient;
use Google\Cloud\GSuiteAddOns\V1\GetAuthorizationRequest;

/**
 * Gets the authorization information for deployments in a given project.
 *
 * @param string $formattedName Name of the project for which to get the Google Workspace add-ons
 *                              authorization information.
 *
 *                              Example: `projects/my_project/authorization`. Please see
 *                              {@see GSuiteAddOnsClient::authorizationName()} for help formatting this field.
 */
function get_authorization_sample(string $formattedName): void
{
    // Create a client.
    $gSuiteAddOnsClient = new GSuiteAddOnsClient();

    // Prepare the request message.
    $request = (new GetAuthorizationRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var Authorization $response */
        $response = $gSuiteAddOnsClient->getAuthorization($request);
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
    $formattedName = GSuiteAddOnsClient::authorizationName('[PROJECT]');

    get_authorization_sample($formattedName);
}
// [END gsuiteaddons_v1_generated_GSuiteAddOns_GetAuthorization_sync]
