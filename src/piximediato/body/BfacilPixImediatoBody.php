<?php
/**
 * Description of BfacilPixImediatoBody
 *
 * @author Weider
 */
class BfacilPixImediatoBody {
    public float $valor;
    public string $chave;
    public string $accountId;
    public string $referencia;
    public int $expiracaoEmSegundos;
    public string $descricao;
    public string $callbackUrl;
    public string $tamanhoDaImagem;
    public bool $gerarRenderizacaoDaImagem;
    
    function __construct(float $valor,
    string $chave,
    string $accountId,
    string $referencia,
    int $expiracaoEmSegundos,
    string $descricao,
    string $callbackUrl,
    string $tamanhoDaImagem,
    bool $gerarRenderizacaoDaImagem) {
        $this->valor = $valor;
        $this->chave = $chave;
        $this->accountId = $accountId;
        $this->referencia = $referencia;
        $this->expiracaoEmSegundos = $expiracaoEmSegundos;
        $this->descricao = $descricao;
        $this->callbackUrl = $callbackUrl;
        $this->tamanhoDaImagem = $tamanhoDaImagem;
        $this->gerarRenderizacaoDaImagem = $gerarRenderizacaoDaImagem;
    }
}
