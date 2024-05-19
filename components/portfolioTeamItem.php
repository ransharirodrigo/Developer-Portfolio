<div class="col-12 mt-4">
    <div class="row">
        <?php if ($headingSide === "Left") : ?>
            <!-- Title on the Left -->
            <div class="col-11 offset-1 offset-md-0 col-md-5 order-1 order-md-1">
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-white"><?php echo $title ?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11 d-flex flex-row">
                        <?php foreach ($technologies as $tech) : ?>
                            <span class="<?php echo $tech[1]; ?>"><?php echo $tech[0]; ?>&nbsp; &nbsp;</span><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-11  offset-1  col-md-6  order-2 order-md-2 mt-3 mt-md-0">
                <p class="text-white"><?php echo $description ?></p>
            </div>
        <?php else : ?>
            <!-- Title on the Right -->
            <div class="col-11 offset-1 offset-md-0 col-md-6 order-2 order-md-1 mt-3 mt-md-0">
                <p class="text-white"><?php echo $description ?></p>
            </div>

            <div class="col-11  offset-1  col-md-6 offset-md-0  order-1 order-md-2">
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-white"><?php echo $title ?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-row">
                        <?php foreach ($technologies as $tech) : ?>
                            <span class="<?php echo $tech[1]; ?>"><?php echo $tech[0]; ?>&nbsp; &nbsp;</span><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>