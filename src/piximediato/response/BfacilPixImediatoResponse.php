<?php
/**
 * Description of BfacilPixImediatoResponse
 *
 * @author Weider
 */
class BfacilPixImediatoResponse extends AbstractBfacilResponse{
    public $data;
    
    function __construct(bool $sucesso, string $error, $data) {
        parent::__construct($sucesso, $error);
        $this->data = $data;
    }
}
