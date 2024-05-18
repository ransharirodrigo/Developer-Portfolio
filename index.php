<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>


    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid vh-100 ">
        <div class="row px-2 h-100">

            <!-- Offcanvas icon -->
            <div class="col-12  navBarDiv d-md-none bg-danger">
                <div class="row h-100 d-flex align-items-center">
                    <i class="bi bi-list text-white fs-5"></i>
                </div>
            </div>


            <?php include("config.php") ?>

            <!-- Nav Bar -->
            <div class="col-12 navBarDiv d-none d-md-block">
                <?php
                include("includes/NavBar.php");
                ?>
            </div>

            <div class="col-12 indexPageContentDiv">
                <div class="row h-100 d-flex align-items-center">

                    <div class="col-12 h-100">
                        <div class="row  h-100 ">


                            <!-- Circle div for small screens-->
                            <div class="col-12 d-lg-none h-50 ">
                                <div class="row d-flex justify-content-center h-100 d-flex align-items-center">
                                    <div class="col-4 rounded-circle circleDiv d-flex justify-content-center align-items-center">
                                    <img src="assets/images/indexPageImage.svg" alt="indexPageImage.svg" class="indexPageImage rounded-circle">
                                    </div>
                                </div>
                            </div>


                            <!-- Name and stack div-->
                            <div class="col-12 col-lg-6 h-25 d-lg-flex align-items-center nameAndStackDiv ">
                                <div class="row d-lg-flex justify-content-end">
                                    <div class="col-12 col-lg-10  text-center text-lg-start ">
                                        <h1 class="text-white fw-bolder">THARUSHI RODRIGO</h1>
                                    </div>
                                    <div class="col-12 col-lg-10  text-center text-lg-start">
                                        <h5 class="text-white">Full Stack Developer</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Circle div for large screens -->
                            <div class="d-none d-lg-flex align-items-center justify-content-center col-lg-6 ">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-4 rounded-circle circleDiv d-flex justify-content-center align-items-center">
                                    <img src="assets/images/indexPageImage.svg" alt="indexPageImage.svg" class="indexPageImage rounded-circle">
                                    </div>
                                </div>
                            </div>

                            <!-- Social media icons -->
                            <div class="col-12 h-25 m-0 indexPageSocialMediaDiv">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-1 ">
                                        <div class="row ">
                                            <div class="col-12 d-flex justify-content-end">
                                                <a href="https://github.com/ransharirodrigo" class="text-decoration-none text-reset">
                                                    <i class="bi bi-github indexPageicon"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 d-flex justify-content-end">
                                                <a href="https://web.facebook.com/profile.php?id=100078846752762" class="text-decoration-none text-reset">
                                                    <i class="bi bi-facebook indexPageicon"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 d-flex justify-content-end">
                                                <a href="https://www.linkedin.com/in/tharushi-rodrigo-b79a6a271/" class="text-decoration-none text-reset">
                                                    <i class="bi bi-linkedin indexPageicon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>




        </div>
    </div>
</body>

</html>