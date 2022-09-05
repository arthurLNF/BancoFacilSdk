<?php
/**
 * Description of BfacilAutenticacaoRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\Auth\Request;

class BfacilAutenticacaoRequest implements BfacilAutenticacaoRequestInterface{
   
    protected string $baseUrl;
    protected string $restKey;
    protected \GuzzleHttp\ClientInterface $client;
    
    function __construct(string $baseUrl, string $restKey, \GuzzleHttp\ClientInterface $client = null) {
        $this->baseUrl = $baseUrl;
        $this->restKey = $restKey;
        if ($client == null) {
            $config = [
                'timeout' => 60.0,
            ];
            $client = new \GuzzleHttp\Client($config);
        }
        $this->client = $client;              
    }
    
    
    public function autenticar(string $login, string $senha): \BancoFacilPixSdk\Auth\Response\BfacilAutenticacaoResponse {
        try {
            $path = '/auth/'.$login.'/'.$senha;
            $resp = $this->client->get($this->baseUrl.$path,[
                'headers'   =>[
                    'Authorization' =>['Basic '.$this->restKey]
                ]
            ]);

            $status = $resp->getStatusCode();
            $body = json_decode($resp->getBody());
            
            if($status == 200){
                return new \BancoFacilPixSdk\Auth\Response\BfacilAutenticacaoResponse(true, "", $body->data);
            }else{
                return new \BancoFacilPixSdk\Auth\Response\BfacilAutenticacaoResponse(false, $body->message, "");
            }
        } catch (Exception $ex) {
            return new \BancoFacilPixSdk\Auth\Response\BfacilAutenticacaoResponse(false, "Erro: ".$ex->getMessage(), "");
        }
    }
}
