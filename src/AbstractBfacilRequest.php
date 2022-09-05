<?php

/**
 * Description of AbstraticBfacilRequest
 *
 * @author Weider
 */
abstract class AbstractBfacilRequest {
    protected string $baseUrl;
    protected GuzzleHttp\ClientInterface $client;
    protected string $token;
    
    function __construct(GuzzleHttp\ClientInterface $client = null, string $baseUrl = null, string $token = null) {
        if ($baseUrl == null) {
            $ini = Adianti\Core\AdiantiApplicationConfig::get();
            $baseUrl = $ini['bfacil']['url'];
        }
        $this->baseUrl = $baseUrl;
        if ($client == null) {
            $config = [
                'timeout' => 120.0,
            ];
            $client = new GuzzleHttp\Client($config);
        }
        $this->client = $client;
        
        if ($token == null) {
            $ini = Adianti\Core\AdiantiApplicationConfig::get();
            $getToken = new BfacilAutenticacaoRepository();
            $token = $getToken->autenticar($ini['bfacil']['login'], $ini['bfacil']['senha']);
        }
        $this->token = $token->data;
    }
    abstract function send(string $path, $body = null): \Psr\Http\Message\ResponseInterface;  
}
