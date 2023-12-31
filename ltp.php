<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link rel="stylesheet" href="master/icomoon.css">
    <link rel="icon" type="image/jpg" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="master/ltp.css" media="screen" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguagens de Programação</title>
</head>
<body>
    <header class="primary-header">
        <nav class="navbar">
            <div class="container-xl">
                <a href="index.php" class="logo">SST</a>
                <ul class="nav-list">
                    <li>
                        <a href="manutencao.php" class="nav-link">Montagem e Manutenção</a>
                    </li>
                    <li>
                        <a href="sistemas.php" class="nav-link">Sistemas Operacionais</a>
                    </li>
                    <li>
                        <a href="redes.php" class="nav-link">Redes de Internet</a>
                    </li>
                    <li>
                        <a href="fundamentos.php" class="nav-link">Fundamentos da Computação</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="hero">
    
        
    </section>
    <div class="page">
        <div class="container">
            <h1 class="title" style="--duration: 1s">
                <span style="--delay: 0.5s">Linguagens &</span>
                <span style="--delay: 0.8s">Técnicas de Programação</span>
                </h1>
              <p>As linguagens de programação são mais produtivas para entrar em contato com a máquina com um código que elas entendem diretamente, facilitam a vida dos programadores e são muito importantes para o nosso futuro.</p>
              <div class="lista1">
                  <ul>
                      <p>Vamos conhecer um pouco as linguagens abordadas em seu curso técnico.</p>
                      <li>Python</li>
                      <li>HTML</li>
                      <li>CSS</li>
                      <li>Javascript</li>
                      <li>My SQL (Banco de Dados)</li>
                  </ul>
              </div>
              <h2 class="python">Python</h2>
              <p>A primeira linguagem que vamos conhecer é a Python, essa é uma linguagem de programação que vem se tornando muito famosa nos últimos anos, por ela ser fácil de aprender e poder ser executada em várias plataformas diferentes. Ela é amplamente usada em aplicações Web, desenvolvimento de software e ciência de dados.</p>
              <p>Antes de começarmos a programação de fato precisamos entender alguns conceitos para desenvolver melhor uma estrutura em python.</p>
              <h3>Dados</h3>
              <p>Um dado é a informação "bruta" que é fornecida ao software para ser processada, ou seja, uma informação crua. Por exemplo: a sua idade, o seu nome ou o valor de algo.</p>
              <h3>Tipos de dados</h3>
              <p>Cada dado tem sua própria classe, cada tipo de dado indica o que ele suporta armazenar e as operações que podem ser executadas.</p>
              <p>Os tipos de dados primitivos no python, disponibilizados pela linguagem são: <code id="text-tag">str</code>, <code id="text-tag">int</code>, <code id="text-tag">float</code> e <code id="text-tag">bool</code>. Também existem os tipos derivados que são aqueles criados pelo programador, mas aqui vamos nos relacionar apenas com os tipos primitivos.</p>
              <h3>Entrada e saída</h3>
              <h4>Input</h4>
              <p>O comando que permite a entrada de dados no Python é o <code id="text-tag">Input</code>, com ele você pode realizar a leitura do dado inserido, ele retorna apenas strings.</p>
<pre id="pre-pag">
    <code id="code-pag">
    <span id="py-var">nome</span><span id="py-sin"> = </span><span id="py-cmd">input</span><span id="py-par"> (</span><span id="py-str">"Informe o nome: "</span><span id="py-par">)</span>
    <span id="py-var">nome</span><span id="py-sin"> = </span><span id="py-cmd">input</span><span id="py-par"> (</span><span id="py-str">"Esta mensagem é opcional: "</span><span id="py-par">)</span>
    </code>
</pre>
             <h4>Print</h4>
             <p>Print é o comando de saída, ele realiza a exibição dos dados que você determina.</p>
