<?php
    $_SESSION['open']='index';
    $thisPage = "Dashboard"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>
<body>
    <?php include "navigation.php" ?>
  <div class="page">
        <div class="say-hi">
            <text>
                Witaj, Dawid 👋
            </text>
            <img src="https://i.pinimg.com/236x/4e/45/88/4e458893b1fdc033508016e09fa5553c.jpg" alt="avatar" class="avatar">

            <button>
                <i class="material-symbols-outlined">notifications</i>
            </button>
            
        </div>
        <div class="summary">
        
            <text> Ogólny przegląd </text>

            <div class="summary_items">
            <div class="containter">
            <i class="material-symbols-outlined">group</i>
            <text> Odbiorcy</text>
            <text class="value">12</text>
            </div>
            <div class="containter">
            <i class="material-symbols-outlined">inventory_2</i>
            <text> Produkty</text>
            <text class="value">12</text>
            </div>
            <div class="containter">
            <i class="material-symbols-outlined">request_page</i>
            <text> Faktury</text>
            <text class="value">12</text>
            </div>
            <div class="containter">
            <i class="material-symbols-outlined">attach_money</i>
            <text> Zafakturowane</text>
            <text class="value">12</text>

            </div>
            </div>

        </div>
        </div>
</body>
</html>