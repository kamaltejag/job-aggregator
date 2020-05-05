<?php

include "includes/includes.php";

?>

<div class="container bg-white  rounded mt-5 p-5">
    <h3 class="mb-4 text-center">Create a Job</h3>
    <?php
        if(!empty($status)){
            echo '<h5 class="text-danger mb-3 ">'.$status.'</h5>';
        }
    ?>
    <form method="POST">
        <label>Title</label>
        <input class="form-control mt-2 mb-2" name="title" placeholder="Enter the job title">
        <label>Description</label>
        <textarea class="form-control mt-2 mb-2" name="description" placeholder="Enter the job description" rows="3"></textarea>
        <label>Category</label>
        <div class="input-group mb-3 mt-1 ">
            <select class="custom-select" id="inputGroupSelect01" name="category">
                <option value="select a category">Select a Category</option>
                <option value="content writing">Content Writing</option>
                <option value="web development">Web Development</option>
                <option value="node js">Node js</option>
                <option value="python">Pyhton</option>
            </select>
        </div>
        <label>Salary</label>
        <input type="text" placeholder="Enter the Salary" class="form-control" name="salary">
        <label class="mt-3">Location</label>
        <input type="text" placeholder="Enter the location of the job" class="form-control" name="location">
        <label class="mt-3">Company</label>
        <input type="text" placeholder="Enter the company name" class="form-control" name="company">
        <label class="mt-3">Duration</label>
        <input type="text" placeholder="Enter the job time duration" class="form-control" name="duration">
        <label class="mt-3">Job Link</label>
        <input type="text" placeholder="Enter the link of the job application page" class="form-control" name="link">
        <button class="btn btn-primary mt-3" type="submit" name="create">Create</button>
    </form>
</div>


<?php

include "html/footer.php";

?>
    