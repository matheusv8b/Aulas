<?php
//sets
require_once 'vendor/autoload.php';

/*$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome('teclado');*/

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(6);

$produtoDao->read();

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;

?>