<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    
</head>
<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter">
    Información
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Información</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Reglas y Monedas</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam eaque nulla veniam, nostrum sed voluptas itaque ducimus quia perferendis labore ad iste cumque quo voluptatibus ipsa quasi eveniet hic assumenda praesentium error repellat recusandae dolorum enim ut? Tempore, quasi cum ipsum eum beatae commodi ut expedita totam nostrum itaque odit?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
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
                    <input type="button" value="Pedir ">
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
                    <input type="button" value="Pedir">
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
                    <input type="button" value="Pedir">
                    <input type="button" value="Plantarse">
                    <input type="button" value="Doblar">
                </div>
            </div>
            <h4>Jugador 2: Chasi</h4>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>