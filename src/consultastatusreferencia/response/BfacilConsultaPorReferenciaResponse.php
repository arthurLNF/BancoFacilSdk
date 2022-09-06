<?php

/**
 * Description of BfacilConsultaPorReferenciaResponse
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\ConsultaStatusReferencia\Response;

class BfacilConsultaPorReferenciaResponse extends \BancoFacilPixSdk\AbstractBfacilResponse {

    public $data;

    function __construct(bool $sucesso, string $error, $data) {
        parent::__construct($sucesso, $error);
        $this->data = $data;
    }

}
