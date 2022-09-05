<?php
/**
 * Description of BFacilPixImediatoRequest
 *
 * @author Weider
 */
class BfacilPixImediatoRequest implements BfacilPixImediatoRequestInterface {
    
    private AbstractBfacilRequest $bfacilRequest;
    
    function __construct(AbstractBfacilRequest $bfacilRequest = null){
        $this->bfacilRequest = $bfacilRequest ?? new BfacilPostRequest();
    }
    
    public function gerar(BfacilPixImediatoBody $bfacilPixImediatoBody): \BfacilPixImediatoResponse {
        try{
            $path = '/api/pix/imediato/gerar';
            $response = $this->bfacilRequest->send($path, $bfacilPixImediatoBody);
            $status = $response->getStatusCode();
            $body = json_decode($response->getBody());
            
            if($status == 200){
                return new BfacilPixImediatoResponse(true, $body->message, $body->pix);
            }else{
                return new BfacilPixImediatoResponse(false, $body->message, "");
            }
        } catch (Exception $ex) {
            return new BfacilPixImediatoResponse(true, "error", "Ocorreu um erro ".$ex->getMessage());
        }
    }
}
