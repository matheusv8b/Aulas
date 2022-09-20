<?php
//cookie
setcookie('user', 'Matheus de jesus', time()+3600);
setcookie('email', 'Matheusv0b@hotmail.com', time()+3600);
setcookie('ultima_pesquisa', 'Prata 925',  time()+3600);

echo $_COOKIE['ultima_pesquisa'];