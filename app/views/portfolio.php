<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid ">
        <div class="row  px-2 ">

            <!-- Offcanvas icon -->
            <div class="col-12  navBarDiv d-md-none ">
                <div class="row  d-flex align-items-center py-4">
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


            <!-- Content div -->
            <div class="col-12 mt-3">

                <!-- Heading -->
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white">Portfolio</h1>
                    </div>
                </div>

                <!-- Personal Projects div -->
                <div class="row mt-3">
                    <div class="col-12">

                        <!-- Personal project heading -->
                        <div class="row">
                            <div class="col-12">
                                <h3><span class="text-white">Personal&nbsp;</span><span class="portfolioPageSubheadingSecondText">Projects</span></h3>
                            </div>
                        </div>


                        <div class="row d-flex justify-content-around">

                            <!-- Div 1 -->
                            <?php
                            $image_path = "../../assets/images/portfolioImages/EmartDesign.svg";


                            include("../../components/portfolioItem.php") ?>

                            <!-- Div 2 -->
                            <?php include("../../components/portfolioItem.php") ?>



                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>