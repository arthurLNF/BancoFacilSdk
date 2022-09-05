<?php
/**
 * Description of ConsultarTransacaoPagaNoDiaRepository
 *
 * @author Weider
 */
class ConsultarTransacaoPagaNoDiaRepository implements ConsultarTransacaoPagaNoDiaRepositoryInterface{
    private ConsultarTransacaoPagaNoDiaRequestInterface $consultarTransacao;
    
    function __construct(ConsultarTransacaoPagaNoDiaRequestInterface $consultarTransacao = null ) {
        $this->consultarTransacao = $consultarTransacao ?? new ConsultarTransacaoPagaNoDiaRequest;
    }

    public function consultar($accountId, $dia): \ConsultarTransacaoPagaNoDiaResponse {
        $this->consultarTransacao->consultar($accountId, $dia);
    }

}
