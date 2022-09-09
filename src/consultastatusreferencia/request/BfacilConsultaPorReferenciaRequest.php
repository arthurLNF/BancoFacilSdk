<?php
/**
 * Description of BfacilConsultaPorReferenciaRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\ConsultaStatusReferencia\Request;

class BfacilConsultaPorReferenciaRequest implements BfacilConsultaPorReferenciaRequestInterface{
    protected \BancoFacilPixSdk\AbstractBfacilRequest $bfacilRequest;
    
    function __construct(string $baseUrl, \BancoFacilPixSdk\AbstractBfacilRequest $bfacilRequest  = null) {
        $this->bfacilRequest = $bfacilRequest  ?? new \BancoFacilPixSdk\BfacilGetRequest($baseUrl);
    }
    
    public function buscar(string $token, string $accountId, string $referencia): \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse {
        try {
            $path = '/api/pix/transacao/referencia/'.$accountId.'/'.$referencia;
            
            $resp = $this->bfacilRequest->send($path, $token);
            $status = $resp->getStatusCode();
            $body = json_decode($resp->getBody());
            
            if($status == 200){
                return new \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse(true, "", $body->transacao);
            }else{
                return new \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse(false, $body->message, "");
            }
        } catch (Exception $ex) {
            return new \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse(false, $ex->getMessage(), "");
        }
    }
}
