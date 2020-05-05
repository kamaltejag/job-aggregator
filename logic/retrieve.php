<?php

    // retrieve from create page
    if(isset($_REQUEST['create'])){
        if(isset($_REQUEST['title'])){
            $title = $_REQUEST['title'];
        }
        if(isset($_REQUEST['description'])){
            $description = $_REQUEST['description'];
        }
        if(isset($_REQUEST['category'])){
            $category = $_REQUEST['category'];
        }
        if(isset($_REQUEST['salary'])){
            $salary = $_REQUEST['salary'];
        }
        if(isset($_REQUEST['location'])){
            $location = $_REQUEST['location'];
        }
        if(isset($_REQUEST['company'])){
            $company = $_REQUEST['company'];
        }
        if(isset($_REQUEST['duration'])){
            $duration = $_REQUEST['duration'];
        }
        if(isset($_REQUEST['link'])){
            $link = $_REQUEST['link'];
        }
 


        // Checking if any input is empty
        if(empty($_REQUEST['title']) || empty($_REQUEST['description']) || $_REQUEST == "select a category" || empty($_REQUEST['salary']) || empty($_REQUEST['location']) || empty($_REQUEST['company']) || empty($_REQUEST['duration']) || empty($_REQUEST['link'])){
            $status = "Enter all the fields";
        }
    }

    // retrieve id from url
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }

    // retrieve from update page
    if(isset($_REQUEST['update'])){
        $title = $_REQUEST['title'];
        $description = $_REQUEST['description'];
        $category = $_REQUEST['category'];
        $salary = $_REQUEST['salary'];
        $location = $_REQUEST['location'];
        $company = $_REQUEST['company'];
        $duration = $_REQUEST['duration'];
        $link = $_REQUEST['link'];
    }
    
    // retrieve from login page
    if(isset($_REQUEST['login'])){
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        }
    }

    // retrieve from signup page
    if(isset($_REQUEST['signup'])){
        if(isset($_REQUEST['username'])){
            $username = $_REQUEST['username'];
        }
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        }  
    }

    // retrieve for logout
    if(isset($_REQUEST['logout'])){
        logout();
    }

    // retieve filter checkboxes
    if(isset($_REQUEST['filter'])){
        if(isset($_REQUEST['category'])){
            $filter_category = $_REQUEST['category'];
        }
        if(isset($_REQUEST['salary'])){
            $filter_salary = $_REQUEST['salary'];
        }
        if(isset($_REQUEST['location'])){
            $filter_location = $_REQUEST['location'];
        }
       
    }

    // retreive selected checkboxes
    if(isset($_REQUEST['category'])){
        $selected_category_checkboxes = $_REQUEST['category'];
    } 
    if(isset($_REQUEST['location'])){
        $selected_location_checkboxes = $_REQUEST['location'];
    } 
    if(isset($_REQUEST['salary'])){
        $selected_salary_checkboxes = $_REQUEST['salary'];
    } 
?>





