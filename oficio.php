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
    </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div id="tela">
        <form method="POST" action="SiMeOf.php">
            <legend>Memorando</legend>
            <?php
                

                echo date("d/m/Y") . "<br/>
                <input type='text' name='memo' id='mem' maxlength='25' size='45' placeholder='Origem'><br/>
                <input type='text' name='memor' id='mr' maxlength='25' size='45' placeholder='Destino'><br/>
                <input placeholder='assunto' type='text' name='rede' id='ass' maxlength='30' size='45'><br/>
                <textarea placeholder='Digite aqui seu Memorando' size='45' cols='50' rows='15' name='text'></textarea><br/>
                <input type='text' name='user' id='use' size='30' maxlength='45' placeholder='Nome do Responsável'/><br/>
                <input type='text' name='cargo' maxlength='45' size='40' placeholder='Função'/>
                <input type='submit' name='envio' class='botao' value='Enviar'/>";
            ?>
        </form>
    </div>
    <a href="SiMeOf.html" class="botao" >Voltar</a>
    <footer id="rodape">
        <p>SEMUS - Secretaria Municipal de Saúde<br/> Cachoeiro de Itapemirim-ES</p>
    </footer>
</body>
</html>