<pre id="pre-pag">
    <code id="code-pag">
    <span id="py-var">nome</span><span id="py-sin"> = </span><span id="py-">"Jonata"</span><span id="py-par">
    <span id="py-cmd">print</span><span id="py-par"> (</span><span id="py-str">nome</span><span id="py-par">)</span>
    </code>
</pre>
              
              <h2 id="html">HTML</h2>
                  <p>HTML (HyperText Markup Language), o bloco de construção mais básico da Web, é a linguagem utilizada para dar forma e estruturar os conteúdos na sua página Web.</p>
                  <p>Você pode testar o código abaixo em seu aplicativo:</p>
<pre id="pre-pag">
    <code id="code-pag">
      <span id="tag-html">&lt;DOCTYPE! html&gt;</span>
      <span id="tag-html">&lt;html lang="en"&gt;</span>
      <span id="tag-head">&lt;head&gt;</span>
      <span id="tag-html">&lt;meta charset="UTF-8"&gt;</span>
      <span id="tag-html">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</span> 
      <span id="tag-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
      <span id="tag-title">&lt;title&gt;Minha página teste&lt;/title&gt;</span>
      <span id="tag-head">&lt;/head&gt;</span>
      <span id="tag-body">&lt;body&gt;</span>
        <span id="tag-p">&lt;p&gt;A tag body é onde o código será estruturado&lt;p&gt;</span>
      <span id="tag-body">&lt;/body&gt;</span>
      <span id="tag-html">&lt;/html&gt;</span>
   </code>
</pre>
                  <p>Você pode criar essa estrutura básica sem copiar e colar ou digitar tudo a mão, basta digitar o sinal <code id="text-tag">!</code> no seu aplicativo e selecionar a primeira opção que é recomendada.</p>
                  <p>A tag <code id="text-tag">body</code> no html é onde se desenvolve o corpo do código, é dentro dessa tag que você vai adicionar todo o conteúdo da sua página Web.</p>
                  <h3>Formatações no HTML</h3>
                  <p>No HTML você pode formatar o tamanho do seu texto por meio de tags, veja os exemplos no código a seguir:</p>
<pre id="pre-form">
   <code id="code-form">
     <span id="tag-html">&lt;DOCTYPE! html&gt;</span>
     <span id="tag-html">&lt;html lang="en"&gt;</span>
     <span id="tag-head">&lt;head&gt;</span>
     <span id="tag-html">&lt;meta charset="UTF-8"&gt;</span>
     <span id="tag-html">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</span>
     <span id="tag-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
     <span id="tag-title">&lt;title&gt;Minha primeira imagem&lt;/title&gt;</span>
     <span id="tag-head">&lt;/head&gt;</span>
      <span id="tag-body">&lt;body&gt;</span>
       <span id="tag-form">&lt;h1&gt;Isto é um h1&lt;h1&gt</span>
       <span id="tag-form">&lt;h2&gt;Isto é um h2&lt;h2&gt</span>
       <span id="tag-form">&lt;h3&gt;Isto é um h3&lt;h3&gt</span>
       <span id="tag-form">&lt;h4&gt;Isto é um h4&lt;h4&gt</span>
       <span id="tag-form">&lt;h5&gt;Isto é um h5&lt;h5&gt</span>
       <span id="tag-form">&lt;h6&gt;Isto é um h6&lt;h6&gt</span>
       <span id="tag-form">&lt;p&gt;Isto é um parágrafo&lt;p&gt;</span>
      <span id="tag-body">&lt;/body&gt;</span>
      <span id="tag-html">&lt;/html&gt;</span>
   </code>
</pre>
                  <p>As tags que vão de <code id="text-tag">h1</code> a <code id="text-tag">h6</code> se referenciam aos títulos da sua página e a tag <code id="text-tag">p</code> é o seu paragráfo.</p>
              <h3>Imagens no HTML</h3>
                  <p>Com o HTML podemos colocar muitas coisas para serem exibidas na tela, inclusive imagens, no código abaixo você verá como adicionar uma imagem da Web em sua página.</p>
