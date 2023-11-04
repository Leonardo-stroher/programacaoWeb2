<?php
$bingolin = "pericles";
$AnoNasc = "1999";
$idade = 2023 - $AnoNasc;
$altura= 1.64;
$peso= 83.0;
$imc= $peso/pow($altura, 2);

echo"<h1 style='color:red;text-align: center;'>
Olá $bingolin me disseram que você tem $idade anos</h1>";

echo"seu peso é de $peso e sua altura é $altura<br>";

echo"o seu imc é de $imc, ";

if($imc<17){
    echo"$bingolin cosplay de africano KKKKKKKK";
}else if($imc>=17 && $imc<=18.5){
    echo"$bingolin, vai mais pra casa da vó por favor";
}else if($imc>=18.5 && $imc<=24.9){
    echo"$bingolin shape tá baum em";
}else if($imc >=25 && $imc <=29.9){
    echo"$bingolin, manera esses doce ai gordo";
}else if($imc >= 30 && $imc<=34.9){
    echo"$bingolin, para de comer um pouco gordão KKKKKKKKK";
}else if($imc>=35 && $imc<= 40){
    echo"$bingolin, só pode ser a thais carla KKKKKKKKKKKKKKKK";
}else{
    echo"$bingolin maluco comeu a comida da africa toda só pode";
}