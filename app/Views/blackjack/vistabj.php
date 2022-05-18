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
        <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
        <img src="<?php echo base_url(); ?>/assets/images/2-C.png" alt="">
    </div>
    <div class="players">
        <div class="container-player">
            <div class="player">
                <div class="container-cartas">
                    <img src="<?php echo base_url(); ?>/assets/images/5-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/5-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                </div>
                <div class="apuesta">
                    <input type="text" placeholder="Apuesta:">
                    <input type="button" value="Apostar">
                </div>
                <div class="buttons">
                    <input type="button" value="Pedir Carta">
                    <input type="button" value="Plantarse">
                    <input type="button" value="Doblar">
                </div>
            </div>
            <h4>Jugador 2: Chasi</h4>
        </div>
        <div class="container-player">
            <div class="player">
                <div class="container-cartas">
                    <img src="<?php echo base_url(); ?>/assets/images/5-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/5-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                </div>
                <div class="apuesta">
                    <input type="text" placeholder="Apuesta:">
                    <input type="button" value="Apostar">
                </div>
                <div class="buttons">
                    <input type="button" value="Pedir Carta">
                    <input type="button" value="Plantarse">
                    <input type="button" value="Doblar">
                </div>
            </div>
            <h4>Jugador 2: Chasi</h4>
        </div>
        <div class="container-player">
            <div class="player">
                <div class="container-cartas">
                    <img src="<?php echo base_url(); ?>/assets/images/5-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/5-H.png" alt="">
                    <img src="<?php echo base_url(); ?>/assets/images/2-H.png" alt="">
                </div>
                <div class="apuesta">
                    <input type="text" placeholder="Apuesta:">
                    <input type="button" value="Apostar">
                </div>
                <div class="buttons">
                    <input type="button" value="Pedir Carta">
                    <input type="button" value="Plantarse">
                    <input type="button" value="Doblar">
                </div>
            </div>
            <h4>Jugador 2: Chasi</h4>
        </div>
    </div>
</body>
</html>