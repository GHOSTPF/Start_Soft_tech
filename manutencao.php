<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link rel="stylesheet" href="master/icomoon.css">
    <link rel="icon" type="image/jpg" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="master/manun.css" media="screen" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montagem e Manuntenção</title>
</head>

<body>
    <header class="primary-header">
        <nav class="navbar">
            <div class="container-xl">
                <a href="index.php" class="logo">SST</a>
                <ul class="nav-list">
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
            </div>
        </nav>
    </header>
    <section class="hero">


    </section>
    <div class="page">
        <div class="container">
            <h1 class="title" style="--duration: 1s">
                <span style="--delay: 0.5s">Montagem &</span>
                <span style="--delay: 0.8s">Manuntenção</span>
            </h1>
            <p>A montagem e a manutenção de um computador é um processo relativamente simples, mas que requer alguns
                cuidados para que o equipamento funcione corretamente. Neste site, você aprenderá os conceitos básicos
                de montagem e manutenção de computadores.</p>
            <div class="lista1">
                <ul>
                    <p>Vamos aborda alguns topicos a seguir:</p>
                    <li>
                        <a href="#Alimentação de um computador">Fonte de alimentação</a>
                    </li>
                    <li>
                        <a href="#Conversão de tensões">Conversão de tensões</a>
                    </li>
                    <ul>- Como funciona a conversão de tensão?</ul>
                    <ul>- Mas e o problema do tamanho do transformador?</ul>
                    <li>
                        <a href="#Potência necessária para um computador">Potência necessária para um computador</a>
                    </li>
                    <li>
                        <a href="#requisitos para montagem de um computador">Requisitos para montagem de um
                            computador</a>
                    </li>
                </ul>
            </div>
            <h2 id="Alimentação de um computador">Fonte de alimentação</h2>
            <p>A fonte de alimentação de um computador é um componente essencial para o funcionamento do equipamento. A
                fonte de alimentação converte a energia elétrica da tomada em energia elétrica de baixa tensão para
                alimentar os componentes do computador.</p>
            <p>Vamos conhecer como funcionam as conversões entre tensões, bem como as características das fontes AT e
                ATX.</p>
            <center>
                <img src="https://maxwellamaral.github.io/assets/images/gpt/psu_sample1.jpg" class="imgfonte"
                    width="600px" height="500px">
            </center>
            <h3>Padrões de fontes de alimentação</h3>
            <h3>Fonte AT</h3>
            <p>O padrão AT (Advanced Technology) foi desenvolvido nos anos 80 pela IBM e foi utilizada até meados dos
                anos 90. Possuía dois conectores de 6 pinos cada. Essa fonte não possibilitava que o computador operasse
                em modo de baixa potência, ou standby. Ou ele ficava totalmente ligado ou totalmente desligado. Não
                permitia o desligamento automático do computador, como é possível fazer hoje em dia.</p>
            <p>Naquela época, era necessário solicitar ao sistema operacional o “estacionamento” das cabeças de leitura
                e escrita dos discos rígidos, o que era feito através de um comando específico. Caso o usuário não
                executasse esse comando, as cabeças de leitura e escrita dos discos rígidos ficariam em movimento, o que
                poderia danificar o disco rígido. Após isto, o computador era desligado.</p>
            <p>Com o tempo, os sistemas operacionais realizam este procedimento ao selecionar a opção “desligar” ou
                “power off” no menu de opções do sistema operacional. Ao final, o sistema operacional exibia uma
                mensagem informando que era possível desligar o computador com segurança. Só depois disto, você poderia
                apertar o interruptor de desligamento do computador que ficava na parte frontal do gabinete.</p>
            <h3>Fonte ATX</h3>
            <p>O padrão ATX (Advanced Technology Extended) foi desenvolvido nos anos 90 pela Intel e foi utilizada até
                meados dos anos 2000, sucedendo o padrão AT. Possuía dois conectores de 20 pinos cada. Essa fonte
                possibilitava que o computador operasse em modo de baixa potência, ou standby.</p>
            <p>Possui um interruptor de desligamento automático do computador, que é conectado diretamente à placa-mãe,
                enviando um sinal de pedido de desligamento para o sistema operacional. O sistema operacional, por sua
                vez, solicita o fechamento dos aplicativos e arquivos abertos, bem como solicita ao sistema de arquivos
                que estacione as cabeças de leitura e escrita dos discos rígidos, “desligando” a fonte e o computador.
                Todavia, a fonte não é desligada totalmente, pois o computador ainda está em modo de baixa potência, ou
                standby, aguardando o pedido de ligamento do usuário.</p>
            <p>Para desligar totalmente esta fonte, é necessário apertar o interruptor de desligamento que fica na parte
                traseira do gabinete ou retirando o cabo de alimentação da tomada.
            </p>

            <h2 id="Conversão de tensões">Conversão de Tensões</h2>


            <p>Uma rede elétrica pode oferecer uma tensão alternada de 110V ou 220V, dependendo do país.</p>
            <p>Os componentes eletrônicos de um computador funcionam com uma tensão de 5V, 12V ou 3.3V. Essas tensões
                são contínuas e mais baixas.</p>
            <center>
                <img src="https://www.proaxia.com.br/wp-content/uploads/2022/03/imagem-fonte.png">
            </center>
            <h3>Como funciona a conversão de tensão?</h3>


            <p>Conforme podemos ver na figura abaixo, vamos explicar o passo a passo sobre como se dá essa conversão:
            </p>
            <div class="topicos">
                <li class="ponto_1">Na entrada, a corrente elétrica vem da rua com uma tensão alternada de 220V. Ela
                    alterna entre 220V positivo e 220V negativo;</li>

                <li class="ponto_1">Um transformador reduz a tensão para 12V, contudo, a corrente elétrica continua
                    alternada, entre 12V positivo e 12V negativo. Outro problema é que, quanto mais corrente elétrica
                    passa pelo transformador, maior deverá ser este transformador;</li>

                <li class="ponto_1">Um outro circuito, chamado de circuito retificador, converte a corrente alternada em
                    corrente contínua pulsante positiva, isto é, a tensão pulsa entre 0V e 12V positivo. O circuito
                    retificador é composto por diodos, que são semicondutores que conduzem corrente elétrica em apenas
                    uma direção;</li>

                <li class="ponto_1">Depois um filtro transforma essa pulsação em tensão contínua de 12V. O filtro é
                    formado por capacitores. Um problema é as oscilações que ocorrem na tensão contínua, que podem
                    causar problemas nos componentes eletrônicos. Para resolver esse problema, o filtro é formado por
                    vários capacitores em paralelo, que reduzem as oscilações, mas não totalmente.</li>

                <li class="ponto_1">Por último, um regulador remove a oscilação restante fazendo com que a tensão seja
                    constante e contínua. O regulador pode ser um circuito integrado ou um diodo zener.</li>
            </div>
            <h3>Mas e o problema do tamanho do transformador?</h3>
            <p>Imagina como seriam as fontes de alimentação para placas de vídeo e jogos que dependem de correntes mais
                altas? O transformador seria grande e pesado. Para resolver este problema, foi adicionado antes do
                transformador um chaveador que converte a frequência da corrente elétrica de 60Hz para 20.000Hz. Assim,
                a corrente elétrica passa por um transformador menor, que é mais leve e mais barato.</p>
            <p>significa que ela possui um circuito integrado usado para que ela regule a tensão de saída de forma a
                atender as demandas de todo o sistema. As fontes chaveadas são uma opção importante quando você precisa
                de uma geração eficiente da tensão de alimentação
            </p>
            <center>
                <img class="img3"
                    src="https://s2.glbimg.com/mx31XGwYIutMUhqkkJk5sAl2KtE=/0x0:695x453/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/M/g/2gs2zxRe6A2OOA1Ff6Xw/2015-02-09-entenda-como-funciona-uma-fonte-chaveada-e-confira-as-mais-populares2.jpg"
                    width="600px" height="500px">
            </center>


            <h2 id="Potência necessária para um computador">Potência necessária para um computador</h2>
            <p>Agora que você já sabe como calcular as potências de componentes de um computador, vamos entender como
                calcular a potência necessária para uma fonte de alimentação. A potência necessária para um computador é
                dada pela soma das potências de todos os componentes do computador.</p>
            <p>Exemplo: imagine um computador com as seguintes características.</p>
            <img class="imgficha" src="img/tensao.jpg">
            <p>A potência necessária para esse computador é de 758,2W. Logo, a fonte de alimentação deve ter uma
                potência superior a 758,2W. Eu indicaria a compra de uma fonte de alimentação com uma potência de, no
                mínimo, 800W, sendo recomendado 1000W.</p>
            <p>Por que recomenda-se uma fonte de alimentação com uma potência de 1000W?</p>
            <p>Porque a potência de uma fonte de alimentação é medida em picos. Ou seja, a fonte de alimentação pode
                fornecer 1000W por um curto período de tempo, mas não por um longo período de tempo. Por isso, é
                recomendado que a fonte de alimentação tenha uma potência superior a potência necessária para o
                computador. Outro motivo é possibilitar que você possa fazer upgrades no computador no futuro. Por
                exemplo, você pode adicionar uma placa de vídeo ou um processador mais potente.</p>


            <h2 id="requisitos para montagem de um computador">Requisitos para montagem de um computador</h2>

            <p>Listamos abaixo as peças que irá precisar, damos uma breve explicação sobre a sua função</p>
            <li>Placa-mãe</li>
            <img class="img-requisitos"
                src="https://s2.glbimg.com/pP1S_uaiWRwG8OU0UKQdVbDTZuw=/0x0:620x499/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/h/Y/NMCKTvRhmUc5B4ZTxKOg/2012-04-13-o-que-e-placa-mae.jpg"
                width="155px" height="150px">
            <p>Trata-se da parte do computador onde você irá ligar todos os componentes, ou seja, processador, memória
                RAM, placa de vídeo, o armazenamento, entre outros.</p>
            <li>Processador</li>
            <img class="img-requisitos"
                src="https://images-americanas.b2w.io/produtos/4126284619/imagens/processador-intel-core-i3-2130-3-40ghz-1155-oem-2-geracao-p-pc-sr05w-cm8062301043904/4126284627_1_large.jpg"
                width="155px" height="150px">
            <p>O processador é a parte mais importante do processamento de dados do seu computador. É a unidade central
                de processamento ou CPU. Também conhecido como o cérebro do PC</p>
            <li>Memória RAM</li>
            <img class="img-requisitos"
                src="https://dw0jruhdg6fis.cloudfront.net/producao/28518265/G/memoria_ddr4_desk.jpg" width="155px"
                height="150px">
            <p>É um tipo de tecnologia que permite acessar os arquivos armazenados no pc. Funcionando como um
                armazenamento de dados permitindo arquivos serem escritos e lidos a curto prazo.</p>
            <li>Armazenamento (HD / SSD)</li>
            <img class="img-requisitos"
                src="https://programadoresbrasil.com.br/wp-content/uploads/2020/09/HDD-e-SSD.jpg" width="155px"
                height="150px">
            <p>O sistema de armazenamento atualmente se divide em HD e SSD. O HD é o convencional disco rígido,
                possuindo mais espaço para armazenamento sem ter um custo absurdo. Enquanto o SSD é um disco sólido,
                também para armazenar dados, só que mais rápido e por isso mais caro de acordo com GB de armazenamento.
            </p>
            <li>Fonte</li>
            <img class="img-requisitos"
                src="https://s2.glbimg.com/KbPAgyrE_NU5uSz4NzAw3tbii6w=/0x0:695x541/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/C/Z/PLbH4MT56YherhuwlGEg/2015-03-30-fonte-corsair-cx-750w.jpg"
                width="155px" height="150px">
            <p>A fonte do computador é o componente de energia que alimenta a máquina. </p>
            <li>Placa de Vídeo</li>
            <img class="img-requisitos"
                src="https://images-americanas.b2w.io/produtos/104174897/imagens/placa-de-video-pcyes-nvidia-geforce-gtx-1050-ti-4gb-128-bits-dual-fan/104174895_1_large.jpg"
                width="155px" height="150px">
            <p>É um dos componentes que mais impactará no desempenho dos seus jogos. Placa de vídeo ou Placa gráfica é
                responsável por gerar e renderizar gráficos em 2D e também em 3D.</p>
            <li>Gabinete</li>
            <img class="img-requisitos"
                src="https://images.tcdn.com.br/img/img_prod/740836/gabinete_gamer_pcfort_endless_rgb_com_3_fans_rgb_preto_13455_1_f9db432996b8ca1965fba62f6383c984.jpg"
                width="155px" height="150px">
            <p>O mais simples de todos. Tem como função proteger os componentes de sujeira e umidade</p>
            <li>Acessórios: mouse e teclado</li>
            <img class="img-requisitos"
                src="https://a-static.mlcdn.com.br/800x560/kit-mouse-teclado-gamer-led-semi-mecanico-jogos-pc-cor-preto-as-emporio/asemporio/14687180358/73241dff9e3437947a75f82d739190d1.jpg"
                width="155px" height="150px">
            <p>Após ver todas as partes importantes, chegamos na parte mais simples. Há muitas opções de teclado e
                mouse.</p>

            <p>Alguns itens para você ter em mãos antes de começar:</p>
            <li>chaves de fenda 3/16 e 1/8 </li>
            <li>chave philips número 1 e 2</li>
            <li>chave de teste</li>
            <li>Multímetro</li>
            <li>luvas</li>

            <h3>Parte 1 - preparar a placa-mãe</h3>
            <p>-Coloque o processador na placa-mãe.</p>
            <p>Esse é o procedimento mais sensível de toda a montagem, já que pinos presentes na placa-mãe ou no
                processador são frágeis e podem ser entortados e demandando manutenção para voltar a funcionar. É só
                encaixar o processador no soquete que as conexões passam a esta seguras, tanto para modelos AMD quanto
                Intel.</p>
            <p>-Encaixe o sistema de resfriamento.</p>
            <p>Cada solução de resfriamento do processador terá um procedimento próprio, então verifique o manual de seu
                produto. Caso seu cooler seja de grande porte, pode ser que ele bloqueie o acesso aos slots de memória,
                e nesse caso encaixe primeiro as memórias RAM.</p>
            <p>-Ligando as memórias RAM</p>
            <p>Memorias modernas são assimétricas e só encaixam do jeito certo, então "não tem erro". Busque usar ambos
                os canais de conexão com a CPU. Verifique indicações na própria placa ou no seu manual de qual a forma
                mais otimizada de encaixar as memórias.</p>
            <p>-Conectar o ssd/hd</p>
            <p>SSDs são muito convenientes por serem compactos e não precisarem de cabos, mas é bom lembrar de ligá-los
                agora antes de por a placa mãe pra dentro do gabinete. Em alguns casos, o slot para o SSD pode ficar
                obstruído por outros componentes como a placa de vídeo ou até mesmo ficar na parte de trás da sua
                placa-mãe.</p>

            <h3>Parte 2 - preparar o gabinete</h3>
            <p>-Remova as tampas</p>
            <p>Para facilitar essa etapa, abra todas as tampas do gabinete, o que inclui as duas das laterais e uma
                frontal, em muitos dos casos. </p>
            <p>-Colocando a fonte</p>
            <p>A fonte deve ser posicionada com a sua fan desobstruída, seja com ela virada para uma abertura no
                gabinete, seja para dentro do próprio gabinete.</p>
            <p>-Passando os cabos</p>
            <p>Agora você deve passar os cabos que vai usar em sua máquina. Olhe o posicionamento das conexões de sua
                placa mãe para ter referência de onde cada cabo deve ir, sendo que bons gabinetes trazem muitas
                oportunidades de mover os cabos pela parte de trás</p>
            <p>Após tudo preparado, é hora de colocar os componentes para dentro do gabinete</p>

            <h3>Parte 3 - colocando os componentes no gabinete</h3>
            <p>-Coloque a placa-mãe</p>
            <p>verifique se há um parafuso espaçador sextavado para cada buraco da placa-mãe e se o espelho já está no
                gabinete, coloque a placa-mãe para dentro do gabinete e parafuse todas as posições.</p>
            <p>-Conecte os cabos </p>
            <p>Se você planejou tudo certinho, já devem estar todos em seu devido lugar. Se errou alguma coisa ou
                esqueceu de algo, ainda é fácil reposicionar alguns cabos.</p>
            <p>-Conecte a placa de vídeo</p>
            <p>Os gabinetes possuem peças metálicas bloqueando a saída na traseira. Retire as necessárias para liberar
                as conexões de sua placa de vídeo. Aí é só encaixar a placa de vídeo no slot e fixar ela com um parafuso
                no gabinete</p>

            <h3>Parte 4 - finalização</h3>
            <p>- Fixar os cabos</p>
            <p>Agora em teoria tudo já está ligado, então é hora de dar acabamento. Usando as abraçadeiras de nylon e os
                organizadores de velcro agora você pode fixar em definitivo os cabos em posições que eles fiquem mais
                organizados na parte traseira</p>
            <p>Agora é hora de fechar as tampas frontais e laterais do gabinete</p>

            <a href="https://maxwellamaral.github.io" class="link onda">
                <span>github Prof. Maxwell </span>
                <svg class="link_grafico link_grafico_slide" width="300%" height="100%" viewBox="0 0 1200 60"
                    preserveAspectRatio="none">
                    <path
                        d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                    </path>
                </svg>
            </a>
            <br>
            <br>
            <script src="js/main.js"></script>
</body>

</html>