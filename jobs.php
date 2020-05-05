<?php

include "includes/includes.php";

    // choose which data to show after adding checkbox logic or show all the data
    if(!empty($result_selected_checkboxes_data)){
       $result_data =  $result_selected_checkboxes_data;
    }
    else{
        $result_data = $result_jobs;
    }

    // Keep checkboxes checked after refresh
    if(isset($_REQUEST['category'])){
        foreach($_REQUEST['category'] as $checked){
            $category_checked_array[] = $checked;
        }
    }

    if(isset($_REQUEST['location'])){
        foreach($_REQUEST['location'] as $checked){
            $location_checked_array[] = $checked;
        }
        
    }
?>
                

<div class="container">
    <div class="row mt-5">
        <div class="col-md-3">
            <div class=" rounded bg-white pt-4 p-3">
                <h3 class="mb-4 text-success">Filter</h3>
                <form method="GET">
                    <h5>Category</h5>
                    <?php foreach($result_category_checkboxes as $r_c_cb){?>
                        <div class="container">
                            <div class="form-group form-check mb-2">
                                <input type="checkbox" class="form-check-input check_box" id="exampleCheck1" name="category[]" value="<?php echo $r_c_cb['category'];?>" <?php if(isset($_REQUEST['category'])){if(in_array($r_c_cb['category'], $category_checked_array)){echo 'checked';}}?> >
                                <label class="form-check-label text-capitalize" for="exampleCheck1"><?php echo $r_c_cb['category'];?></label>
                            </div>
                        </div>
                    <?php }?>

                    <h5 class="mt-4">Salary</h5>
                    <div class="container">
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" id="customRadio1" name="salary" value="less_than_25" <?php if(isset($_REQUEST['salary'])){if($_REQUEST['salary'] == 'less_than_25'){echo 'checked';}}?> >
                            <label class="custom-control-label" for="customRadio1">Less than 25,000</label>
                        </div> 
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="salary" value="25000-50000" <?php if(isset($_REQUEST['salary'])){if($_REQUEST['salary'] == '25000-50000'){echo 'checked';}}?> >
                            <label class="custom-control-label" for="customRadio2">25,000 to 50,000</label>
                        </div> 
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="salary" value="50000-75000" <?php if(isset($_REQUEST['salary'])){if($_REQUEST['salary'] == '50000-75000'){echo 'checked';}}?> >
                            <label class="custom-control-label" for="customRadio3">50,000 to 75,000</label>
                        </div> 
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" id="customRadio4" name="salary" value="75000-100000" <?php if(isset($_REQUEST['salary'])){if($_REQUEST['salary'] == '75000-100000'){echo 'checked';}}?> >
                            <label class="custom-control-label" for="customRadio4">75,000 to 1,00,000</label>
                        </div> 
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" id="customRadio5" name="salary" value="more_than_100" <?php if(isset($_REQUEST['salary'])){if($_REQUEST['salary'] == 'more_than_100'){echo 'checked';}}?> >
                            <label class="custom-control-label" for="customRadio5">More than 1,00,000</label>
                        </div>                   
                    </div>

                    <h5 class="mt-4">Location</h5>
                    <?php foreach($result_location_checkboxes as $r_l_cb){?>
                    <div class="container">
                        <div class="form-group form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="location[]" value="<?php echo $r_l_cb['location'];?>" <?php if(isset($_REQUEST['location'])){if(in_array($r_l_cb['location'], $location_checked_array)){echo 'checked';}}?> >
                            <label class="form-check-label" for="exampleCheck1"><?php echo $r_l_cb['location'];?></label>
                        </div>
                    </div>

                    <?php }?>

                    <button type="submit" class="btn btn-primary mt-3" name="filter">Filter</button>
                </form>
            </div>
            
        </div>
        <div class="col-md-9">
            <h2 class="text-info  mt-5 mb-5 text-center text-md-left">Available Jobs</h2>
            <div class="row">
                <?php if(mysqli_num_rows($result_data) > 0){ foreach( $result_data as $r_jobs){?>
                        <div class="col-md-6">
                            <div class="bg-white p-4 mb-3 rounded">
                                <h4><?php echo $r_jobs['title'];?></h4>
                                <h6 class="text-muted mt-1"><?php echo $r_jobs['company'];?></h6>
                                <div class="row">
                                        <p class="mt-4 col-6">
                                            <i class="fas fa-business-time text-muted"></i>
                                            <?php echo $r_jobs['duration'];?>
                                        </p>
                                        <p class="col-6 mt-4">
                                            <i class="fas fa-map-marker-alt text-muted"></i>
                                            <?php echo $r_jobs['location'];?>
                                        </p>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fas fa-pen-nib text-muted"></i>
                                    </div>
                                    <div class="col-11">
                                    <p><?php echo substr($r_jobs['description'], 0, 100);?>...</p> 
                                    </div>
                                </div>
                                <div class="mt-3 row">
                                    <div class="col-8">
                                        <i class="fas fa-wallet text-muted"></i>
                                        <?php echo $r_jobs['salary'];?>
                                    </div>
                                <div class="col-4">
                                    <a href="view.php?id=<?php echo $r_jobs['id']?>"><button class="btn btn-primary">View &raquo;</button></a> 
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>  
                <?php }else{?>
                    <div class="container bg-white p-5 m-3 rounded">
                        <h3 class="text-center text-muted">Sorry no jobs found with your requirements</h3>
                    </div>
                    
                <?php }?>    
                
            </div>  
        </div>
    </div>
</div>


<?php

include "html/footer.php";

?>
    
