<?php

/**
 * Description of BfacilPostRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk;

class BfacilPostRequest extends AbstractBfacilRequest {

    function __construct(string $baseUrl, string $token, \GuzzleHttp\ClientInterface $client = null) {
        parent::__construct($baseUrl, $token, $client);
        var_dump($this->token);
    }

    public function send(string $path, $body = null): \Psr\Http\Message\ResponseInterface {
        $res = $this->client->post($this->baseUrl . $path, [
            'http_errors' => false,
            'headers' => [
                'Authorization' => "Bearer $this->token",
            ],
            'json' => $body
        ]);

        return $res;
    }

}
