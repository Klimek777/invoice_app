<?php 
    $_SESSION['open']='invoices';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'navigation.php'?>
    <div class="page" id="new_invoice_page" style="margin-right: 20px; min-width: 640px;">
        <h1>Nowa faktura</h1>
        <div class="new_invoice"> 
            <header class="new_invoice_header">Wybierz typ faktury:</header>
            <div class="new_invoice_main">
            <div class="product_field">
                            <div class="invoice_type" style="flex: 1;">
                                <button class="product_input">
                                <i class="fa fa-check"></i>
                                    Opłacona
                                </button>
                            </div>
                            <hr>
                            <div class="invoice_type" style="flex: 1;">
                                <button class="product_input">
                                    <i class="fa fa-calendar"></i>
                                    Płatność od...
                                </button>
                            </div>
                            <hr>
                            <div class="invoice_type" style="flex: 1;">
                                <button class="product_input">
                                    <i class="fa fa-calendar"></i>
                                    Płatność do...
                                </button>
                            </div>
                            <hr>
                </div>
            </div>
        </div>
        <div id="new_invoice_row">
            <div style="flex: 4;" class="new_invoice"> 
                <header class="new_invoice_header">Informacje o zamawiającym</header>
                <div class="new_invoice_main">
                    <div class="invoice_form_row">
                        <div class="invoice_form_column_in_row" style="flex:1;">
                            <form action="">
                                <label class="input_text_label" for="fullname">Imię i nazwisko (nazwa)</label><br/>
                                <input class="input_text" id="fullname" type="text" placeholder="Podaj nazwę firmy..."/><br/>
                                <label class="input_text_label" for="address1">Adres</label><br/>
                                <input class="input_text" id="address1" type="text" placeholder="Adres..."/><br/>
                                <label class="input_text_label" for="email">E-mail</label><br/>
                                <input class="input_text" id="email" type="text" placeholder="Adres e-mail..."/>
                            </form>
                        </div>
                        <div style="min-width:5%;"></div>
                        <div class="invoice_form_column_in_row" style="flex:1;">
                            <form action="">
                                <label class="input_text_label" for="nip">NIP</label><br/>
                                <input class="input_text" id="nip" type="text" placeholder="NIP..."/><br/>
                                <label class="input_text_label" for="address2">Adres - cd. </label><br/>
                                <input class="input_text" id="address2" type="text" placeholder="Adres (cd.)..."/><br/>
                                <label class="input_text_label" for="phone">Nr telefonu</label><br/>
                                <input class="input_text" id="phone" type="text" placeholder="Numer telefonu..."/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div style="flex: 4;" class="new_invoice"> 
                <header class="new_invoice_header">Adres dostawy</header>
                <div class="new_invoice_main">
                <div class="invoice_form_row">
                        <div class="invoice_form_column_in_row" style="flex:1;">
                            <form action="">
                                <label class="input_text_label" for="fullname">Imię i nazwisko (nazwa)</label><br/>
                                <input class="input_text" id="fullname" type="text" placeholder="Nazwa adresata..."/><br/>
                                <label class="input_text_label" for="street">Ulica</label><br/>
                                <input class="input_text" id="street" type="text" placeholder="Numer NIP..."/><br/>
                                <label class="input_text_label" for="town">Miasto</label><br/>
                                <input class="input_text" id="town" type="text" placeholder="Miasto"/>
                            </form>
                        </div>
                        <div style="min-width:5%;"></div>
                        <div class="invoice_form_column_in_row" style="flex:1;">
                            <form action="">
                                <label class="input_text_label" for="phone">Nr telefonu</label><br/>
                                <input class="input_text" id="phone" type="text" placeholder="Nr telefonu..."/><br/>
                                <label class="input_text_label" for="number">Numer domu</label><br/>
                                <input class="input_text" id="number" type="text" placeholder="Nr domu..."/><br/>
                                <label class="input_text_label" for="zip">Kod pocztowy</label><br/>
                                <input class="input_text" id="zip" type="text" placeholder="Kod pocztowy..."/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new_invoice"> 
            <header class="new_invoice_header">
            <div class="product_header">
                        <div class="product_header_input" style="flex: 10;">
                            Nazwa produktu
                        </div>
                        <hr>
                        <div class="product_header_input" style="flex: 2;">
                            Ilość
                        </div>
                        <hr>
                        <div class="product_header_input" style="flex: 3;">
                            Cena
                        </div>
                        <hr>
                        <div class="product_header_input" style="flex: 5;">
                            Rabat
                        </div>
                        <hr>
                        <div class="product_header_input" style="flex: 3;">
                            Suma
                        </div>
                    </div>
            </header>
            <form>
                <div class="new_invoice_main">
                <?php
            for($i=0; $i<5; $i+=1) { 
            echo '<div class="product_field">
                        <div class="product_field_input" style="flex: 10;">
                            <input type="text" class="product_input" placeholder="Wprowadź nazwę produktu...">
                        </div>
                        <hr>
                        <div class="product_field_input" style="flex: 2;">
                            <input type="text" class="product_input" placeholder="X szt.">
                        </div>
                        <hr>
                        <div class="product_field_input" style="flex: 3;">
                            <input type="text" class="product_input" placeholder="Cena za szt.">
                        </div>
                        <hr>
                        <div class="product_field_input" style="flex: 5;">
                            <input type="text" class="product_input" placeholder="Wartość rabatu...">
                        </div>
                        <hr>
                        <div class="product_field_input" style="flex: 3;">
                            <input type="text" class="product_input" >
                        </div>
                    </div><hr>';}
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>