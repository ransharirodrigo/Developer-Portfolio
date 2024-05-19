<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="icon" href="../../assets/images/logo.svg" />
</head>

<body>
    <div class="container-fluid ">
        <div class="row  px-2 ">

            <?php include("../../config.php") ?>

            <!-- Offcanvas icon -->
            <div class="col-12  navBarDiv d-md-none ">
                <div class="row  d-flex align-items-center py-4" onclick="openOffcanvas()">
                    <i class="bi bi-list text-white fs-5"></i>
                </div>
            </div>

            <!-- Nav Bar -->
            <div class="col-12 navBarDiv d-none d-md-block">
                <?php
                include("../../includes/NavBar.php");
                ?>
            </div>


            <!-- Content div -->
            <div class="col-12 my-3">

                <!-- Heading -->
                <!-- <div class="row">
                    <div class="col-12">
                        <h1 class="text-white">Portfolio</h1>
                    </div>
                </div> -->

                <!-- Team Projects div -->
                <div class="row mt-4">
                    <div class="col-12">

                        <!-- Team project heading -->
                        <div class="row">
                            <div class="col-12">
                                <h2><span class="text-white">Team&nbsp;</span><span class="portfolioPageSubheadingSecondText">Projects</span></h2>
                            </div>
                        </div>

                        <div class="row">
                            <?php

                            $title = "Web based Point Of Sales System ";
                            $technologies = [
                                ["#HTML", "tech1"],
                                ["#CSS", "tech2"],
                                ["#JS", "tech3"],
                                ["#PHP", "tech4"]

                            ];
                            $description = "I contributed to a web-based project focused on developing 
                            a comprehensive Point of Sale (POS) system tailored for hardware retail businesses. 
                            Our solution empowered users with robust features including product, category, 
                            and brand management capabilities. Additionally, it offered advanced functionalities such as generating profit reports,
                             tracking invoices and Goods Received Notes (GRNs), and managing both regular and credit customers. Moreover, 
                             our POS system provided the flexibility to hold and unhold invoices,
                             ensuring seamless transactions and efficient operations.";
                            $headingSide = "Left";

                            include("../../components/portfolioTeamItem.php")
                            ?>


                            <?php

                            $title = "Restaurant Management System";
                            $technologies = [
                                ["#HTML", "tech1"],
                                ["#CSS", "tech2"],
                                ["#JS", "tech3"],
                                ["Laravel", "tech4"]

                            ];
                            $description = "I contributed to the development of a web-based restaurant management 
                            system designed to streamline operations and enhance customer experiences. Our system featured user privileges, 
                            including Super Admin, Admin, and Customer roles, ensuring secure access and tailored functionalities for different users.
                             The Super Admin had overarching control, while Admins managed restaurant operations, 
                            and Customers interacted with the system to place orders, make reservations, and provide feedback.";
                            $headingSide = "Right";

                            include("../../components/portfolioTeamItem.php")
                            ?>
                        </div>

                    </div>
                </div>


                <!-- Personal Projects div -->
                <div class="row mt-4">
                    <div class="col-12">

                        <!-- Personal project heading -->
                        <div class="row">
                            <div class="col-12">
                                <h2><span class="text-white">Personal&nbsp;</span><span class="portfolioPageSubheadingSecondText">Projects</span></h2>
                            </div>
                        </div>


                        <div class="row d-flex justify-content-evenly mt-lg-4">

                            <!-- Div 1 -->
                            <?php
                            $image_path = "../../assets/images/portfolioImages/EmartDesign.svg";
                            $front_end = [
                                "HTML",
                                "CSS",
                                "Java Script",
                            ];
                            $back_end = [
                                "PHP",
                            ];
                            $database = "MySQL";
                            include("../../components/portfolioPersonalItem.php")
                            ?>

                            <!-- Div 2 -->
                            <?php
                            $image_path = "../../assets/images/portfolioImages/FlowerCornerDesign.svg";
                            $front_end = [
                                "React Native",
                            ];
                            $back_end = [
                                "PHP",
                            ];
                            $database = "MySQL";
                            include("../../components/portfolioPersonalItem.php")
                            ?>

                            <!-- Div 3 -->
                            <?php
                            $image_path = "../../assets/images/portfolioImages/ChatAppDesign.svg";
                            $front_end = [
                                "React Native",
                            ];
                            $back_end = [
                                "PHP",
                            ];
                            $database = "MySQL";
                            include("../../components/portfolioPersonalItem.php")
                            ?>

                            <!-- Div 4 -->
                            <?php
                            $image_path = "../../assets/images/portfolioImages/POSDesign.svg";
                            $front_end = [
                                "Java",
                            ];
                            $back_end = [
                                "Java",
                            ];
                            $database = "MySQL";
                            include("../../components/portfolioPersonalItem.php")
                            ?>

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