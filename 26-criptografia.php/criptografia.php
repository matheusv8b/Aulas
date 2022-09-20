<?php

// base64 md5 sha1
    //$senha = "123456";

    //$novasenha = base64_encode($senha);
    //echo "base64: ".$novasenha. "<br>";
    //echo "Sua senha é: ". base64_decode($novasenha);

    //echo "<hr>";

    //echo "md5: ". md5($senha). "<br>";
    //echo "Sha1: ". Sha1($senha); 

$senha = "123456";
$senha_db = '$2y$10$.PsfcTl4abv7gc8N.v.LaOXf8tAC6/t.AFYPWuHkgPytwPjwIbjDy';


if(password_verify($senha, $senha_db)):
    echo "Senha válida";
else:
    echo "Senha inválida";
endif;



?>