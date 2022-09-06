<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BfacilConsultaPorReferenciaRepository
 *
 * @author Arthur
 */

namespace BancoFacilPixSdk\ConsultaStatusReferencia\Repository;

class BfacilConsultaPorReferenciaRepository implements BfacilConsultaPorReferenciaRepositoryInterface {

    private \BancoFacilPixSdk\ConsultaStatusReferencia\Request\BfacilConsultaPorReferenciaRequestInterface $bfacilConsultaPorReferenciaRequest;

    function __construct(string $baseUrl, string $token, \BancoFacilPixSdk\ConsultaStatusReferencia\Request\BfacilConsultaPorReferenciaRequestInterface $bfacilConsultaPorReferenciaRequest = null) {
        $this->bfacilConsultaPorReferenciaRequest = $bfacilConsultaPorReferenciaRequest ?? new \BancoFacilPixSdk\ConsultaStatusReferencia\Request\BfacilConsultaPorReferenciaRequest($baseUrl, $token);
    }

    //put your code here
    public function buscar(string $accountId, string $referencia): \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse {
        return $this->bfacilConsultaPorReferenciaRequest->buscar($accountId, $referencia);
    }

}
