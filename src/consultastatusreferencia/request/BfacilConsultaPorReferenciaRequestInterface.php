<?php

/**
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\ConsultaStatusReferencia\Request;

interface BfacilConsultaPorReferenciaRequestInterface {

    function buscar(string $token, string $accountId, string $referencia): \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse;
}