<pre id="pre-img">
  <code id="code-img">
      <span id="tag-html">&lt;DOCTYPE! html&gt;</span>
      <span id="tag-html">&lt;html lang="en"&gt;</span>
      <span id="tag-head">&lt;head&gt;</span>
      <span id="tag-html">&lt;meta charset="UTF-8"&gt;</span>
      <span id="tag-html">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</span>
      <span id="tag-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
      <span id="tag-title">&lt;title&gt;Minha primeira imagem&lt;/title&gt;</span>
      <span id="tag-head">&lt;/head&gt;</span>
      <span id="tag-body">&lt;body&gt;</span>
        <span id="tag-img">&lt;img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP7r5C1mAIE8ZRJp4lPGZO_fPxIKSscDL6Sw&usqp=CAU"&gt;</span>
        <span id="tag-img">&lt;p&gt;Esta é sua imagem&lt;p&gt;</span> 
      <span id="tag-body">&lt;/body&gt;</span>
      <span id="tag-html">&lt;/html&gt;</span>
   </code>
</pre>
                  <p>Para adicionar a imagem você deve utilizar a tag <code id="text-tag">img src=" "</code> após inserir a tag em seu código deve-se colocar o endereço direcional para a imagem, para obter essa URL deve-se pesquisar a imagem na Web, clicar com o botão esquerdo do mouse sobre a imagem e selecionar a opção "copiar o endereço da imagem", feito isso você deve colar o endereço copiado dentro das aspas da tag <code id="text-tag">img src=" "</code>. Não se assuste se o link for muito grande, isso não vai alterar o resultado do código.</p>

              <h3>Links no HTML</h3>
              <p>Também podemos colocar links na nossa página HTML, links que levam para sites, pdfs, artigos, qualquer coisa que tenha uma URL.</p>
                  <p>Você pode ver como funciona ao testar o código abaixo:</p>
 <pre id="pre-link">
  <code id="code-link">
       <span id="tag-html">&lt;DOCTYPE! html&gt;</span>
       <span id="tag-html">&lt;html lang="en"&gt;</span>
       <span id="tag-head">&lt;head&gt;</span>
       <span id="tag-html">&lt;meta charset="UTF-8"&gt;</span>
       <span id="tag-html">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</span>
       <span id="tag-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
       <span id="tag-title">&lt;title&gt;Meu link&lt;/title&gt;</span>
       <span id="tag-head">&lt;/head&gt;</span>
       <span id="tag-body">&lt;body&gt;</span>
         <span id="tag-link">&lt;a href="https://www.instagram.com/soft_t.ech/"&gt;Este é o seu link&lt;/a&gt;</span>
       <span id="tag-body">&lt;/body&gt;</span>
       <span id="tag-html">&lt;/html&gt;</span>
    </code>
  </pre>
  
            <h2>CSS</h2>
                  <p>O CSS (Cascading Style Sheets ou Folhas de Estilo em Cascata) é a uma linguagem de estilo visual, ela serve para estilizar suas tags HTML, vamos entender na prática do que se trata o CSS.</p>
              <P>Antes de começar a programar seu CSS você precisa saber como aplicar ele em sua página HTML. Dentro da tag <code id="text-tag">head</code> você deve inserir a tag que vai conectar seu arquivo CSS com seu arquivo HTML, há duas formas de fazer isso: a primeira é utilizando a tag <code id="text-tag">style</code>.</P>
              <p>Dessa forma o ele está sendo feito diretamente na página HTML, você adicionará dentro da tag <code id="text-tag">style</code> a sua formatação CSS. Esse método é chamado de CSS interno.</p>
