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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/tests/Unit/ProtoTests/CustomLro/custom_lro.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Testing\CustomLro\Gapic;

use Google\ApiCore\ApiException;

use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Protobuf\GPBEmpty;
use Testing\CustomLro\CancelOperationRequest;
use Testing\CustomLro\CustomOperationResponse;
use Testing\CustomLro\DeleteOperationRequest;
use Testing\CustomLro\GetOperationRequest;

/**
 * Service Description:
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $customLroOperationsClient = new CustomLroOperationsClient();
 * try {
 *     $operation = 'operation';
 *     $customLroOperationsClient->cancel($operation);
 * } finally {
 *     $customLroOperationsClient->close();
 * }
 * ```
 */
class CustomLroOperationsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'testing.customlro.CustomLroOperations';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'customlro.example.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'scope1',
        'scope2',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/custom_lro_operations_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/custom_lro_operations_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/custom_lro_operations_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Implements GapicClientTrait::defaultTransport.
     */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /**
     * Implements GapicClientTrait::getSupportedTransports.
     */
    private static function getSupportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'customlro.example.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     *
     * Sample code:
     * ```
     * $customLroOperationsClient = new CustomLroOperationsClient();
     * try {
     *     $operation = 'operation';
     *     $customLroOperationsClient->cancel($operation);
     * } finally {
     *     $customLroOperationsClient->close();
     * }
     * ```
     *
     * @param string $operation    Name of th Operations resource to cancel.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function cancel($operation, array $optionalArgs = [])
    {
        $request = new CancelOperationRequest();
        $request->setOperation($operation);
        return $this->startCall('Cancel', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     *
     * Sample code:
     * ```
     * $customLroOperationsClient = new CustomLroOperationsClient();
     * try {
     *     $operation = 'operation';
     *     $customLroOperationsClient->delete($operation);
     * } finally {
     *     $customLroOperationsClient->close();
     * }
     * ```
     *
     * @param string $operation    Name of th Operations resource to delete.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function delete($operation, array $optionalArgs = [])
    {
        $request = new DeleteOperationRequest();
        $request->setOperation($operation);
        return $this->startCall('Delete', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     *
     * Sample code:
     * ```
     * $customLroOperationsClient = new CustomLroOperationsClient();
     * try {
     *     $operation = 'operation';
     *     $project = 'project';
     *     $region = 'region';
     *     $response = $customLroOperationsClient->get($operation, $project, $region);
     * } finally {
     *     $customLroOperationsClient->close();
     * }
     * ```
     *
     * @param string $operation    Name of the Operations resource to return.
     * @param string $project      Project ID for this request.
     * @param string $region       Name of the region for this request.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $foo
     *           The foo from the initial request.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Testing\CustomLro\CustomOperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function get($operation, $project, $region, array $optionalArgs = [])
    {
        $request = new GetOperationRequest();
        $request->setOperation($operation);
        $request->setProject($project);
        $request->setRegion($region);
        if (isset($optionalArgs['foo'])) {
            $request->setFoo($optionalArgs['foo']);
        }

        return $this->startCall('Get', CustomOperationResponse::class, $optionalArgs, $request)->wait();
    }
}
