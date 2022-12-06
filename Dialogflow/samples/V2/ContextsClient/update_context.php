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

// [START dialogflow_v2_generated_Contexts_UpdateContext_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dialogflow\V2\Context;
use Google\Cloud\Dialogflow\V2\ContextsClient;

/**
 * Updates the specified context.
 *
 * @param string $contextName The unique identifier of the context. Format:
 *                            `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context ID>`,
 *                            or `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
 *                            ID>/sessions/<Session ID>/contexts/<Context ID>`.
 *
 *                            The `Context ID` is always converted to lowercase, may only contain
 *                            characters in a-zA-Z0-9_-% and may be at most 250 bytes long.
 *
 *                            If `Environment ID` is not specified, we assume default 'draft'
 *                            environment. If `User ID` is not specified, we assume default '-' user.
 *
 *                            The following context names are reserved for internal use by Dialogflow.
 *                            You should not use these contexts or create contexts with these names:
 *
 *                            * `__system_counters__`
 *                            * `*_id_dialog_context`
 *                            * `*_dialog_params_size`
 */
function update_context_sample(string $contextName): void
{
    // Create a client.
    $contextsClient = new ContextsClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $context = (new Context())
        ->setName($contextName);

    // Call the API and handle any network failures.
    try {
        /** @var Context $response */
        $response = $contextsClient->updateContext($context);
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
    $contextName = '[NAME]';

    update_context_sample($contextName);
}
// [END dialogflow_v2_generated_Contexts_UpdateContext_sync]