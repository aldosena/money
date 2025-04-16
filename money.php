<?php 

# Utiliza a biblioteca Intl para formatar o valor em reais
# author: https://github.com/leonardoanthony
# versao 1.4.2 - 2025-04-16

function grana_us_nativo(string $valor): float {
    $formatter = new NumberFormatter('pt_BR', NumberFormatter::DECIMAL);
    $numero = $formatter->parse($valor);

    return is_float($numero) ? $numero : 0.0;
}
