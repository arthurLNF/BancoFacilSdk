<?php
/**
 * Description of BfacilAutenticacaoRepository
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\Auth\Repository;

class BfacilAutenticacaoRepository  implements BfacilAutenticacaoRepositoryInterface{
   
    private \BancoFacilPixSdk\Auth\Request\BfacilAutenticacaoRequestInterface $autenticacaoRequest;

    function __construct(string $baseUrl, string $restKey, \BancoFacilPixSdk\Auth\Request\BfacilAutenticacaoRequestInterface $autenticacaoRequest = null) {
        $this->autenticacaoRequest = $autenticacaoRequest ?? new \BancoFacilPixSdk\Auth\Request\BfacilAutenticacaoRequest($baseUrl, $restKey);
    }

    public function autenticar($login, $senha): \BancoFacilPixSdk\Auth\Response\BfacilAutenticacaoResponse {
        return $this->autenticacaoRequest->autenticar($login, $senha);
    }
} 
