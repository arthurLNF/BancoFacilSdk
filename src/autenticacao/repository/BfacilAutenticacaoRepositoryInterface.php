<?php
/**
 *
 * @author Weider
 */
interface BfacilAutenticacaoRepositoryInterface {
    public function autenticar ($login, $senha): BfacilAutenticacaoResponse;
}
