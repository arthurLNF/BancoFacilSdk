<?php

/**
 *
 * @author Weider
 */

namespace BancoFacilPixSdk\PixImediato\Repository;

interface BfacilPixImediatoRepositoryInterface {

    public function gerarPixImediato(
            string $token,
            float $valor,
            string $chave,
            string $accountId,
            string $referencia,
            string $expiracaoEmSegundos,
            string $descricao,
            string $callbackUrl,
            string $tamanhoDaImagem,
            bool $gerarImagem
    ): \BancoFacilPixSdk\PixImediato\Response\BfacilPixImediatoResponse;
}
