<?php

/**
 * Description of BfacilPostRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk;

class BfacilPostRequest extends AbstractBfacilRequest {

    function __construct(string $baseUrl, \GuzzleHttp\ClientInterface $client = null) {
        parent::__construct($baseUrl, $client);
    }

    public function send(string $path, string $token, $body = null): \Psr\Http\Message\ResponseInterface {
        $res = $this->client->post($this->baseUrl . $path, [
            'http_errors' => false,
            'headers' => [
                'Authorization' => "Bearer $token",
            ],
            'json' => $body
        ]);

        return $res;
    }

}
