<?php
/**
 * Description of BfacilPostRequest
 *
 * @author Weider
 */
class BfacilPostRequest  extends AbstractBfacilRequest{
    function __construct(\GuzzleHttp\ClientInterface $client = null, string $baseUrl = null, string $token = null) {
        parent::__construct($client, $baseUrl, $token);
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
