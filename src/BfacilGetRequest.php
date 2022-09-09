<?php

/**
 * Description of BfacilGetRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk;

class BfacilGetRequest extends AbstractBfacilRequest {

    function __construct(string $baseUrl, \GuzzleHttp\ClientInterface $client = null) {
        parent::__construct($baseUrl, $client);
    }

    public function send(string $path, string $token, $body = null): \Psr\Http\Message\ResponseInterface {
        $res = $this->client->get($this->baseUrl . $path, [
            'http_errors' => false,
            'headers' => [
                'Authorization' => "Bearer $token",
            ],
            'json' => $body
        ]);
        return $res;
    }

}
