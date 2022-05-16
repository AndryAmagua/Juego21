<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
</head>
<body>
    <h1>BLACKJACK</h1>
    <div class="dealer">
        <img src="<?php echo base_url(); ?>/assets/images/BACK.png" alt="">
        <img src="<?php echo base_url(); ?>/assets/images/2-C.png" alt="">
    </div>
    <div class="players">
        <div class="player">
            <img src="<?php echo base_url(); ?>/assets/images/5-H.png" alt="">
            <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
            <div class="player-text">
                <h3>Jugador 2: Chasi</h3>
            </div>
            <div class="button">
                <input type="button" value="Pedir Carta">
                <input type="button" value="Plantarse">
            </div>
        </div>
        <div class="player">
            <img src="<?php echo base_url(); ?>/assets/images/2-C.png" alt="">
            <img src="<?php echo base_url(); ?>/assets/images/ficha100.png" alt="">
            <div class="player-text">
                <h3>Jugador 1: Andry</h3>
            </div>
            <div class="button">
                <input type="button" value="Pedir Carta">
                <input type="button" value="Plantarse">
            </div>
        </div>
        <div class="player">
            <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
            <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
            <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
            <div class="player-text">
                <h3>Jugador 3: Andres</h3>
            </div>
            <div class="button">
                <input type="button" value="Pedir Carta">
                <input type="button" value="Plantarse">
            </div>
        </div>
    </div>
</body>
</html>