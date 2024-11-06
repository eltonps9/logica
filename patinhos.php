
<p>total de patos: </p> 
<form action="" method="get">
    <input type="number" name="number">
    <input type="submit" value="tocar">
</form>
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

//$patos = readline('total de patos aqui:');

$patos=$_GET['number'];

if(isset($patos)){
    if($patos<=1 || $patos>10){
        echo "numero de patos nao aceito. <br>";
        exit;
    }

    for($i=$patos;$i>0;$i--){

        echo "\n";
        if($i==1){
            echo $i." patinho foi passear ";
            echo "<img src='./image/pato-caminando.gif' style='width:30px'><br>";
        }else{
            echo $i." patinhos foram passear";

            for($p=0;$p<$i;$p++){
                echo "<img src='./image/pato-caminando.gif' style='width:30px'>";
            }
        }
        echo "<br>";
        echo "Alem das montanhas <br>";
        echo "Para brincar <br><br>";
        echo "A mamae gritou: Qua, qua, qua, qua <br><br>";

        switch($i){
            case '2':
                echo "Mas so 1 patinho voltou de la <br><hr>";
                break;
            case '1':
                echo "Nenhum patinho voltou de la <br><hr>";
                break;
            default:
                echo "Mas so ".($i-1)." patinhos voltaram de la <br><hr>";
                break;
        }    
    }
    echo "<img src='https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExb2JrM3plcXJ3ZWZrYTM5eWp2a2NmZTdkYnpkNWhoNnRycmppcnZmZyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l4KhKRcaYb43LVqq4/giphy.webp' style='width:60px'>";
    echo " <br>";
    echo "A mamae patinha foi procurar <br>";
    echo "Alem das montanhas <br>";
    echo "Na beira do mar <br>";
    echo "A mamae gritou: Qua, qua, qua, qua <br>";
    echo "E os ".$patos." patinhos voltaram de la <br>";
    for($p=0;$p<$patos;$p++){
        echo "<img src='./image/pato-caminando.gif' style='width:30px'>";
    }
}
