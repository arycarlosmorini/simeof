<?php
     
     session_start();
    include_once("conexao.php");

    $o = $_POST["ori"];
    $d = $_POST["des"];
    $a = $_POST["ass"];
    $m = $_POST["tex"];
    $n = $_POST["nom"];
    $s = $_POST["set"];
    
                    
    $rec = "INSERT INTO memorando (id, data, origem, assunto, texto, nome, setor) VALUES ('$cont', now(),'$o','$d','$a','$m','$n','$s')";
    $ret = mysqli_query($conn, $rec);
        $_SESSION["msg"] = "<p style='color:green;'>Memorando Salvo com sucesso!</p>";
        if (mysqli_insert_id($conn)) {
            header("Location: memorando.php");
        }else {
            $_SESSION["msg"] = "<p style='color:red;'>Erro ao Salvar o memorando!</p>";
            header("Location: memorando.php");
        }                   
?>