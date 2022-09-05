<?php
/**
 * Description of BfacilAutenticacaoResponse
 *
 * @author Weider
 */
class BfacilAutenticacaoResponse extends AbstractBfacilResponse{
    public string $data;
    
    function __construct(bool $sucesso, string $error, string $data) {
        parent::__construct($sucesso, $error);
        $this->data = $data;
    }
}
