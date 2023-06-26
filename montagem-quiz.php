<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz Montagem e Manutenção</title>
    <link rel="icon" type="image/jpg" href="img/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="master/montagem-quiz.css" />
</head>

<body>
    <div class="start-screen">
        <button id="start-button">Iniciar</button>
    </div>
    <div id="display-container">
        <div class="header">
            <div class="number-of-count">
                <span class="number-of-question">1 de 5</span>
            </div>
            <div class="timer-div">
                <!--<img src="" /> FOTO PARA COLOCAR (LOGO)-->
                <span class="time-left">10s</span>
            </div>
        </div>
        <div id="container">
            
        </div>
        <button id="next-button">Proximo</button>
    </div>
    <div class="score-container hide">
        <div id="user-score">Resultado</div>
        <button id="restart">Reiniciar</button>
    </div>
    
    <script src="js/montagem-quiz.js"></script>
</body>

</html>