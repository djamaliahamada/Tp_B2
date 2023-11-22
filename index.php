<?php session_start(); ?>
<?php include_once('Pages/View/header.php');?>
    <main class="containe-fluid">
        <div class="container-head">
            <div class="bord-bienvenu">
                <span> Bienvenue à Bord</span><br>
                <span> Location de véhicule 24h/24 7j/7</span> <br><br>
                <?php if(isset($_SESSION['membre']) ){ ?>
                <?php }else{ ?>
                    <a href="Pages/Back/inscription.php">Inscription</a>
                    <a href="Pages/Back/login.php">Connexion</a>
                <?php };?>
            </div>
        </div>
    </main>
<?php include_once('Pages/View/footer.php');?>
    