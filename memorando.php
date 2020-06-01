<?php
    session_start();
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>SiMeOf</title>
    <link rel="stylesheet" href="_css/style.css"/>
    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	<script type="text/javascript" src="_javascript/funcoes.js"></script>
</head>
<body id="corpo">
    <h1>SiMeOf - Sistema de Memorandos e Ofícios</h1>
    <p>Versão Web 1.0 </p>
    <div id="datahora" class="direita">
        <output id="hora"></output><br/>				
        <output id="data"></output>
    </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div id="tela">
        
            <?php
                if (isset($_SESSION["msg"])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION["msg"]);
                }
                $cont = file_get_contents("numero.txt");
                $cont = $cont+1;
                file_put_contents("numero.txt",$cont);
            ?>
            <form method='POST' action='cad_memo.php'>
                <fieldset><legend>Memorando nº<?php echo "$cont /" . date("Y"); ?></legend>
                    <?php echo date("d/m/Y"); ?><br>
                    Origem:<br>
                        <input type='text' name='ori' id='mem' maxlength='25' size='45' placeholder='Origem'><br/>
                    Destino:<br>
                        <input type='text' name='des' id='mr' maxlength='25' size='45' placeholder='Destino'><br/>
                    Assunto:<br>
                        <input placeholder='assunto' type='text' name='ass' id='ass' maxlength='60' size='45'><br/>
                    Memorando:<br>
                        <textarea placeholder='Digite aqui seu Memorando' size='45' cols='40' rows='8' name='tex'></textarea><br/>
                    Nome do Solicitante:<br>
                        <input type='text' name='nom' id='use' size='30' maxlength='45' placeholder='Nome do Responsável'/><br/>
                    Setor:<br>
                        <input type='text' name='set' maxlength='45' size='40' placeholder='Função'/></fieldset><br>
                    <input type='submit' name='envio' class='botao' value='Enviar'/>
        </form>
    </div>
    <a href="SiMeOf.html" class="botao" >Voltar</a>
    <footer id="rodape">
        <p>SEMUS - Secretaria Municipal de Saúde<br/> Cachoeiro de Itapemirim-ES</p>
    </footer>
</body>
</html>