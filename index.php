<!DOCTYPE html>
<html lang="en">

<head>
    <title>Velmurugan C | Contact Form PHPMailer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, 
	user-scalable=0">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="assets/plugins/normalize/normalize.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <!-- Contact -->
    <section class="contact">
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div
                        class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                        <div class="contact-img js-tilt" data-tilt>
                            <img src="assets/images/img-01.png" alt="Velmurugan">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="contact-form">
                            <div class="contact-form-title text-center text-uppercase">
                                <h1>Contact Form</h1>
                            </div>
                            <form action="sendmail.php" method="post" autocomplete="off">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        maxlength="500" required></textarea>
                                </div>
                                <div class="contact-form-btn text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <span>Send Email&nbsp;<i class="fa fa-long-arrow-right"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <!-- Jquery JS -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/plugins/popper/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Tilt -->
    <script src="assets/plugins/tilt/tilt.jquery.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>

</body>

</html>