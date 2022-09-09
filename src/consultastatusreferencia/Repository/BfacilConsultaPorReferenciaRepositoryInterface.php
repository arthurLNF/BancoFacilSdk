<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Arthur
 */

namespace BancoFacilPixSdk\ConsultaStatusReferencia\Repository;

interface BfacilConsultaPorReferenciaRepositoryInterface {

    function buscar(string $token, string $accountId, string $referencia): \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse;
}
