<!DOCTYPE html>
<html>
    <head>
        <title>Berhasil Login</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <img src="magic.png"> 
</header>
    
<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location: index.php?pesan=gagal");
    } 
    ?>

    <div class="ket">
    <h1>Hello <b><?php echo $_SESSION['username']; ?> </b> Anda berhasil login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h1>
    </div>
    <br/>
    <br/>
    <div class="pl">
    <a href="poison.html">Go to Magic Shop</a>
     </div> 
     <div class="spofile">
     <a href="https://open.spotify.com/user/6a2fexpazpygs4tds9tzgjjst?si=e9a3eb80ba424301">My Spofile</a>
     </div>
     <div class="newpl">
        <a href="https://open.spotify.com/playlist/1Oc991XNRuyzTLBm3TP4Tc">Wanna Make a new Poison?</a>
     </div>
</body>
    </html>