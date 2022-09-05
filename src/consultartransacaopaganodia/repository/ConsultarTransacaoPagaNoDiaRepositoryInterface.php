<?php
/**
 *
 * @author Weider
 */
interface ConsultarTransacaoPagaNoDiaRepositoryInterface {
    function consultar($accountId, $dia): ConsultarTransacaoPagaNoDiaResponse;
}
