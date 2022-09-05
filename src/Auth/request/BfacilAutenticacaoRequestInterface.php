<?php

/**
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\Auth\Request;

interface BfacilAutenticacaoRequestInterface {

    public function autenticar(string $login, string $senha): \BancoFacilPixSdk\Auth\Response\BfacilAutenticacaoResponse;
}
