<?php

    if(isset($_REQUEST['update'])){
         update_job($conn, $id, $title, $description, $category, $salary, $location, $company, $duration, $link);
         header("Location: jobs.php");
    }

?>