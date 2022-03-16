<?php

// provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L’e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.


    require_once __DIR__ . '/Prodotti.php';
    require_once __DIR__ . '/Giochi.php';
    require_once __DIR__ . '/Cibo.php';
    require_once __DIR__ . '/Carta.php';
    require_once __DIR__ . '/Utente.php';
    require_once __DIR__ . '/UtenteRegistrato.php';
    require_once __DIR__ . '/CartaCredito.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- idea stampa componenti creati -->

    <div class="container">
        <h1>Questo è il carrello personale di 
            <?php foreach($primoUtente as $item) {
                echo $item;
            };  
            ?>
        </h1>

        <h3 class="articolo"><i class="fa-solid fa-cart-shopping"></i> Prodotto:</h3>
        <p>
            <?php
                foreach($primoProdotto as $item) {
                    echo $item . '<br>';
                }
            ?>
        </p>

        <h3 class="articolo"><i class="fa-solid fa-cart-shopping"></i> Gioco:</h3>
        <p>
            <?php
                foreach($primoGioco as $item) {
                    echo $item . '<br>';
                }
            ?>
        </p>

        <h3 class="articolo"><i class="fa-solid fa-cart-shopping"></i> Alimento: </h3>
        <p>
            <?php
                foreach($PrimoCibo as $item) {
                    echo $item . '<br>';
                }
            ?>
        </p>

        <button>Continua lo shopping</button>

        <hr>

        <h3 class="user">Dati sensibili utente registrato: </h3>
        <p>
            <?php
                foreach($UtenteRegistrato as $item) {
                    echo $item . '<br>';
                }

                foreach($CartaCredito as $item) {
                    echo $item . '<br>';
                }
            ?>
        </p>

    </div>

</body>
</html>