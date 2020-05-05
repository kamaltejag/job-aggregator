<?php
    $result_category_checkboxes = filter_category_checkboxes($conn); 
    $result_location_checkboxes = filter_location_checkboxes($conn); 

    // retrieving data based on checkbox
    if(isset($_REQUEST['filter'])){
        if(!empty($selected_category_checkboxes)){

            $result_selected_checkboxes_data = selected_checkboxes_data($conn, 'category', $selected_category_checkboxes, 'empty', 'empty'); 
        }
        if(!empty($selected_salary_checkboxes)){

            $result_selected_checkboxes_data = selected_checkboxes_data($conn, 'salary', 'empty', $selected_salary_checkboxes, 'empty'); 
        }
        if(!empty($selected_location_checkboxes)){

            $result_selected_checkboxes_data = selected_checkboxes_data($conn, 'location', 'empty', 'empty', $selected_location_checkboxes); 
        }
        if(!empty($selected_category_checkboxes) && !empty($selected_salary_checkboxes)){
            $result_selected_checkboxes_data = selected_checkboxes_data($conn, 'categorySalary', $selected_category_checkboxes, $selected_salary_checkboxes, 'empty');
        }
        if(!empty($selected_category_checkboxes) && !empty($selected_location_checkboxes)){
            $result_selected_checkboxes_data = selected_checkboxes_data($conn, 'categoryLocation', $selected_category_checkboxes, 'empty', $selected_location_checkboxes);
        }
        if(!empty($selected_salary_checkboxes) && !empty($selected_location_checkboxes)){
            $result_selected_checkboxes_data = selected_checkboxes_data($conn, 'salaryLocation', 'empty', $selected_salary_checkboxes, $selected_location_checkboxes);
        }
        if(!empty($selected_category_checkboxes) && !empty($selected_location_checkboxes) && !empty($selected_salary_checkboxes)){
            $result_selected_checkboxes_data = selected_checkboxes_data($conn, 'categorySalaryLocation', $selected_category_checkboxes, $selected_salary_checkboxes, $selected_location_checkboxes);
        }
    }


?>