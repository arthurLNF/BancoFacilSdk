<?php
/**
 * Description of BfacilAutenticacaoResponse
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\Auth\Response;

class BfacilAutenticacaoResponse extends \BancoFacilPixSdk\AbstractBfacilResponse{
    public string $data;
    
    function __construct(bool $sucesso, string $error, string $data) {
        parent::__construct($sucesso, $error);
        $this->data = $data;
    }
}
