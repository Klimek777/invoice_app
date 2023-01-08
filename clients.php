<?php 
    $_SESSION['open']='clients';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_matk.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
<body>
    <h1>CLIENTS</h1>
    <?php include 'navigation.php'?>
    <div class="page" >
        <div class="top_row" >
            <div class="customers_header">
                <text> Odbiorcy </text>
                <div class="top_button_plus" style="">
                    <i class="material-symbols-outlined">add</i>
                </div> 
                <div class="top_button" style="margin-left: 35%">
                    <text> Imie </text>
                    <i class="material-symbols-outlined">arrow_drop_down</i>
                </div>
                <div class="top_button" style="margin-left: -10%">
                    <text> Sortuj </text>
                    <i class="material-symbols-outlined">arrow_drop_down</i>
                </div>
        </div>

    </div>
        <div class="customers_row">
            <div class="customer_icon">
                <i class="material-symbols-outlined">person</i>
            </div>
            <text class="customer_name"> Wiertarex SA </text>
            <text class="customer_mail"> example@gmail.com </text>
            <text class="customer_phone"> +48 000 000 000</text>
            
            <div class="placing_buttons">
                <div class="info_icon">
                    <i class="material-symbols-outlined">info</i>
                </div>
                <div class="edit_icon">
                    <i class="material-symbols-outlined">edit</i>
                </div>
                <div class="delete_icon">
                    <i class="material-symbols-outlined">delete</i>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>