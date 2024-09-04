<?php
/**
 * FollowerApi
 * PHP version 5
 *
 * @category Class
 * @package  Yousign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public Api v3
 *
 * Build the best experience of digital signature through your own platform. Increase your conversion rates, leverage your data and reduce your costs with Yousign API.
 *
 * OpenAPI spec version: 3.0
 * Contact: contact@yousign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yousign\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Yousign\Client\ApiException;
use Yousign\Client\Configuration;
use Yousign\Client\HeaderSelector;
use Yousign\Client\ObjectSerializer;

/**
 * FollowerApi Class Doc Comment
 *
 * @category Class
 * @package  Yousign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FollowerApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSignatureRequestsSignatureRequestIdFollowers
     *
     * List the Signature Request's Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     *
     * @throws \Yousign\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdFollowers200Response
     */
    public function getSignatureRequestsSignatureRequestIdFollowers($signature_request_id)
    {
        list($response) = $this->getSignatureRequestsSignatureRequestIdFollowersWithHttpInfo($signature_request_id);
        return $response;
    }

    /**
     * Operation getSignatureRequestsSignatureRequestIdFollowersWithHttpInfo
     *
     * List the Signature Request's Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     *
     * @throws \Yousign\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdFollowers200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSignatureRequestsSignatureRequestIdFollowersWithHttpInfo($signature_request_id)
    {
        $returnType = '\Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdFollowers200Response';
        $request = $this->getSignatureRequestsSignatureRequestIdFollowersRequest($signature_request_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdFollowers200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Yousign\Client\Model\PostArchives401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSignatureRequestsSignatureRequestIdFollowersAsync
     *
     * List the Signature Request's Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSignatureRequestsSignatureRequestIdFollowersAsync($signature_request_id)
    {
        return $this->getSignatureRequestsSignatureRequestIdFollowersAsyncWithHttpInfo($signature_request_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSignatureRequestsSignatureRequestIdFollowersAsyncWithHttpInfo
     *
     * List the Signature Request's Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSignatureRequestsSignatureRequestIdFollowersAsyncWithHttpInfo($signature_request_id)
    {
        $returnType = '\Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdFollowers200Response';
        $request = $this->getSignatureRequestsSignatureRequestIdFollowersRequest($signature_request_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSignatureRequestsSignatureRequestIdFollowers'
     *
     * @param  string $signature_request_id Signature Request Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSignatureRequestsSignatureRequestIdFollowersRequest($signature_request_id)
    {
        // verify the required parameter 'signature_request_id' is set
        if ($signature_request_id === null || (is_array($signature_request_id) && count($signature_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signature_request_id when calling getSignatureRequestsSignatureRequestIdFollowers'
            );
        }

        $resourcePath = '/signature_requests/{signatureRequestId}/followers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($signature_request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'signatureRequestId' . '}',
                ObjectSerializer::toPathValue($signature_request_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postSignatureRequestsSignatureRequestIdFollowers
     *
     * Create new Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     * @param  \Yousign\Client\Model\CreateFollowersInner[] $body body (optional)
     *
     * @throws \Yousign\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yousign\Client\Model\Follower[]
     */
    public function postSignatureRequestsSignatureRequestIdFollowers($signature_request_id, $body = null)
    {
        list($response) = $this->postSignatureRequestsSignatureRequestIdFollowersWithHttpInfo($signature_request_id, $body);
        return $response;
    }

    /**
     * Operation postSignatureRequestsSignatureRequestIdFollowersWithHttpInfo
     *
     * Create new Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     * @param  \Yousign\Client\Model\CreateFollowersInner[] $body (optional)
     *
     * @throws \Yousign\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yousign\Client\Model\Follower[], HTTP status code, HTTP response headers (array of strings)
     */
    public function postSignatureRequestsSignatureRequestIdFollowersWithHttpInfo($signature_request_id, $body = null)
    {
        $returnType = '\Yousign\Client\Model\Follower[]';
        $request = $this->postSignatureRequestsSignatureRequestIdFollowersRequest($signature_request_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Yousign\Client\Model\Follower[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Yousign\Client\Model\ViolationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Yousign\Client\Model\PostArchives401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Yousign\Client\Model\ViolationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postSignatureRequestsSignatureRequestIdFollowersAsync
     *
     * Create new Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     * @param  \Yousign\Client\Model\CreateFollowersInner[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSignatureRequestsSignatureRequestIdFollowersAsync($signature_request_id, $body = null)
    {
        return $this->postSignatureRequestsSignatureRequestIdFollowersAsyncWithHttpInfo($signature_request_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postSignatureRequestsSignatureRequestIdFollowersAsyncWithHttpInfo
     *
     * Create new Followers
     *
     * @param  string $signature_request_id Signature Request Id (required)
     * @param  \Yousign\Client\Model\CreateFollowersInner[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSignatureRequestsSignatureRequestIdFollowersAsyncWithHttpInfo($signature_request_id, $body = null)
    {
        $returnType = '\Yousign\Client\Model\Follower[]';
        $request = $this->postSignatureRequestsSignatureRequestIdFollowersRequest($signature_request_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postSignatureRequestsSignatureRequestIdFollowers'
     *
     * @param  string $signature_request_id Signature Request Id (required)
     * @param  \Yousign\Client\Model\CreateFollowersInner[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSignatureRequestsSignatureRequestIdFollowersRequest($signature_request_id, $body = null)
    {
        // verify the required parameter 'signature_request_id' is set
        if ($signature_request_id === null || (is_array($signature_request_id) && count($signature_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signature_request_id when calling postSignatureRequestsSignatureRequestIdFollowers'
            );
        }

        $resourcePath = '/signature_requests/{signatureRequestId}/followers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($signature_request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'signatureRequestId' . '}',
                ObjectSerializer::toPathValue($signature_request_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
