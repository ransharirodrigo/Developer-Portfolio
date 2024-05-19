<div class="col-11 col-sm-8 col-md-5 portfolioItemDiv py-4 px-4 mt-2">
    <div class="row h-100 ">
        <!-- Image -->
        <div class="col-12  d-flex align-items-center justify-content-center">
            <img src="<?php echo $image_path; ?>" alt="Portfolio Image" class="portfolioItemImage" />
        </div>
        <!-- Details -->
        <div class="col-12  mt-2 mt-lg-0 ">
            <!-- Front End -->
            <div class="row ">
                <div class="col-6  py-0">
                    <p class="text-white my-0">Front-End:</p>
                </div>
                <div class="col-6 ">
                    <?php foreach ($front_end as $key => $value) : ?>
                        <span class="text-white"><?php echo $value; ?></span><br>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Back End -->
            <div class="row">
                <div class="col-6">
                    <p class="text-white my-0">Back-End:</p>
                </div>
                <div class="col-6">
                    <?php foreach ($back_end as $key => $value) : ?>
                        <span class="text-white"><?php echo $value; ?></span><br>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Database -->
            <div class="row">
                <div class="col-6">
                    <p class="text-white my-0">Database:</p>
                </div>
                <div class="col-6">
                    <span class="text-white">MySQL</span>
                </div>
            </div>
        </div>
    </div>
</div>
