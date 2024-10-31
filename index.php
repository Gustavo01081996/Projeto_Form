<?php
    include_once ("helpers/url.php");
    include_once("template/header.php");
?>


<body>
    
    <main>
        <div id="titulo">
            <h1>Formulário de Contato</h1>
        </div>
        <div id="form-conteudo">
            <form id = "form" action="<?= $BASE_URL ?>informacoes.php" method="POST">
                <div class="fieldset-wrapper">
                    <label for="nome"> Nome <span>*</span></label>
                    <input type="text" id="nome" name="nome" >
                    <small>Mensagem de Erro </small>
                </div>
                <div class="fieldset-wrapper">
                    <label for="email"> Email <span>*</span></label>
                    <input type="email" id="email" name="email" >
                    <small>Mensagem de Erro </small>
                </div>
                <div class="fieldset-wrapper">
                    <label for="telefone"> Telefone <span>*</span></label>
                    <input type="tel" id="telefone" name="telefone" >
                    <small>Mensagem de Erro </small>
                </div>
                <div class="fieldset-wrapper">
                    <label for="assunto"> Asssunto <span>*</span></label>
                    <input type="text" id="assunto" name="assunto" >
                    <small>Mensagem de Erro </small>
                </div>
                <div class="fieldset-wrapper">
                    <label for="mensagem"> Mensagem <span>*</span></label>
                    <textarea name="mensagem" id="mensagem"></textarea>
                    <small>Mensagem de Erro </small>
                </div>
                <input type="submit" id="enviar" name="enviar">   
            </form>
        </div>
        
    </main>
    
    <script src="<?= $BASE_URL ?>/js/index.js"></script>
</body>
    </html>