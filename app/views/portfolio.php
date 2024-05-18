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


        </div>
    </div>
</body>

</html>