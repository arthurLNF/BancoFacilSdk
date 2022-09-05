<?php
/**
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\Auth\Repository;

interface BfacilAutenticacaoRepositoryInterface {
    public function autenticar ($login, $senha): \BancoFacilPixSdk\Auth\Response\BfacilAutenticacaoResponse;
}
