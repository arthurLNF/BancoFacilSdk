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

    function __construct(string $baseUrl, \GuzzleHttp\ClientInterface $client = null) {
        $this->baseUrl = $baseUrl;
        if ($client == null) {
            $config = [
                'timeout' => 120.0,
            ];
            $client = new \GuzzleHttp\Client($config);
        }
        $this->client = $client;
    }

    abstract function send(string $path, string $token, $body = null): \Psr\Http\Message\ResponseInterface;
}
