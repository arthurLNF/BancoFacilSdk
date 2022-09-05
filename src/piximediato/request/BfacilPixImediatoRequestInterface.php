<?php

/**
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\PixImediato\Request;

interface BfacilPixImediatoRequestInterface {

    public function gerar(
            \BancoFacilPixSdk\PixImediato\Body\BfacilPixImediatoBody $bfacilPixImediatoBody
    ): \BancoFacilPixSdk\PixImediato\Response\BfacilPixImediatoResponse;
}
