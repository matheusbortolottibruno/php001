<?php

echo "Olá mundo"; 
?>
<br>
5+2 = <?php echo 5+2; ?> <br> 
10-2 = <?php echo 10-2; ?> <br>
10/2 = <?php echo 10/2; ?> <br>
10*2 = <?php echo 10*2; ?> <br>
10%2 = <?php echo 10%3; ?> <br>
10**2 = <?php echo 10**2; ?> <br>

<?php
$salario = 5000.35; //decimal ou float
$idade = 21; //int ou interger
$sobrenome = "bruno";  //string
$animalestimacao = false;  //bool ou boolean

echo "<br>";
echo "Eu tenho $idade anos <br>";
echo 'Eu tenho $idade anos <br>';
echo 'Eu tenho' . $idade . ' anos <br>';
echo "Eu tenho" . $idade . " anos <br>";

 if($idade > 21){

    echo "cuidado com o tigrinho";

   
    }else{
echo "voce ainda tem chance";

 }
?>
<br>
<?php


// uma linha

/* varias linha
*/



$corFavorita = "azul";

switch ($corFavorita){
    case 'azul':
        echo "<br>sua cor favorita é azul";
        break;
        case 'vermelho':
            echo "<br>sua cor favorita é vermelha";
            break;
             case 'amarelo':
            echo "<br>sua cor favorita é amarelo";
            break;
            default:
            echo "<br>sua cor favorita";
            break;

}

$I = 0;
while($i<10){
    echo "<br>vermelho";
    $i = $i + 1;
}

for($i = 0; $i < 10; $i=$i=1){
    echo "<br>vambore2";
}
?>