<pre id="pre-int">
    <code id="code-int">
       <span id="tag-html">&lt;DOCTYPE! html&gt;</span>
       <span id="tag-html">&lt;html lang="en"&gt;</span>
       <span id="tag-head">&lt;head&gt;</span>
       <span id="tag-html">&lt;meta charset="UTF-8"&gt;</span>                                      
       <span id="tag-html">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</span>
       <span id="tag-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
       <span id="tag-style">&lt;style&gt;</span>
        <span id="css-back">body{
           background-color: red;
        }
        </span>
       <span id="tag-style">&lt;/style&gt;</span>
       <span id="tag-title">&lt;title&gt;Meu CSS interno&lt;/title&gt;</span>
       <span id="tag-head">&lt;/head&gt;</span>
       <span id="tag-body">&lt;body&gt;</span>
       <span id="tag-body">&lt;/body&gt;</span>
       <span id="tag-html">&lt;/html&gt;</span>
    </code>
</pre>
              <p>Acredito que você tenha executado o código anterior e visto sua página da cor vermelha certo? Mas se você está aqui para descobrir de que maneira fazemos para adicionar o CSS de forma externa na página verá a seguir.</p>
              <p>Você precisa ter dois arquivos de texto, um <code id="text=tag">index.html</code> e um <code id="text-tag">style.css</code>, o CSS é chamado por meio de linkagem, mas a tag é diferente da que vimos anteriormente para colocar um link na página html, para chamar o CSS você vai utilizar dentro do <code id="text-tag">head</code> a tag <code id="text-tag">link rel="stylesheet" type="text/css" href="style.css"</code>, certifique-se de colocar o nome do seu arquivo CSS corretamente entre as aspas do <code id="text-tag">href</code>.</p>
  <pre id="pre-ext">                                   
     <code id="code-ext">
        <span id="tag-html">&lt;DOCTYPE! html&gt;</span>
        <span id="tag-html">&lt;html lang="en"&gt;</span>
        <span id="tag-head">&lt;head&gt;</span>                                                                                             
        <span id="tag-html">&lt;meta charset="UTF-8"&gt;</span>
        <span id="tag-html">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</span>
        <span id="tag-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
        <span id="tag-css">&lt;link rel="stylesheet" type="text/css" href="style.css"&gt;</span>
        <span id="tag-title">&lt;title&gt;Meu CSS externo&lt;/title&gt;</span>
        <span id="tag-head">&lt;/head&gt;</span>
        <span id="tag-body">&lt;body&gt;</span>
        <span id="tag-form">&lt;p&gt;Esse é seu CSS externo&lt;p&gt;</span>
        <span id="tag-body">&lt;/body&gt;</span>
        <span id="tag-html">&lt;/html&gt;</span>
    </code>
