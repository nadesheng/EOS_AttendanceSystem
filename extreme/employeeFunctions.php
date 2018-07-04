<?php

    include "dbConnection.php";

    
    // Adding or Creating Employee Details
    $e_name = isset($_POST['e_name']) ? $_POST['e_name'] : NULL;
    $e_initial = isset($_POST['e_initial']) ? $_POST['e_initial'] : NULL;
    $e_lastName = isset($_POST['e_lastName']) ? $_POST['e_lastName'] : NULL;
    $e_bdate = isset($_POST['e_bdate']) ? $_POST['e_bdate'] : NULL;
    $e_cnum = isset($_POST['e_cnum']) ? $_POST['e_cnum'] : NULL;
    $e_email = isset($_POST['e_email']) ? $_POST['e_email'] : NULL;
    $e_address = isset($_POST['e_address']) ? $_POST['e_address'] : NULL;
    $e_dstart = isset($_POST['e_dstart']) ? $_POST['e_dstart'] : NULL;
    $e_pos = isset($_POST['e_pos']) ? $_POST['e_pos'] : NULL;
    $e_uname = isset($_POST['e_uname']) ? $_POST['e_uname'] : NULL;
    $e_pass = isset($_POST['e_pass']) ? $_POST['e_pass'] : NULL;

    if (isset($_POST['register'])) {
        
        include "dbConnection.php";
        
        $query = "INSERT INTO addemployee (e_name, e_initial, e_lastName, e_bdate, e_cnum, e_email, e_address, e_dstart, e_pos, e_uname, e_pass) VALUES ('".$e_name."', '".$e_initial."', '".$e_lastName."', '".$e_bdate."', '".$e_cnum."', '".$e_email."', '".$e_address."', '".$e_dstart."', '".$e_pos."', '".$e_uname."', '".$e_pass."')";
        $result = mysqli_query($DBConnectToHost, $query);
        
        header ('Location: HR_EmployeeDetails.php');
    } 

    // Leave Details
    $l_name = isset($_POST['l_name']) ? $_POST['l_name'] : NULL;
    $l_dept = isset($_POST['l_dept']) ? $_POST['l_dept'] : NULL;
    $l_type = isset($_POST['l_type']) ? $_POST['l_type'] : NULL;
    $l_Dstart = isset($_POST['l_Dstart']) ? $_POST['l_Dstart'] : NULL;
    $l_Dend = isset($_POST['l_Dend']) ? $_POST['l_Dend'] : NULL;
    $l_reason = isset($_POST['l_reason']) ? $_POST['l_reason'] : NULL;

    if (isset($_POST['submit'])) {
        
        include "dbConnection.php";
        
        $query1 = "INSERT INTO leave_details (l_name, l_dept, l_type, l_Dstart, l_Dend, l_reason) VALUES ('".$l_name."', '".$l_dept."', '".$l_type."', '".$l_Dstart."', '".$l_Dend."', '".$l_reason."')";
        $result1 = mysqli_query($DBConnectToHost, $query1);
        // echo $query1;
        
        header ('Location: LeaveDetails.php');
    }

    // Overtime Details
    $o_name = isset($_POST['o_name']) ? $_POST['o_name'] : NULL;
    $o_date = isset($_POST['o_date']) ? $_POST['o_date'] : NULL;
    $o_start = isset($_POST['o_start']) ? $_POST['o_start'] : NULL;
    $o_end = isset($_POST['o_end']) ? $_POST['o_end'] : NULL;
    $o_num = isset($_POST['o_num']) ? $_POST['o_num'] : NULL;
    $o_reason = isset($_POST['o_reason']) ? $_POST['o_reason'] : NULL;

    if (isset($_POST['submit1'])) {
        
        include "dbConnection.php";
        
        $query2 = "INSERT INTO overtime (o_name, o_date, o_start, o_end, o_num, o_reason) VALUES ('".$o_name."', '".$o_date."', '".$o_start."', '".$o_end."', '".$o_num."', '".$o_reason."')";
        $result2 = mysqli_query($DBConnectToHost, $query2);
        
        header ('Location: Overtime.php');
    }


?>