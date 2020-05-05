<?php

include "includes/includes.php";

?>

<div class="container bg-white mt-5 p-5 rounded">
    <h1 class="mb-2 text-info">Edit the Blog Post</h1>
    <!-- $result_jobs_id is taken form the view page -->
    <?php foreach($result_jobs_id as $r_id){?>

    <form method="POST">
        <label>Title</label>
        <input class="form-control mt-2 mb-2" name="title" placeholder="Enter the job title" value="<?php echo $r_id['title']?>">
        <label>Description</label>
        <textarea class="form-control mt-2 mb-2" name="description" placeholder="Enter the job description" rows="3"><?php echo $r_id['description']?></textarea>
        <label>Category</label>
        <div class="input-group mb-3 mt-1 ">
            <select class="custom-select" id="inputGroupSelect01" name="category">
                <option value="select a category">Select a Category</option>
                <option value="content writing" <?php if($r_id['category'] == 'content writing'){echo 'selected';}?>>Content Writing</option>
                <option value="web development" <?php if($r_id['category'] == 'web development'){echo 'selected';}?>>Web Development</option>
                <option value="node js" <?php if($r_id['category'] == 'node js'){echo 'selected';}?>>Node js</option>
                <option value="python" <?php if($r_id['category'] == 'python'){echo 'selected';}?>>Pyhton</option>
            </select>
        </div>
        <label>Salary</label>
        <input type="text" placeholder="Enter the Salary" class="form-control" name="salary" value="<?php echo $r_id['salary']?>">
        <label class="mt-3">Location</label>
        <input type="text" placeholder="Enter the location of the job" class="form-control" name="location" value="<?php echo $r_id['location']?>">
        <label class="mt-3">Company</label>
        <input type="text" placeholder="Enter the company name" class="form-control" name="company" value="<?php echo $r_id['company']?>">
        <label class="mt-3">Duration</label>
        <input type="text" placeholder="Enter the job time duration" class="form-control" name="duration" value="<?php echo $r_id['duration']?>">
        <label class="mt-3">Job Link</label>
        <input type="text" placeholder="Enter the link of the job application page" class="form-control" name="link" value="<?php echo $r_id['link']?>">
        <button class="btn btn-primary mt-3" type="submit" name="update">Update</button>
    </form>
    <?php }?>
</div>


<?php

include "html/footer.php";

?>
    