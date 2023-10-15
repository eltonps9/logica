<?php

/*
Cinco patinhos foram passear
Além das montanhas
Para brincar
A mamãe gritou: Quá, quá, quá, quá
Mas só quatro patinhos voltaram de lá

A mamãe patinha foi procurar
Além das montanhas
Na beira do mar
A mamãe gritou: Quá, quá, quá, quá
E os cinco patinhos voltaram de lá
*/
$patos = readline('total de patos aqui:');

if($patos<=1 || $patos>10){
    echo "numero de patos nao aceito.\n";
    exit;
}

for($i=$patos;$i>0;$i--){

    echo "\n";
    if($i==1){
        echo $i." patinho foi passear\n";
    }else{
        echo $i." patinhos foram passear\n";
    }

    echo "Alem das montanhas\n";
    echo "Para brincar\n";
    echo "A mamae gritou: Qua, qua, qua, qua\n";

    switch($i){
        case '2':
            echo "Mas so 1 patinho voltou de la\n";
            break;
        case '1':
            echo "Nenhum patinho voltou de la\n";
            break;
        default:
            echo "Mas so ".($i-1)." patinhos voltaram de la\n";
            break;
    }    
}

echo "\n";
echo "A mamae patinha foi procurar\n";
echo "Alem das montanhas\n";
echo "Na beira do mar\n";
echo "A mamae gritou: Qua, qua, qua, qua\n";
echo "E os ".$patos." patinhos voltaram de la\n";