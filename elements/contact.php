<section id="contact">

    <h1>Contact</h1>
    <hr id="title-hr">

    <div id="forms" class="w-50 mx-auto" >
        <form method="post" action="../src/php/sendMail.php">
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
                <div class="col-12">
                    <textarea class="form-control my-4" id="msg" rows="3" name="message" required placeholder="Your message"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary ml-3">Send</button>
        </form>

        <div id="info" class="text-center mx-auto pt-5 mt-5">
            <div>
                <i class="fas fa-phone"></i>
                <p>+32 477 52 69 11</p>
                <hr>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <a class="d-block" href="mailto:info@jf-solutions.be">info@jf-solutions.be</a>
                <hr>
            </div>
                
        </div>
    </div>

</section>