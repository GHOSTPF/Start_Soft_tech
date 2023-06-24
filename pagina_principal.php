<?php
require 'config.php';

if(!isset($_SESSION['usuario']))
    return header('Location: login.php') 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/81d73e8e4d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link rel="stylesheet" href="master/icomoon.css">
    <link rel="icon" type="image/jpg" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="master/style2.css" media="screen" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Soft Tech</title>
</head>
<body>
    <header class="primary-header">
        <nav class="navbar">
            <div class="container-xl">
                <a href="index.php" class="logo">SST</a>
                <ul class="nav-list">
                    <li>
                        <a href="manutencao.php" class="nav-link">Montagem e Manuntenção</a>
                    </li>
                    <li>
                        <a href="ltp.php" class="nav-link">Linguagem de Programação</a>
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
                <a href="index.php" class="button">Sair</a>
            </div>
        </nav>
    </header>
    <section class="hero">
    
        
    </section>
	<!-- <aside class="sidebar-container"> 
        <div class="toggle">
            <span class="lines"></span>
            <span class="lines"></span>
            <span class="lines"></span>
        </div>
        <div class="profile-and-links">
            
            <div class="profile-card">
                <span class="title"><span>SST</span> Corporation</span>
                <span class="subtitle">Start Soft Tech</span>
            </div>
            <!-- MENU LIST 
            <ul class="links-list">
                <li class="links">
                    <a href=""><i class="fa-solid fa-house"></i>Inicio</a>
                </li>
                <li class="links">
                    <a href=""><i class="fa-solid fa-trophy"></i>Ranking</a>
                </li>
                <li class="links">
                    <a href=""><i class="fa-solid fa-list-check"></i>Desafios</a>
                </li>
                <li class="links">
                    <a href=""><i class="fa-solid fa-download"></i>PDF's</a>
                </li>
                <li class="links">
                    <a href=""><i class="fa-solid fa-person"></i>Perfil</a>
                </li>
                <li class="links">
                    <a href=""><i class="fa-solid fa-envelope"></i>Contato</a>
                </li>
            </ul>
        </div>
        <div class="social-and-signout">
            
            <div class="social-media-icons">
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
            </div>
           
            <div class="signout">
                <a href=""><i class="fa-solid fa-right-from-bracket"></i>Sair</a>
            </div>
        </div>
    </aside>-->
    <section class="container">
	<br>
    <p class="textop">A Start Soft Tech (SST) é uma plataforma desenvolvida por alunos do IFPB feita para ajudar novos alunos nas matérias técnicas do curso de informática. Pensamos em fazer esse site para suprir algumas necessidades e dúvidas que também tínhamos quando éramos alunos desinformados da informática básica, então se você precisa de uma ajudinha básica sobre algo que não entendeu muito bem, pode ser aqui o lugar certo para você.<br>
    <br>As matérias abordadas são Linguagem e Técnicas de Programação (HTML, CSS, Javascript, Python), Redes de Internet, Montagem e Manutenção de Computadores,  e Sistemas Operacionais.</p>
    
        <h1 class="title" style="--duration: 1s">
        <br><span style="--delay: 0.5s">Conheça nosso time</span>
		<span style="--delay: 0.8s">Developers & Designers</span>
        </h1>
			
		<div class="gallery-wrapper">
			<figure class="gallery-item">
				<img src="img/michael.jpeg" alt="" class="item-image" />
				<figcaption class="item-description">
					<h2 class="name">Michael</h2>
					<span class="role">Desenvolvedor</span>
				</figcaption>
			</figure>
			<figure class="gallery-item">
					<img src="img/pablo.jpeg" alt="" class="item-image" />
					<figcaption class="item-description">
					<h2 class="name">Pablo</h2>
					<span class="role">Desenvolvedor</span>
				</figcaption>
			</figure>
			<figure class="gallery-item">
					<img src="img/jhonata.jpeg" alt="" class="item-image" />
					<figcaption class="item-description">
						<h2 class="name">Jhonata</h2>
						<span class="role">Estilizador</span>
					</figcaption>
			</figure>
			<figure class="gallery-item">
				<img src="img/david.jpeg" alt="" class="item-image" />
				<figcaption class="item-description">
					<h2 class="name">David</h2>
					<span class="role">Pesquisador</span>
				</figcaption>
			</figure>
			<figure class="gallery-item">
				<img src="img/jonata.jpeg" alt="" class="item-image" />
				<figcaption class="item-description">
					<h2 class="name">Jonata</h2>
					<span class="role">Desenvoldedor</span>
				</figcaption>
			</figure>
		</div>
	</section>
    
	<div id="testimonial">
	<div class="content">
	<div class="wrapper">
        <div class="testimonial-container" id="testimonial-container"></div>
        <button id="prev">&lt;</button>
        <button id="next">&gt;</button>
      </div>
	</div>
</div>
   
    
    <footer class="footer">
	<div class="left">
		<h4 class="title-footer">Linguagens<span> Usadas</span></h4>
		<p class="links">
			
			<a href="https://developer.mozilla.org/pt-BR/docs/Web/HTML" title="Html">Html</a>
			<a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS" title="CSS">CSS </a>
			<a href="https://developer.mozilla.org/pt-BR/docs/Web/JavaScript" title="JavaScript">JavaScript</a>
			<a href="https://www.php.net" title="PHP">PHP</a>
            <a href="https://getbootstrap.com.br/docs/4.1/components/dropdowns/" title="BootStrap">BootStrap</a>
            <a href="https://www.mysql.com" title="Mysql">Mysql</a>
		</p>
		<div class="footer-icons">
			<a href="https://wa.me/5583986669294"><i class="fa fa-whatsapp"></i></a>
			<a href="https://www.instagram.com/soft_t.ech/"><i class="fa fa-instagram"></i></a>
			<a href="https://codepen.io/your-work/"><i class="fa fa-codepen"></i></a>
			<a href="https://github.com/GHOSTPF"><i class="fa fa-github"></i></a>
		</div>
                <p class="Copyright">Copyright &copy; 2023 SST - Todos os Direitos Reservados.</p>
    </div>
	<div class="right">
		<h4 class="title-footer">Feedback</h4>
		<form action="email.php" method="POST" name="form">
			<input type="text" name="nome" placeholder="Nome" required=""/>
			<input type="email" name="email" placeholder="E-mail" required=""/>
			<input type="text" name="assunto" placeholder="Dúvida" required=""/>
			<textarea name="mensagem" placeholder="Messagem" required=""></textarea>
			<button class="btn">Enviar</button>
		</form>
	</div>
</footer>

    <script src="js/main2.js"></script>
</body>
</html>