<?php

/**
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\ConsultaStatusReferencia\Request;

interface BfacilConsultaPorReferenciaRequestInterface {

    function buscar($accountId, $referencia): \BancoFacilPixSdk\ConsultaStatusReferencia\Response\BfacilConsultaPorReferenciaResponse;
}
