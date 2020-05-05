<?php

include "includes/includes.php";

?>

<div class="container p-3 text-center">
    <img src="images/cover.jpg" class="img-fluid ">
    <div class="mt-3 mt-md-5 mb-5">
        <h1 class="text-success">Job Aggregator</h1>
        <h6>Job search made easy</h6>
        <p class="text-muted">Job Aggregator is an online platform created to find the right job for you!</p>
    </div>
    <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
            <div class="container bg-white rounded p-5">
                <h3 class="text-center mb-4 text-info"><i class="fas fa-layer-group"></i> Available Categories</h3>
                <?php foreach($result_category_checkboxes as $r_c_cb){?>
                    <ul class="list-group">
                        <li class="list-group-item text-capitalize mb-2"><?php echo $r_c_cb['category']?></li>
                    </ul>
                <?php }?>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="container bg-white rounded p-5">
                <h3 class="text-center mb-4 text-info"><i class="fas fa-map-marker-alt"></i> Available Locations</h3>
                <?php foreach($result_location_checkboxes as $r_c_cb){?>
                    <ul class="list-group">
                        <li class="list-group-item mb-2"><?php echo $r_c_cb['location']?></li>
                    </ul>
                <?php }?>
            </div>
           
        </div>
    </div>
</div>

<?php

include "html/footer.php";

?>
    
