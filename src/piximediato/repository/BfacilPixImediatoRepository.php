<?php

/**
 * Description of BfacilPixImediatoRepository
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\PixImediato\Repository;

class BfacilPixImediatoRepository implements BfacilPixImediatoRepositoryInterface {

    private \BancoFacilPixSdk\PixImediato\Request\BfacilPixImediatoRequestInterface $bfaciPixImediatoRequest;

    function __construct(string $baseUrl, string $token, \BancoFacilPixSdk\PixImediato\Request\BfacilPixImediatoRequestInterface $bfaciPixImediatoRequest = null) {
        $this->bfaciPixImediatoRequest = $bfaciPixImediatoRequest ?? new \BancoFacilPixSdk\PixImediato\Request\BfacilPixImediatoRequest($baseUrl, $token);
    }

    public function gerarPixImediato(
            float $valor,
            string $chave,
            string $accountId,
            string $referencia,
            string $expiracaoEmSegundos,
            string $descricao,
            string $callbackUrl,
            string $tamanhoDaImagem,
            bool $gerarImagem
    ): \BancoFacilPixSdk\PixImediato\Response\BfacilPixImediatoResponse {

        $pixImediatoBody = new \BancoFacilPixSdk\PixImediato\Body\BfacilPixImediatoBody(
                $valor,
                $chave,
                $accountId,
                $referencia,
                $expiracaoEmSegundos,
                $descricao,
                $callbackUrl,
                $tamanhoDaImagem,
                $gerarImagem
        );

        return $this->bfaciPixImediatoRequest->gerar($pixImediatoBody);
    }

}
