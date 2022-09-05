<?php

/**
 * Description of ConsultarTransacaoPagaNoDiaResponse]
 *
 * @author Weider
 */
class ConsultarTransacaoPagaNoDiaResponse extends AbstractBfacilResponse{
    public $data;
    
    function __construct(bool $sucesso, string $error, $data) {
        parent::__construct($sucesso, $error);
        $this->data = $data;
    }

}
