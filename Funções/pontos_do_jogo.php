<?php
//criar uma função que avalia o placar de um jogo
// informar se foi vitoria, empate ou derrota e quantos pontos o time teve

function resultado ($resultado_do_jogo1,$resultado_do_jogo2)
{
    if ($resultado_do_jogo1 == $resultado_do_jogo2) {
        echo "voce fez $resultado_do_jogo1 gols. os dois times empataram";
    } elseif ($resultado_do_jogo1 < $resultado_do_jogo2){
        echo "voce fez $resultado_do_jogo1 gols!! seu time ganhou!!";
    } elseif ($resultado_do_jogo1 > $resultado_do_jogo2){
        echo "voce fez $resultado_do_jogo1 gols. seu time perdeu :(";
    }
}

resultado(4, 7);
