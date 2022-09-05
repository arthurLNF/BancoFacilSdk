<?php

/**
 * Description of BfacilGetRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk;

class BfacilGetRequest extends AbstractBfacilRequest {

    function __construct(string $baseUrl, string $token, \GuzzleHttp\ClientInterface $client = null) {
        parent::__construct($baseUrl, $token, $client);
    }

    public function send(string $path, $body = null): \Psr\Http\Message\ResponseInterface {
        $res = $this->client->get($this->baseUrl . $path, [
            'http_errors' => false,
            'headers' => [
                'Authorization' => "Bearer $this->token",
            ],
            'json' => $body
        ]);
        return $res;
    }

}
