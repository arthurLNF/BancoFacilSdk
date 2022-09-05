<?php
/**
 *
 * @author Weider
 */
interface BfacilConsultaPorReferenciaRequestInterface {
    function buscar($accountId, $referencia): BfacilConsultaPorReferenciaResponse;
}
