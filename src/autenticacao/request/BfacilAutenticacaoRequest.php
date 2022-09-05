<?php
/**
 * Description of BfacilAutenticacaoRequest
 *
 * @author Weider
 */
class BfacilAutenticacaoRequest implements BfacilAutenticacaoRequestInterface{
   
    protected string $baseUrl;
    protected string $restKey;
    protected GuzzleHttp\ClientInterface $client;
    
    function __construct(string $baseUrl = null, GuzzleHttp\ClientInterface $client = null, string $restKey = null) {
        if ($baseUrl == null) {
            $ini = \Adianti\Core\AdiantiApplicationConfig::get();
            $baseUrl = $ini['bfacil']['url'];
        }

        $this->baseUrl = $baseUrl;
        if ($client == null) {
            $config = [
                'timeout' => 60.0,
            ];
            $client = new GuzzleHttp\Client($config);
        }
        $this->client = $client;
        
        if ($restKey == null) {
            $ini = Adianti\Core\AdiantiApplicationConfig::get();
            $restKey = $ini['bfacil']['rest_key'];
        }
        $this->restKey = $restKey;
    }
    
    
    public function autenticar(string $login, string $senha): \BfacilAutenticacaoResponse {
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
                return new BfacilAutenticacaoResponse(true, "", $body->data);
            }else{
                return new BfacilAutenticacaoResponse(false, $body->message, "");
            }
        } catch (Exception $ex) {
            return new BfacilAutenticacaoResponse(false, "Erro: ".$ex->getMessage(), "");
        }
    }
}
