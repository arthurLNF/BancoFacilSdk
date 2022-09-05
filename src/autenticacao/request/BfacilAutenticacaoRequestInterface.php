<?php
/**
 *
 * @author Weider
 */
interface BfacilAutenticacaoRequestInterface {
    public function autenticar(string $login, string $senha): BfacilAutenticacaoResponse;
}
