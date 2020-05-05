<?php

    // Select all the jobs from the $data table
   function retrieve_jobs($conn){
        $sql = "SELECT * FROM $data";
        $query = mysqli_query($conn, $sql);
        return $query;
    }


    // Insert the $data into $data table
    function insert($conn, $title, $description, $category, $salary, $location, $company, $duration, $link){
        $description_slashes = addslashes($description);
        $sql = "INSERT INTO $data(title, description, category, salary, location, company, duration, link) VALUES('$title','$description_slashes', '$category', '$salary', '$location', '$company', '$duration', '$link')";
        $query = mysqli_query($conn, $sql);
    }
    
    // retrive everything with this id
    function retrieve_jobs_id($conn, $id){
        $sql = "SELECT * FROM $data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Update job post
    function update_job($conn, $id, $title, $description, $category, $salary, $location, $company, $duration, $link){
        $description_slashes = addslashes($description);
        $sql = "UPDATE $data SET title='$title', description='$description_slashes', category= '$category', salary= '$salary', location= '$location', company= '$company', duration= '$duration', link= '$link' WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    }
    
    //Delete the post 
    function delete($conn, $id){
        $sql = "DELETE FROM $data WHERE id= $id";
        $query = mysqli_query($conn, $sql);
        
    }

    //retrieve $users with specific email 
    function retrieve_users($conn, $email){
        $sql = "SELECT * FROM $users WHERE email= '$email'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    //retrieve all the $users 
    function retrieve_all_users($conn){
        $sql = "SELECT * FROM $users";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Signup form logic function
    function insert_users($conn, $username, $email, $password){
        $result_all_users = retrieve_all_users($conn);
        foreach($result_all_users as $r_a_u){
            if($username == $r_a_u['username']){
                header("Location:signup.php?usernameTaken");
                exit();
            }
        }
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $users(username, email, password) VALUES('$username', '$email', '$hash_password')";
        $query = mysqli_query($conn, $sql);
    }

    // Logout functionality
    function logout(){
        unset($_SESSION['username']);
        header("Location: index.php");
    }

    // Select filter check boxes values
    function filter_category_checkboxes($conn){
        $sql = "SELECT DISTINCT category FROM $data";
        $query_category = mysqli_query($conn, $sql);
        return $query_category;
    }

    function filter_location_checkboxes($conn){
        $sql = "SELECT DISTINCT location FROM $data";
        $query_location = mysqli_query($conn, $sql);
        return $query_location;
    }

    // retrieving selected checkboxes $data
    function selected_checkboxes_data($conn, $checkboxes, $selected_category_checkboxes, $selected_salary_checkboxes, $selected_location_checkboxes){
        if($checkboxes == 'category'){
            $sql = 'SELECT * FROM $data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '")';
        }
        elseif($checkboxes == 'salary'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = 'SELECT * FROM $data WHERE salary < 25000';
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = 'SELECT * FROM $data WHERE salary > 100000';
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM $data WHERE salary BETWEEN $range[0] AND $range[1] ";
            }
            
        }
        elseif($checkboxes == 'location'){
            $sql = 'SELECT * FROM $data WHERE location IN ("' . implode('", "', $selected_location_checkboxes) . '")';
        }
        elseif($checkboxes == 'categorySalary'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = 'SELECT * FROM $data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '") AND salary < 25000';
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = 'SELECT * FROM $data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '") AND salary > 100000';
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM $data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND salary BETWEEN $range[0] AND $range[1]";
            }
            
        }
        elseif($checkboxes == 'categoryLocation'){
            $sql = 'SELECT * FROM $data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '") AND location IN ("' . implode('", "', $selected_location_checkboxes) . '")';
        }
        elseif($checkboxes == 'salaryLocation'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = "SELECT * FROM $data WHERE salary < 25000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = "SELECT * FROM $data WHERE salary > 100000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM $data WHERE salary BETWEEN $range[0] AND $range[1] AND location IN ('" . implode("', '", $selected_location_checkboxes) . "') ";
            }
        }
        elseif($checkboxes == 'categorySalaryLocation'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = "SELECT * FROM $data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND salary < 25000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = "SELECT * FROM $data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND  salary > 100000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM $data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND salary BETWEEN $range[0] AND $range[1] AND location IN ('" . implode("', '", $selected_location_checkboxes) . "') ";
            }
        }

        $query_selected = mysqli_query($conn, $sql);
         return $query_selected;
    }
           


?>






