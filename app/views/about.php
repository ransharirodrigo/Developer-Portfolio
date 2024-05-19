<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <div class="container-fluid ">
        <div class="row px-2 ">

            <!-- Offcanvas icon -->
            <div class="col-12 navBarDiv d-md-none">
                <div class="row d-flex align-items-center py-4"  onclick="openOffcanvas()">
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

            <!-- Details div -->
            <div class="col-12 ps-5 mt-5">
                <div class="row mt-md-3">
                    <div class="col-12 text-center text-md-start">
                        <h1 class="text-white">Hi ,</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="d-flex justify-content-center justify-content-md-start"><span class="text-white">I'm&nbsp;</span> <span class="aboutPageNameTxt"> Tharushi ,</span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center text-md-start">
                        <h1 class="text-white">Full stack developer .</h1>
                    </div>
                </div>
                <div class="row d-none d-md-block mt-2">
                    <div class="col-12">
                        <p class="text-white">I'm a dedicated and enthusiastic full stack developer. I thrive on learning new technologies and constantly expanding my skill set to create innovative solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Tech images circles -->
            <div class="mt-5 mb-3">
                <div class="col-12">
                    <div class="row firstTechRow d-none d-md-flex">
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/html.svg" alt="html.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/css.svg" alt="css.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/js.svg" alt="js.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/java.svg" alt="java.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/php.svg" alt="php.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/mysql.svg" alt="mysql.svg" class="techImg">
                            </div>
                        </div>
                    </div>
                    <div class="row d-none d-md-flex">
                        <div class="col-lg-2 offset-lg-1 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/mongo.svg" alt="mongo.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/wordpress.svg" alt="wordpress.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/reactNative.svg" alt="reactNative.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/nextJs.svg" alt="nextJs.svg" class="techImg">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 offset-lg-0">
                            <div class="techCircle">
                                <img src="../../assets/images/techImages/github.svg" alt="github.svg" class="techImg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Tech stack divs -->
            <div class="">
                <div class="row ">
                    <div class="col-md-6 mb-0 mb-md-4 ">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center mt-5">
                                <h4>
                                    <span class="text-white">Front-</span><span class="techNameSecondPartOfTxt">End</span>
                                </h4>
                                <div>
                                    <p class="text-white">HTML</p>
                                    <p  class="text-white">CSS</p>
                                    <p  class="text-white">Java Script</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 text-center mt-5">
                                <h4>
                                    <span class="text-white">Back-</span><span class="techNameSecondPartOfTxt">End</span>
                                </h4>
                                <div>
                                    <p class="text-white">JAVA</p>
                                    <p  class="text-white">PHP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="row s">
                            <div class="col-12 col-sm-6 text-center mt-5">
                                <h4>
                                    <span class="text-white">Data</span><span class="techNameSecondPartOfTxt">bases</span>
                                </h4>
                                <div>
                                    <p class="text-white">MySQL</p>
                                    <p  class="text-white">Mongo DB</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 text-center mt-5">
                                <h4>
                                    <span class="text-white">Other</span><span class="techNameSecondPartOfTxt">s</span>
                                </h4>
                                <div>
                                    <p class="text-white">WordPress</p>
                                    <p  class="text-white">React Native</p>
                                    <p  class="text-white">NextJS</p>
                                    <p  class="text-white">Git Hub</p>
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