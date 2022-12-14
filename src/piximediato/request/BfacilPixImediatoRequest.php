<?php

/**
 * Description of BFacilPixImediatoRequest
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\PixImediato\Request;

class BfacilPixImediatoRequest implements BfacilPixImediatoRequestInterface {

    private \BancoFacilPixSdk\AbstractBfacilRequest $bfacilRequest;

    function __construct(string $baseUrl, AbstractBfacilRequest $bfacilRequest = null) {
        $this->bfacilRequest = $bfacilRequest ?? new \BancoFacilPixSdk\BfacilPostRequest($baseUrl);
    }

    public function gerar(
            string $token,
            \BancoFacilPixSdk\PixImediato\Body\BfacilPixImediatoBody $bfacilPixImediatoBody
    ): \BancoFacilPixSdk\PixImediato\Response\BfacilPixImediatoResponse {
        try {
            $path = '/api/pix/imediato/gerar';
            $response = $this->bfacilRequest->send($path, $token, $bfacilPixImediatoBody);
            $status = $response->getStatusCode();
            $body = json_decode($response->getBody());

            if ($status == 200) {
                return new \BancoFacilPixSdk\PixImediato\Response\BfacilPixImediatoResponse(true, $body->message, $body->pix);
            } else {
                return new \BancoFacilPixSdk\PixImediato\Response\BfacilPixImediatoResponse(false, $body->message, "");
            }
        } catch (Exception $ex) {
            return new \BancoFacilPixSdk\PixImediato\Response\BfacilPixImediatoResponse(true, "error", "Ocorreu um erro " . $ex->getMessage());
        }
    }

}
