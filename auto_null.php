<?php
function vazio_para_null(array &$array) {
    foreach ($array as $chave => &$valor) {
        if (is_array($valor)) {
            vazio_para_null($valor);
        } else {
            if ($valor === '' || $valor === [] || $valor === false) {
                $valor = null;
            }
        }
    }
}

vazio_para_null($_POST);
vazio_para_null($_GET);
vazio_para_null($_REQUEST);