</pre>
                                                    
              <p>Depois é só programar dentro do seu arquivo <code id="text-tag">style.css</code>, lá você vai organizar seus arquivos dessa forma:</p>
    <pre id="pre-ext">
        <code id="code-ext">
        <span id="css-style">body {
            background-color: black;
        }
            </span>
        <span id="css-style">p {
            color: white;
        }
        </span>
        </code>
    </pre>
              <h2>JAVASCRIPT</h2>
                 <p>O Javascript é uma linguagem de programação de alto nível que serve para criar interações e animações em páginas e aplicativos Web, essa linguagem é utilizada em  jogos, aplicativos empresariais, aplicativos de comércio eletrônico e muitos outros. Aqui irei mostrar apenas uma função para você compreender do que se trata o Javascript.</p>
                 <p>Podemos utilizar o Javascript da mesma forma que o CSS, você deve criar um arquivo <code id="text-tag">main.js</code> para estabelecer conexão entre ele e o html, podemos criar um arquivo externo ou utilizar a tag <code id="text-tag">script</code> dentro do <code id="text-tag">head</code>, agindo de forma mais profissional vamos usar a linkagem externa.</p>
    <pre id="pre-js">
        <code id="code-js">
        <span id="tag-html">&lt;!DOCTYPE html&gt;</span>
        <span id="tag-html">&lt;html&gt;</span>
        <span id="tag-head">&lt;head&gt;</span>
        <span id="tag-title">&lt;title&gt;Alert em Javascript&lt;/title&gt;</span>
        <span id="tag-head">&lt;/head&gt;</span>
        <span id="tag-body">&lt;body&gt;</span>
        <span id="tag-form">&lt;input type="button" onclick="funcao1()" value="Exibir Alert"/&gt;</span>
        <span id="tag-form">&lt;script src="main.js"&gt;&lt;/script&gt;</span>
        <span id="tag-body">&lt;/body&gt;</span>
        <span id="tag-html">&lt;/html&gt;</span>
        </code>
    </pre>
                 <p>Você pode ver que temos o a linkagemm para chamar o Javascript na página se dá pela tag <code id="text-tag">script src=" "</code> entre as aspas você adiciona o nome do seu arquivo js, neste código criamos um botão para receber a função do Javascript e exibir um Alert na sua tela.</p>
                 <p>Veja a seguir como nós estruturamos o Javascript dentro do nosso arquivo <code id="text-tag">main.js</code>:</p>
    <pre id="pre-js">
        <code id="code-js">
        <span id="tag-js">function funcao1()
        <span id="abre-js">{</span>
        alert(<span id="text-js">"Eu sou um alert!"</span>); 
        <span id="abre-js">}</span>
        </span>   
        </code>
    </pre>
                 <h2>MySQL (Banco de Dados)</h2>
                 <p>Por trás de páginas bem estilizadas há um back-end em funcionamento, sites ou sistemas privados que contém um Banco de Dados armazenando todos as informações registradas. Todo desenvolvimento que precisa guardar dados precisa de um Banco para guardar informações.</p>
                 <p>MySQL é a linguagem de programação para o gerenciamento de um Banco de Dados relacional de código aberto, isso significa que permite a criação, manipulação e consulta de Banco de Dados, desenvolvido pela Oracle Corporation e amplamente utlizado  em aplicativos web, como blogs, fóruns, lojas virtuais e outras aplicações que exigem armazenamento e recuperação de dados.</p>
                 <p>Ele é muito famoso por ser rápido e fácil de ser utilizado, se adequa facilmente a algumas linguagens de programação e pode ser modificado de acordo com suas necessidades.</p>
                 <p>O <a href="https://sqliteonline.com/">SQL online IDE</a> é um site que oferece uma plataforma para execução de consultas SQL diretamente do navegador, sem precisar instalar nenhuma ferramenta no dispositivo, é possivelmente uma ferramenta que você estudante pode vir a utilizar enquanto estiver estudando Banco de Dados. A seguir tem um guia de como você vai configurar sua plataforma para praticar seu SQL.</p>
                 <img src="sql.jpg">
                 <p>Como guardaremos as informações no Banco? Se você já estudou os modelos relacionais e lógicos sabe que temos que criar uma tabela para adicionar as informações, veja como criamos uma tabela no SQL</p>
    <pre id="sql-tabel">
        <code id="sql-tabel">
        <span id="sql-fun">CREATE TABLE</span><span id="sql-info"> alunos </span><span id="sql-sinal">(</span>
        <span id="sql-fun">ID</span><span id="sql-info"> INTEGER</span><span id="sql-fun"> PRIMARY KEY,</span>
        <span id="sql-info">nome</span><span id="sql-info"> TEXT</span><span id="sql-fun"> NOT NULL,</span>
        <span id="sql-info">idade</span><span id="sql-info"> INTEGER</span><span id="sql-fun"> NOT NULL,</span>
        <span id="sql-info">email</span><span id="sql-info"> TEXT</span><span id="sql-fun"> NOT NULL UNIQUE</span>
        <span id="sql-sinal">)</span><span id="sql-info">;</span>


        </code>
    </pre>            
    <script src="js/main.js"></script>
</body>
</html>