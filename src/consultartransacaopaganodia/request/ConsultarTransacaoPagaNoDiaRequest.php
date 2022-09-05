<?php

/**
 * Description of ConsultarTransacaoPagaNoDiaRequest
 *
 * @author Weider
 */
class ConsultarTransacaoPagaNoDiaRequest implements ConsultarTransacaoPagaNoDiaRequestInterface{
    protected AbstractBfacilRequest $bfacilRequest;
    
    function __construct(AbstractBfacilRequest $bfacilRequest  = null) {
        $this->bfacilRequest = $bfacilRequest  ?? new BfacilGetRequest();
    }

    public function consultar($accountId, $dia): \ConsultarTransacaoPagaNoDiaResponse {
        try{
            $path = '/api/pix/transacao/pagas/'.$accountId.'/'.$dia;
            
            $resp = $this->bfacilRequest->send($path);
            $status = $resp->getStatusCode();
            $body = json_decode($resp->getBody());
            
            if($status == 200){
                return new ConsultarTransacaoPagaNoDiaResponse(true, "", $body->transacao);
            }else{
                return new ConsultarTransacaoPagaNoDiaResponse(false, $body->message, "");
            }
            
        } catch (Exception $ex) {
            return new ConsultarTransacaoPagaNoDiaResponse(false, $ex->getMessage(), "");
        }
    }
}
