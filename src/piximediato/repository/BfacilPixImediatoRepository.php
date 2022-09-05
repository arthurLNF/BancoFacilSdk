<?php
/**
 * Description of BfacilPixImediatoRepository
 *
 * @author Weider
 */
class BfacilPixImediatoRepository implements BfacilPixImediatoRepositoryInterface{
    private BfacilPixImediatoRequestInterface $bfaciPixImediatoRequest;
    
    function __construct(BfacilPixImediatoRequestInterface $bfaciPixImediatoRequest = null) {
        $this->bfaciPixImediatoRequest = $bfaciPixImediatoRequest ?? new BfacilPixImediatoRequest();
    }
    
    public function gerarPixImediato(float $valor): \BfacilPixImediatoResponse {
        $ini = Adianti\Core\AdiantiApplicationConfig::get();
        $chave = $ini['contapix']['chave'];
        $accountId = $ini['contapix']['accountId'];
        $callbackUrl = $ini['contapix']['callbackUrl'];
        
        $pixImediatoBody = new BfacilPixImediatoBody($valor, $chave, $accountId, '', 86400, '', $callbackUrl, 400, true);
        
        return $this->bfaciPixImediatoRequest->gerar($pixImediatoBody);
    }
}
