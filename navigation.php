<?php  $selected = false?>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


        <div class="side-nav">
            <a href="index.php" class="logo">
                <text class="inlogo">
                    Factur.io
                </text>
                <text class="logo-icon">F</text>

            </a>
            <div class="menu_items">
            <ul class="nav-links">
                <li <?php if($_SESSION['open']=='index') echo 'class="selected"'; ?> ><a href="index.php"><i class="material-symbols-outlined">home</i><p>Panel Główny</p></a></li>
                <li <?php if($_SESSION['open']=='history') echo 'class="selected"'; ?> ><a href="history.php"> <i class="material-symbols-outlined">history</i><p>Historia</p></a></li>
                <li <?php if($_SESSION['open']=='products') echo 'class="selected"'; ?> ><a href="products.php"> <i class="material-symbols-outlined">inventory_2</i> <p>Produkty</p></a></li>
                <li <?php if($_SESSION['open']=='clients') echo 'class="selected"'; ?> ><a href="clients.php"> <i class="material-symbols-outlined">group</i> <p>Odbiorcy</p></a></li>
                <li <?php if($_SESSION['open']=='invoices') echo 'class="selected"'; ?> ><a href="invoices.php"> <i class="material-symbols-outlined">request_page</i><p>Nowa faktura</p></a></li>
                
                <div class="active" style="top:<?php if($_SESSION['open']=='index') {
                    echo " 0%;";
                } else if($_SESSION['open']=='history') {
                    echo " 20%";
                } else if($_SESSION['open']=='products') {
                    echo " 40%";
                } else if($_SESSION['open']=='clients') {
                    echo " 60%";
                } else if($_SESSION['open']=='invoices') {
                    echo " 80%";
                }else 
                ?>;"></div>
                
            </ul>
            </div>
            <div class="other_items">
            <ul class="nav-links">
            <li <?php if($_SESSION['open']=='settings') echo 'class="selected"'; ?>><a href="settings.php"><i class="material-symbols-outlined">settings</i><p>Ustawienia</p></a>  </li>
            <li <?php if($_SESSION['open']=='logout') echo 'class="selected"'; ?>><a href="settings.php"><i class="material-symbols-outlined">logout</i><p>Wyloguj</p></a>  </li>    
        </ul>
            </div>
        </div>
        


