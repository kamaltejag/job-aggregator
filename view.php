<?php

include "includes/includes.php";

?>

<div class="container bg-white rounded mt-5 p-5">
    <?php foreach($result_jobs_id as $r_j_id){?>
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center text-md-left mt-3 mb-1 text-info"><?php echo $r_j_id['title'];?></h1>
                <h6 class="text-muted mb-3 text-center text-md-left"><?php echo $r_j_id['company'];?></h6>
            </div>
            <?php if(!empty($_SESSION['username'])){if($_SESSION['username'] == 'admin'){?>
                <div class="col-md-4 mt-md-3">
                    <a href="edit.php?id=<?php echo $r_j_id['id'];?>"><button class="btn btn-info mb-3">Edit</button></a>
                    <a href="delete.php?id=<?php echo $r_j_id['id'];?>"><button class="btn btn-danger  mb-3">Delete</button></a>
                </div>
            <?php }}?>
        </div>
        <p class="mt-0">
            <i class="fas fa-business-time text-muted"></i>
            <?php echo $r_j_id['duration'];?>
        </p>
        <p class="mt-0">
            <i class="fas fa-map-marker-alt text-muted"></i>
            <?php echo $r_j_id['location'];?>
        </p>

        <?php if(!empty($_SESSION['username'])){?>
            <a href="<?php echo $r_j_id['link'];?>" target="_blank"><button class="btn btn-primary">Apply</button></a>
        <?php }else{?>
            <a href="login.php"><button class="btn btn-info">Login/Signup to apply</button></a>
        <?php }?>
    
        <hr>
        
        <h5 class="mt-3 mb-3">Job Description</h5>
        <p class="mt-4 text-muted"><?php echo $r_j_id['description'];?></p>
        

    <?php }?>
</div>


<?php

include "html/footer.php";

?>
    