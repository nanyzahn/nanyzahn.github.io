<?php
$name      = $_POST["name"];
$email   = $_POST["email"];
$phone   = $_POST["phone"];


$assunto   = $_POST["assunto"];
$message  = $_POST["message"];

global $email;
$data      = date("d/m/y");
$ip        = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$hora      = date("H:i");

mail ("nanyzahn@hotmail.com",
"Nayara Zahn - $assunto",
"Nome: $name\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nE-mail: $email\nTelefone: $phone\nMensagem: $message",
"From: $email"
);
$site   = "Nayara Zahn";
$titulo = "Nayara Zahn";
$message    = "$name, obrigado por entrar em contato conosco, em breve entraremos em contato";

mail("$email",
"$titulo",
"$message",
"From: $site"
);
echo "<p align=center>$name, sua mensagem foi enviada com sucesso!</p>";
echo "<p align=center>Estaremos retornando em breve.</p>";
echo "<p align=center><a href=https://nanyzahn.github.io/>Voltar</a></p>";
?>