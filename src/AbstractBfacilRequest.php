<?php

/**
 * Description of AbstraticBfacilRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk;

use \GuzzleHttp;

abstract class AbstractBfacilRequest {

    protected string $baseUrl;
    protected \GuzzleHttp\ClientInterface $client;
    protected string $token;

    function __construct(string $baseUrl, string $token, \GuzzleHttp\ClientInterface $client = null) {
        $this->baseUrl = $baseUrl;
        $this->token = $token;
        if ($client == null) {
            $config = [
                'timeout' => 120.0,
            ];
            $client = new \GuzzleHttp\Client($config);
        }
        $this->client = $client;
    }

    abstract function send(string $path, $body = null): \Psr\Http\Message\ResponseInterface;
}
