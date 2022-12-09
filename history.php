<?php 
    $_SESSION['open']='history';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_d.css">


</head>
<body>

    <?php include 'navigation.php'?>
    <div class="page">
        <div class="say-hi">
            <div class="history_header">
        <text> Historia </text>
   
        <div class="time_button">
                <text>
                    Month
                </text>
                <i class="material-symbols-outlined">arrow_drop_down</i>

            </div>

        </div>

        </div>
        <div class="transactions_row">
            <div class="company_icon">
            <i class="material-symbols-outlined">attach_money</i>
            </div>
            <text class="company_name"> Dawid Corporantion SA</text>
            <text class="company_date">22 Nov 2022</text>
            <text class="company_name"> $ 2,700</text>
            <div class="status_paid">
                <text class="status">Opłacona</text>
            </div>
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