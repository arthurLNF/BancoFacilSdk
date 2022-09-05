<?php
/**
 *
 * @author Weider
 */
interface ConsultarTransacaoPagaNoDiaRequestInterface {
    function consultar($accountId, $dia): ConsultarTransacaoPagaNoDiaResponse;
}
