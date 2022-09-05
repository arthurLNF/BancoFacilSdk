<?php

/**
 * Description of AbstractBfacilResponse
 *
 * @author Weider
 */

namespace BancoFacilPixSdk;

class AbstractBfacilResponse {
    public string $status;
    public string $error;

    public function __construct(bool $sucesso, string $error) {
        $this->status = "erro";
        if ($sucesso) {
            $this->status = "sucesso";
        }
        $this->error = $error;
    }
}
