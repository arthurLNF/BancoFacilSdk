<?php
/**
 * Description of BfacilConsultaPorReferenciaRequest
 *
 * @author Weider
 */
class BfacilConsultaPorReferenciaRequest implements BfacilConsultaPorReferenciaRequestInterface{
    protected AbstractBfacilRequest $bfacilRequest;
    
    function __construct(AbstractBfacilRequest $bfacilRequest  = null) {
        $this->bfacilRequest = $bfacilRequest  ?? new BfacilGetRequest();
    }
    
    public function buscar($accountId, $referencia): \BfacilConsultaPorReferenciaResponse {
        try {
            $path = '/api/pix/transacao/referencia/'.$accountId.'/'.$referencia;
            
            $resp = $this->bfacilRequest->send($path);
            $status = $resp->getStatusCode();
            $body = json_decode($resp->getBody());
            
            if($status == 200){
                return new BfacilConsultaPorReferenciaResponse(true, "", $body->transacao);
            }else{
                return new BfacilConsultaPorReferenciaResponse(false, $body->message, "");
            }
        } catch (Exception $ex) {
            return new BfacilConsultaPorReferenciaResponse(false, $ex->getMessage(), "");
        }
    }
}
