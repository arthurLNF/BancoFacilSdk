<?php
/**
 *
 * @author Weider
 */
interface BfacilPixImediatoRepositoryInterface {
    public function gerarPixImediato(float $valor) : BfacilPixImediatoResponse;
}
