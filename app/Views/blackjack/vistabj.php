<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #b5ef55;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


</head>

<body>

    <button id="myBtn">Open Modal</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
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

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>