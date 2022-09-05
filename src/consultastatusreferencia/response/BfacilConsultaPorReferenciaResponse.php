<?php
/**
 * Description of BfacilConsultaPorReferenciaResponse
 *
 * @author Weider
 */
class BfacilConsultaPorReferenciaResponse  extends AbstractBfacilResponse{
    public $data;
    
    function __construct(bool $sucesso, string $error, $data) {
        parent::__construct($sucesso, $error);
        $this->data = $data;
    }
}
