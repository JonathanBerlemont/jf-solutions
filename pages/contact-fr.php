<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JF Solutions</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/contact.css">
    <link rel="icon" href="../img/icone.png">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="../img/logo-1.png" alt=""></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse w-50" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index-fr.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services-fr.html">Nos services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about-fr.html">A propos de nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div id="langues">
                    <a href="./contact.php"><img src="../img/gb-flag.png" alt="" style="height:15px;margin-top: -28px"></a>
                    <a href=""><img src="../img/fr-flag.png" alt="" style="height:15px;margin-top: -28px"></a>
                </div>
            </div>
        </nav>
    </header>

    <section class="shadow pb-5">
        <h1><strong>Contact</strong></h1>

        <div id="forms" class="w-50 mx-auto" >
            <form method="post">
                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <input type="text" class="form-control" placeholder="First name" name="firstName" required>
                    </div>
                    <div class="col-12 col-lg-6 mt-4">
                        <input type="text" class="form-control" placeholder="Last name" name="lastName" required>
                    </div>
                    <div class="col-12 col-lg-6 mt-4">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                </div>

                <div class="form-group my-4">
                    <label for="exampleFormControlTextarea1">Votre message:</label>
                    <textarea class="form-control" id="msg" rows="3" name="message" required></textarea>
                </div>

                <input type="submit" id="submitButton" value="Submit" class="btn mb-5">
                <?php include "../src/php/sendMail.php"; ?>
            </form>

            <div id="info" class="text-center mx-auto pt-4">
                <i class="fas fa-phone"></i>
                <p>+32 477 52 69 11</p>
                <hr>
                <i class="fas fa-envelope"></i>
                <a class="d-block" href="mailto:info@jf-solutions.be">info@jf-solutions.be</a>
                <hr>
            </div>
        </div>
    </section>

    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>