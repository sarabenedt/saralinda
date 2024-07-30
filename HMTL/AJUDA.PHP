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
    // mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda</title>
    <link rel="stylesheet" href="../CSS/ajuda.css">
    <script src="script.js"></script>
</head>

<body>
    <nav class="nav-topo">
        <a href="">Sobre a Getting Books</a>
        <li><a href="">Central De Ajuda</a></li>
    </nav>
    <header>
        <div class="logo">
            <a href="../HMTL/INDEX.PHP"><img src="../IMGS/logo.png" alt="" width="100px"></a>
            <h1>Getting <br> Books</h1>
        </div>
        <form action="" class="caixa-busca">
            <input type="search" name="busca" id="busca" placeholder="O que você está procurando?">
            <button type="submit" id="btn-busca"><img src="../IMGS/icon3.png" alt="" width="20px"></button>
        </form>
        <div class="links-header">
            <a href=""><img src="../IMGS/favorite.png" alt="" width="30px">Minha Lista</a>
            <a href=""><img src="../IMGS/exchange.png" alt="" width="30px">Trocas</a>
            <a href=""><img src="../IMGS/person.png" alt="" width="30px">Usuário</a>
        </div>
        <div class="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </header>
    <nav class="nav-links">
        <a href="#">Categorias</a>
        <a href="#">Mais Trocados</a>
        <a href="#">Principais Autores</a>
        <a href="#">Obras de Sucesso</a>
    </nav>
    <div id="ok">
        <h1 class="titulo1">Principais perguntas:</h1>
    </div>
    <div id="login">
        <h1 class="com"></h1>
    </div>
    <section class="sara">
        <div id="baby">
            <details>
                <summary id="sar">Como faço para me cadastrar na plataforma de troca de livros?</summary>
                Para se cadastrar na nossa plataforma, clique no botão "Usuario" na pagina inicial. Preencha o formulario com seus dados pessoais, como nome, email, cpf e senha. Após completar o cadastro, você receberá um e-mail com a confirmação.
            </details>
        </div>
        <div id="baby">
            <details>
                <summary id="sar">Posso trocar de livros em qualquer condição?</summary>
                Sim, você pode trocar livros em qualquer condição, mas é importante ser honesto sobre o estado do livro. Informe o estado em que o livro está, todos os pontos positivos e negativos.
            </details>
        </div>
        <div id="baby">
            <details>
                <summary id="sar">Como faço para anunciar um livro para troca?</summary>
                Para anunciar um livro, acesse sua conta e clique em "troca". Preencha os detalhes do livro, como título, autor, gênero, e estado de conservação. Adicione uma ou mais fotos do livro e clique em "solicitar troca". Seu livro estará disponível para outros usuários verem e solicitarem a troca.
            </details>
        </div>
        <div id="babe">
            <details>
                <summary id="sar">O que fazer se não receber o livro que troquei?</summary>
                Se você não receber o livro acordado na troca, entre em contato com o trocador para verificar o que aconteceu. Se o problema não for resolvido, entre em contato com nossa equipe de suporte ao cliente para relatar o incidente. Forneça todas as informações e comprovantes de envio, se houver, para que possamos investigar e resolver a situação.
            </details>
        </div>
        <div id="babe">
            <details>
                <summary id="sar">Há algum custo envolvido na troca de livros?</summary>
                Nossa plataforma não cobra taxas de uso para a troca de livros. No entanto, se a troca for realizada pelo correio, os custos de envio são de responsabilidade dos trocadores. Recomendamos que as partes envolvidas na troca negociem e acordem como será feito o envio e quem arcará com os custos correspondentes.
            </details>
        </div>
        <div id="babe">
            <details>
                <summary id="sar">Quais tipos de livros podem ser listados para troca?</summary>
                Qualquer livro em boas condições para leitura.
            </details>
        </div>
    </section>

    <!-- Imagem clicável que redireciona para o formulário -->
    <div id="formulario-imagem" style="text-align: center; margin: 20px;">
        <h2>Podemos ajudar? Fale conosco.</h2>
        <a href="formulario.php">
            <img src="../IMGS/email.png" alt="Enviar Pergunta" width="300px">
        </a>
    </div>

</body>

</html>
