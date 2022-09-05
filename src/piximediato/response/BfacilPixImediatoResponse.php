<?php

/**
 * Description of BfacilPixImediatoResponse
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\PixImediato\Response;

class BfacilPixImediatoResponse extends \BancoFacilPixSdk\AbstractBfacilResponse {

    public $data;

    function __construct(bool $sucesso, string $error, $data) {
        parent::__construct($sucesso, $error);
        $this->data = $data;
    }

}
