<?php
/*
 * Copyright 2025 Google LLC
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

// [START discoveryengine_v1_generated_ConversationalSearchService_StreamAnswerQuery_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\ServerStream;
use Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest;
use Google\Cloud\DiscoveryEngine\V1\AnswerQueryResponse;
use Google\Cloud\DiscoveryEngine\V1\Client\ConversationalSearchServiceClient;
use Google\Cloud\DiscoveryEngine\V1\Query;

/**
 * Answer query method (streaming).
 *
 * It takes one
 * [AnswerQueryRequest][google.cloud.discoveryengine.v1.AnswerQueryRequest]
 * and returns multiple
 * [AnswerQueryResponse][google.cloud.discoveryengine.v1.AnswerQueryResponse]
 * messages in a stream.
 *
 * @param string $formattedServingConfig The resource name of the Search serving config, such as
 *                                       `projects/&#42;/locations/global/collections/default_collection/engines/&#42;/servingConfigs/default_serving_config`,
 *                                       or
 *                                       `projects/&#42;/locations/global/collections/default_collection/dataStores/&#42;/servingConfigs/default_serving_config`.
 *                                       This field is used to identify the serving configuration name, set
 *                                       of models used to make the search. Please see
 *                                       {@see ConversationalSearchServiceClient::servingConfigName()} for help formatting this field.
 */
function stream_answer_query_sample(string $formattedServingConfig): void
{
    // Create a client.
    $conversationalSearchServiceClient = new ConversationalSearchServiceClient();

    // Prepare the request message.
    $query = new Query();
    $request = (new AnswerQueryRequest())
        ->setServingConfig($formattedServingConfig)
        ->setQuery($query);

    // Call the API and handle any network failures.
    try {
        /** @var ServerStream $stream */
        $stream = $conversationalSearchServiceClient->streamAnswerQuery($request);

        /** @var AnswerQueryResponse $element */
        foreach ($stream->readAll() as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $formattedServingConfig = ConversationalSearchServiceClient::servingConfigName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATA_STORE]',
        '[SERVING_CONFIG]'
    );

    stream_answer_query_sample($formattedServingConfig);
}
// [END discoveryengine_v1_generated_ConversationalSearchService_StreamAnswerQuery_sync]
