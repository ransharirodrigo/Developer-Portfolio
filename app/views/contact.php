<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row row px-2 h-100">

            <!-- Offcanvas icon -->
            <div class="col-12  navBarDiv d-md-none ">
                <div class="row h-100 d-flex align-items-center">
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
                <div class="row h-100 d-flex justify-content-center justify-content-md-around ">

                    <!-- Get In Touch Div -->
                    <div class="col-10 col-md-6">
                        <div class="row">
                            <div>
                                <h1><span class="text-white">Get In&nbsp;</span><span class="contactPageHeadingTxt"> Touch.</span></h1>
                            </div>
                            <div class="col-12 py-4 px-3 contactFormDiv mt-2">

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
                                        <p  class="text-white">Your Email ?</p>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="row mt-4">
                                    <div class="col-12 col-sm-4">
                                        <p  class="text-white">Your Message ?</p>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <textarea rows="6" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Connect with Me Online Div -->
                    <div class="col-10 col-md-5">

                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>