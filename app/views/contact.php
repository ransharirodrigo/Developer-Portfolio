<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="icon" href="../../assets/images/logo.svg" />
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row row px-2 h-100">

            <!-- Offcanvas icon -->
            <div class="col-12  navBarDiv d-md-none ">
                <div class="row h-100 d-flex align-items-center" onclick="openOffcanvas()">
                    <i class="bi bi-list text-white fs-5"></i>
                </div>
            </div>


            <?php include("../../config.php") ?>

            <!-- Nav Bar -->
            <div class="col-12 navBarDiv d-none d-md-block">
                <?php
                include("../../includes/NavBar.php");
                ?>
            </div>


            <div class="col-12 contactPageContentDiv">
                <div class="row h-100 d-flex  justify-content-center justify-content-md-around ">

                    <!-- Get In Touch Div -->
                    <div class="col-10 col-lg-5">
                        <div class="row h-75">

                            <!-- Heading -->
                            <div class="text-center text-lg-start ">
                                <h1><span class="text-white">Get In&nbsp;</span><span class="contactPageHeadingTxt"> Touch.</span></h1>
                            </div>

                            <!-- Content -->
                            <div class="col-12 py-4 px-3 contactFormDiv mt-3 ">

                                <!-- Name -->
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <p class="text-white">Your Name ?</p>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="row mt-4">
                                    <div class="col-12 col-sm-4">
                                        <p class="text-white">Your Email ?</p>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <input type="email" class="form-control" />
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="row mt-4">
                                    <div class="col-12 col-sm-4">
                                        <p class="text-white">Your Message ?</p>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <textarea rows="6" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Connect with Me Online Div -->
                    <div class="col-10 col-lg-5 mt-3 mt-lg-0 ">
                        <div class="row  h-75">

                            <!-- Heading -->
                            <div class="text-center text-lg-start">
                                <h1><span class="text-white">Connect with Me&nbsp;</span><span class="contactPageHeadingTxt"> Online.</span></h1>
                            </div>


                            <!-- Content -->
                            <div class="col-12 ">

                                <!-- Github -->
                                <div class="row d-flex justify-content-around justify-content-lg-start">
                                    <div class="col-3 d-none d-md-block">
                                        <p class="text-white fs-5">Git Hub</p>
                                    </div>
                                    <div class="col-1">
                                        <a href="https://github.com/ransharirodrigo" class="text-decoration-none text-reset">
                                            <i class="bi bi-github contactPageIcon"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- LinkedIn -->
                                <div class="row d-flex justify-content-around justify-content-lg-start">
                                    <div class="col-3 d-none d-md-block">
                                        <p class="text-white fs-5">Linked In</p>
                                    </div>
                                    <div class="col-1">
                                        <a href="https://www.linkedin.com/in/tharushi-rodrigo-b79a6a271/" class="text-decoration-none text-reset">
                                            <i class="bi bi-linkedin contactPageIcon"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Facebook -->
                                <div class="row d-flex justify-content-around justify-content-lg-start">
                                    <div class="col-3 d-none d-md-block">
                                        <p class="text-white fs-5">Facebook</p>
                                    </div>
                                    <div class="col-1">
                                        <a href="https://web.facebook.com/profile.php?id=100078846752762" class="text-decoration-none text-reset">
                                            <i class="bi bi-facebook contactPageIcon"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Whatsapp -->
                                <div class="row d-flex justify-content-around justify-content-lg-start">
                                    <div class="col-3 d-none d-md-block">
                                        <p class="text-white fs-5">Whatsapp</p>
                                    </div>
                                    <div class="col-1">
                                        <a class="text-decoration-none text-reset" onclick="openWhatsApp()">
                                            <i class="bi bi-whatsapp contactPageIcon"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Instagram -->
                                <div class="row d-flex justify-content-around justify-content-lg-start">
                                    <div class="col-3 d-none d-md-block">
                                        <p class="text-white fs-5">Instagram</p>
                                    </div>
                                    <div class="col-1">
                                        <a href="https://www.instagram.com/tharu.shi_/" class="text-decoration-none text-reset">
                                            <i class="bi bi-instagram contactPageIcon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div>
            <?php include("../../components/offcanvas.php") ?>
        </div>

    </div>


    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/script.js"></script>
    <script>
        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvas"))


        function openOffcanvas() {
            offcanvas.show();
        }

        function closeOffCanvas() {
            offcanvas.hide();
        }
    </script>
</body>

</html>