<?php 

if($_GET['lang'] == "fr"){
    $lang = $fr;
} elseif($_GET['lang'] == "en"){
    $lang = $en;
} else {
    $lang = $fr;
}

?>

<div id="navbar">
    <div id="nav-logo">
        <img src="../public/img/logo.png" alt="" class="d-block mx-auto">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="height: 100px">
        <a class="navbar-brand position-absolute" href="#" id="brand-logo">
            <img src="../public/img/logo.png" alt="" width="300px">
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-item nav-link active" href="#"><?= $lang['home']?></a>
                <a class="nav-item nav-link" href="#services">Services</a>
                <a class="nav-item nav-link" href="#about"><?= $lang['about']?></a>
                <!--<a class="nav-item nav-link" href="#">Accomplishments</a>-->
                <a class="nav-item nav-link" href="#contact">Contact</a>
                <a class="nav-item nav-link" href="/?lang=fr">
                    <button type="submit" style="width:30px; padding: 0">
                        <img src="../public/img/fr-flag.png" alt="" width="100%">
                    </button>
                </a>
                <a class="nav-item nav-link" href="/?lang=en">
                    <button type="submit" style="width:30px; padding: 0">
                        <img src="../public/img/gb-flag.png" alt="" width="100%">
                    </button>
                </a>
            </div>
        </div>
    </nav>
</div>
