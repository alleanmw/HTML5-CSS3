<?php

$nome = addslashes($_POST['Nome']);
$sobrenome = addslashes($_POST['Sobrenome']);
$email = addslashes($_POST['E-mail']);
$mesagem =addslashes($_POST['Mesagem']);

$to = "seu e-mail";
$subject = "um determinado assunto";
$body = "Nome:".$nome. "Sobrenome".$sobrenome. "E-mail".$Email. "Mesagem:".$Mesagem;

$header = "from:outro email". "Reply-to:".$Email. "XeMeiler:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){

    echo ("E-mail enviado com sucesso!");
}

else{

echo("E-mail não foi enviado!");

}
?>