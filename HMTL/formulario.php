<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Pergunta</title>
    <link rel="stylesheet" href="../CSS/ajuda.css">
</head>

<body>
    <header class="perguntas">
        <h1 >Enviar Pergunta</h1>
    </header>

    <div id="formulario-pergunta">
        <h2 class="titulo2" >Envie sua Pergunta</h2>
        </div>
        <form  class="label" action="" method="post">
            <label id="text1" for="nome">Seu Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label id="text1" for="email">Seu E-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label id="text1" for="pergunta">Sua Pergunta:</label><br>
            <textarea id="pergunta" name="pergunta" rows="4" required></textarea><br><br>

            <input id="enviar2" type="submit" value="Enviar">
            <div>
        <a class="retornar" href="AJUDA.PHP">Voltar para a Ajuda</a>
    </div>
        </form>
    

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dados do formulário
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $pergunta = htmlspecialchars($_POST['pergunta']);

        // Aqui você pode processar os dados, como armazená-los em um banco de dados ou enviá-los por e-mail
        echo "<h2>Sua pergunta foi enviada!</h2>";
        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Pergunta: $pergunta</p>";

        // Exemplo de envio de e-mail (verifique se o servidor suporta envio de e-mail)
        $to = "sarabenedt@gmail.com"; // Substitua pelo seu e-mail
        $subject = "Nova Pergunta do FAQ";
        $message = "Nome: $nome\nE-mail: $email\nPergunta: $pergunta";
        $headers = "From: $email";

        // Envia o e-mail
        //email($to, $subject, $message, $headers);
    }
    ?>

   
</body>

</html>