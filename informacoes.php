<?php

include_once("template/header.php");

if (isset($_POST["enviar"])) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];


    ?>
    <html>

    <body>
        <div id="conteudo">
            <table class="tabela" border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Assunto</th>
                        <th>Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $telefone ?></td>
                        <td><?php echo $assunto ?></td>
                        <td><?php echo $mensagem ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>

    </html>
    <?php
}



