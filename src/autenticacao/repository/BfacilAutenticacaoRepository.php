<?php
/**
 * Description of BfacilAutenticacaoRepository
 *
 * @author Weider
 */
class BfacilAutenticacaoRepository  implements BfacilAutenticacaoRepositoryInterface{
   
    private BfacilAutenticacaoRequestInterface $autenticacaoRequest;

    function __construct(BfacilAutenticacaoRequestInterface $autenticacaoRequest = null) {
        $this->autenticacaoRequest = $autenticacaoRequest ?? new BfacilAutenticacaoRequest;
    }

    public function autenticar($login, $senha): \BfacilAutenticacaoResponse {
        return $this->autenticacaoRequest->autenticar($login, $senha);
    }
} 
