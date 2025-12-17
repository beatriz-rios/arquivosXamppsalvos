<?php
//Integer
$idade = 30;

//Float
$altura = 1.75;

//String
$nome = "joão";

//Boolean
$aprovado = true;

//Array
$frutas = ["maçã", "uva", "amora"];

//NULL
$semvalor = null;

echo"Digite sua idade " . $idade . " (---> exemplo de número inteiro (Integer))" . "<br>";
echo"Digite sua altura " . $altura . " (---> exemplo de número decimal (Float))". "<br>";
echo"Digite seu nome " . $nome . " (---> exemplo de texto (String)<br>";
echo"Digite se é verdadeiro ou falso " . $aprovado . " (---> exmplo de boolean true or false)<br>";
print_r($frutas);
echo"<br>Digite algo inválido" . $semvalor . " (---> variável existente mas não tem valor) <br>";

echo"Hoje é: " . date("d/m/Y") . "<br>";
date_default_timezone_set("America/Sao_Paulo");
echo"Hora atual: " . date("H:i:s") . "<br>";

$amanha = new DateTime();
$amanha->modify("+1 day");
echo "Amanhã será: " . $amanha->format("d/m/Y") . "<br>";

$timestamp = strtotime("last Friday");
echo"Última sexta-feira foi: " . date("d/m/Y" , $timestamp);
?>