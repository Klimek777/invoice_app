<?php 
    $_SESSION['open']='products';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_m.css">
</head>

<body>
<?php include 'navigation.php'?>
    <div class="page">
        <div class="say-hi">
            <div class="history_header">
        <text> Produkty </text>
   
        <div class="time_button">
                <text>
                    Dodaj
                </text>
                <i class="material-symbols-outlined">arrow_drop_down</i>

            </div>

        </div>

        </div>

        <div class="products_row">
            <div class="company_icon">
            <i class="material-symbols-outlined">inventory_2</i>
            </div>
            <text class="product_name"> Jakiś produkt 1</text>
            <text class="prod_description">Opis produktu</text>
            <text class="product_name"> $ 2,700</text>
            <div class="menage_buttons">
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

        <div class="products_row">
            <div class="company_icon">
            <i class="material-symbols-outlined">inventory_2</i>
            </div>
            <text class="product_name"> Jakiś produkt 2</text>
            <text class="prod_description">Opis produktu</text>
            <text class="product_name"> $ 2,700</text>
            <div class="menage_buttons">
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

        <div class="products_row">
            <div class="company_icon">
            <i class="material-symbols-outlined">inventory_2</i>
            </div>
            <text class="product_name"> Jakiś produkt 3</text>
            <text class="prod_description">Opis produktu</text>
            <text class="product_name"> $ 2,700</text>
            <div class="menage_buttons">
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