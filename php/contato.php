<?php

if(isset($_POST['email']) && !empty($_POST['email'])){


$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

 

$to = "andremds2005@gmail.com";
$subject = "Portifolio Andre";
$body = "Nome: ".$nome. "\r\n".
        "Email ".$email "\r\n".
        "Mensagem:".$mensagem;
$header = "From:pullgbr@gmail.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body $header) ){

echo("Email enviado com sucesso!");

}else{

echo("O Email não pode ser enviado");
}
}