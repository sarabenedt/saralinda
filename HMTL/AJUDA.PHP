<!DOCTYPE html>
<html lang="en"> <!-- Define o tipo de documento e a linguagem como inglês -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura a viewport para responsividade -->
    <title>Ajuda</title> <!-- Define o título da página -->
    <link rel="stylesheet" href="../CSS/ajuda.css"> <!-- Link para o arquivo CSS externo -->
    <script src="script.js"></script> <!-- Link para o arquivo JavaScript externo -->
</head>

<body>
    <nav class="nav-topo"> <!-- Início da barra de navegação superior -->
        <a href="#">Sobre a Getting Books</a> <!-- Link para a página "Sobre" -->
        <li><a href="#">Central De Ajuda</a></li> <!-- Link para a "Central de Ajuda" -->
    </nav>
    <header> <!-- Início do cabeçalho -->
        <div class="logo"> <!-- Div para a logo -->
            <a href="../HTML/INDEX.PHP"><img src="../IMGS/logo.png" alt="Logo" width="100px"></a> <!-- Logo com link para a página inicial -->
            <h1>Getting <br>Books</h1> <!-- Título do site -->
        </div>
        <form action="" class="caixa-busca"> <!-- Início do formulário de busca -->
            <input type="search" name="busca" id="busca" placeholder="O que você está procurando?"> <!-- Campo de busca -->
            <button type="submit" id="btn-busca"><img src="../IMGS/icon3.png" alt="Buscar" width="20px"></button> <!-- Botão de busca -->
        </form>
        <div class="links-header"> <!-- Links do cabeçalho -->
            <a href="#"><img src="../IMGS/favorite.png" alt="Favoritos" width="30px">Minha Lista</a> <!-- Link para "Minha Lista" -->
            <a href="#"><img src="../IMGS/exchange.png" alt="Trocas" width="30px">Trocas</a> <!-- Link para "Trocas" -->
            <a href="#"><img src="../IMGS/person.png" alt="Usuário" width="30px">Usuário</a> <!-- Link para "Usuário" -->
        </div>
        <div class="hamburger-menu"> <!-- Menu hamburger para dispositivos móveis -->
            <div class="bar"></div> <!-- Barra do menu hamburger -->
            <div class="bar"></div> <!-- Barra do menu hamburger -->
            <div class="bar"></div> <!-- Barra do menu hamburger -->
        </div>
    </header>
    <nav class="nav-links"> <!-- Navegação secundária -->
        <a href="#">Categorias</a> <!-- Link para "Categorias" -->
        <a href="#">Mais Trocados</a> <!-- Link para "Mais Trocados" -->
        <a href="#">Principais Autores</a> <!-- Link para "Principais Autores" -->
        <a href="#">Obras de Sucesso</a> <!-- Link para "Obras de Sucesso" -->
    </nav>
    <div id="ok">
        <h1 class="titulo1">Principais perguntas:</h1> <!-- Título das perguntas frequentes -->
    </div>
    <div id="login">
        <h1 class="com"></h1> <!-- Título de login (não utilizado) -->
    </div>
    <section class="sara"> <!-- Seção principal de perguntas e respostas -->
        <div class="baby"> <!-- Div para cada pergunta -->
            <details> <!-- Detalhes da pergunta (expandível) -->
                <summary class="sar">Como faço para me cadastrar na plataforma de troca de livros?</summary> <!-- Resumo da pergunta -->
                <p>Para se cadastrar na nossa plataforma, clique no botão "Usuário" na página inicial. Preencha o formulário com seus dados pessoais, como nome, email, CPF e senha. Após completar o cadastro, você receberá um email com a confirmação.</p> <!-- Resposta da pergunta -->
            </details>
        </div>
        <div class="baby">
            <details>
                <summary class="sar">Posso trocar livros em qualquer condição?</summary>
                <p>Sim, você pode trocar livros em qualquer condição, mas é importante ser honesto sobre o estado do livro. Informe o estado em que o livro está, todos os pontos positivos e negativos.</p>
            </details>
        </div>
        <div class="baby">
            <details>
                <summary class="sar">Como faço para anunciar um livro para troca?</summary>
                <p>Para anunciar um livro, acesse sua conta e clique em "Troca". Preencha os detalhes do livro, como título, autor, gênero e estado de conservação. Adicione uma ou mais fotos do livro e clique em "Solicitar troca". Seu livro estará disponível para outros usuários verem e solicitarem a troca.</p>
            </details>
        </div>
        <div class="baby">
            <details>
                <summary class="sar">O que fazer se não receber o livro que troquei?</summary>
                <p>Se você não receber o livro acordado na troca, entre em contato com o trocador para verificar o que aconteceu. Se o problema não for resolvido, entre em contato com nossa equipe de suporte ao cliente para relatar o incidente. Forneça todas as informações e comprovantes de envio, se houver, para que possamos investigar e resolver a situação.</p>
            </details>
        </div>
        <div class="baby">
            <details>
                <summary class="sar">Há algum custo envolvido na troca de livros?</summary>
                <p>Nossa plataforma não cobra taxas de uso para a troca de livros. No entanto, se a troca for realizada pelo correio, os custos de envio são de responsabilidade dos trocadores. Recomendamos que as partes envolvidas na troca negociem e acordem como será feito o envio e quem arcará com os custos correspondentes.</p>
            </details>
        </div>
        <div class="baby">
            <details>
                <summary class="sar">Quais tipos de livros podem ser listados para troca?</summary>
                <p>Qualquer livro em boas condições para leitura.</p>
            </details>
        </div>
    </section>
    <div id="central">
        <p class="sa">Não encontrou o que estava procurando?</p> <!-- Texto informativo -->
        <a class="sari" href="#"> <!-- Link para contato -->
            <p class="oka">Podemos ajudar? Fale conosco.</p>
        </a>
        <div id="ajuda"> <!-- Links para redes sociais e email -->
            <a href="http://instagram.com"><img src="../IMGS/instagram.png" alt="Instagram" width="30px"></a>
            <a href="http://facebook.com"><img src="../IMGS/facebook.png" alt="Facebook" width="30px"></a>
            <a href="http://twitter.com"><img src="../IMGS/twitter.png" alt="Twitter" width="30px"></a>
            <a href="https://www.linkedin.com/in/sara-silva-6273a12a5?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img src="../IMGS/linkedin.png" alt="LinkedIn" width="30px"></a>
            <a class="sarinha" href="mailto:sarabenedt@gmail.com"><img src="../IMGS/email.png" alt="Email" width="30px"></a>
        </div>
    </div>
</body>
</html>
