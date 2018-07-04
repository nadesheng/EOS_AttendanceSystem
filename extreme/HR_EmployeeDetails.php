<?php include "dbConnection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EMPLOYEES</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/modal2.css">


<style>

#employee_list {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#employee_list td, #employee_list th {
    border: 1px solid #ddd;
    padding: 8px;
}

#employee_list tr:nth-child(even){background-color: #f2f2f2;}

#employee_list tr:hover {background-color: #ddd;}

#employee_list th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #6A5ACD;
    color: white;
}
</style>
</head>

<body style="padding-top:20px;padding-right:200px">

<div class="container">
  

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Employees Attendance</a></li>
    <li><a data-toggle="tab" href="#menu1">Employees Profile</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>ATTENDANCE</h3>
    <table id="employee_list">
     <tr>
      <th>ID #</th>
      <th>NAME</th>
      <th>POSITION</th>
      <th>DATE </th>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    </table>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>PROFILE</h3>
    <table id="employee_list">
     <tr>
      <th>NAME</th>
      <th>ID #</th>
      <th>DEPARTMENT</th>
      <th>DATE STARTED</th>
      <th>BIRTHDATE</th>
      <th>ADDRESS</th>
      <th>CONTACT #</th>
      <th>EMAIL ADDRESS</th>
    </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
 </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
 </tr>
 </table>




<br>
<br>
<br>
<div id="add_employee">
<img src="images/icons/add employee.png" onclick="document.getElementById('id01').style.display='block'" style="width:7%;padding-top:200px ">
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="employeeFunctions.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/LOGO.png" style="width: 
      " alt="Avatar" class="avatar">
    </div>

    <div class="e_container">
        <div class="row">
        <div class="col-25">
          <label for="name">First Name <br>** enter extension here (e.g Jr. Sr.)</label>
        </div>
        <div class="col-75">
        <input type="text" name="e_name" required="">
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="name">Middle Name</label>
        </div>
        <div class="col-75">
          <input type="text" name="e_initial" required="">
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="name">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" name="e_lastname" required="">
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="birth">Birthdate</label>
        </div>
        <div class="col-75">
         <input type="date" name="e_bdate" required="">
        </div>
        </div>

         <div class="row">
        <div class="col-25">
          <label for="contactNumber">Contact Number</label>
        </div>
        <div class="col-75">
          <input type="text" name="e_cnum" required="">
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="email">Email Address</label>
        </div>
        <div class="col-75">
          <input type="text" name="e_email" required="">
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="address">Address</label>
        </div>
        <div class="col-75">
          <input type="text" name="e_address" required="">
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="started">Date Started</label>
        </div>
        <div class="col-75">
          <input type="date" name="e_dstart" required="">
        </div>
        </div>


        <div class="row">
        <div class="col-25">
          <label for="position">Position</label>
        </div>
        <div class="col-75">
            <select name="e_pos" required="">
              <option value=""></option>
              <option value="admin">ADMIN</option>
              <option value="HR">HR</option>
              <option value="IT">IT</option>
              <option value="agent">AGENT</option>
            </select>
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="uname">Username</label>
        </div>
        <div class="col-75">
          <input type="text" name="e_uname" required="">
        </div>
        </div>

        <div class="row">
        <div class="col-25">
          <label for="psw">Password</label>
        </div>
        <div class="col-75">
          <input type="text" name="e_pass" required="">
        </div>
        </div>
  
        <div class="row">
               <input type="submit" id="ms_add" name="register" value="REGISTER" style="font-weight: bold">
            </div>
  </form>
</div>
</div>   
    
    </div>
  </div>
</div>

</body>
</html>