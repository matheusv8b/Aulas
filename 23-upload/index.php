<html>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");            
    $pasta = "arquivos/";
    $quantidadeArquivos = count($_FILES['arquivo']['name']);            
    for($contador = 0; $contador < $quantidadeArquivos; $contador++):            
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
            if(in_array($extensao, $formatosPermitidos)):
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNome = uniqid().".$extensao";
                if(move_uploaded_file($temporario, $pasta.$novoNome)):
                    echo "Upload feito com sucesso para $pasta$novoNome <br/>";                        
                else:
                    echo "Erro ao enviar o arquivo. <br/>";                        
                endif;                   
            else:
                echo "A extensão $extensao não é permitida. <br/>";                    
            endif;
    endfor;
endif;    
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>  " method="post" enctype="multipart/form-data">
    <input type = "file" name="arquivo[]" multiple /> <br/>
    <input type = "submit" name="enviar-formulario" /><br/>

</form>
</form>
</body>
</html>