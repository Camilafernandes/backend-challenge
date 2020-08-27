<?php
$matriz_esquerda = 0;
$matriz_direita = 0;

$matriz = [[1,2,3], [4,5,6], [9,8,9]];

for ($iterador_x = 0; $iterador_x < sizeof($matriz); $iterador_x++) {
    for ($iterador_y = 0; $iterador_y < sizeof($matriz); $iterador_y++) {
        if ($iterador_x == $iterador_y) {
            $matriz_esquerda += $matriz[$iterador_x][$iterador_y];
        }

        if ($iterador_x + $iterador_y == sizeof($matriz[0]) - 1) {
            $matriz_direita += $matriz[$iterador_x][$iterador_y];
        };
    }
}

$soma = $matriz_esquerda - $matriz_direita;
echo 'A diferença entre elas é: ' . $soma;
