<?php include "dbConnection.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>LEAVE DETAILS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/application.css">


</head>
<body>

<div class="container-login100">
  <div class="wrap-overtime">
    <h1>Leave Application Details</h1><br>
    <p align="justify">Welcome to the Extreme Outsource Solutions Overtime Application System.<br><br>
    In this page you will be applying for the approval of your rendered overtime. Once applied, your overtime will undergo approval on 2 levels. First approval will be under HR or by immediate superior, and the Final Approval will be under Management.<br><br>
    The approval process will take 48 hours, and you will be notified if it is approved or not.</p>

 <form action="employeeFunctions.php" method="post">
 <div class="container">
   
     <div class="row">
       <div class="col-25">
        <label>Employee Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="l_name" placeholder="Your name.." required="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Department/Account">Department/Account</label>
      </div>
      <div class="col-75">
        <select id="Department/Account" name="l_dept">
          <option value=""></option>
          <option value="Administration">Administration</option>
          <option value="Human Resources">Human Resources</option>
          <option value="Quality Assurance">Quality Assurance</option>
          <option value="Workforce Management">Workforce Management</option>
          <option value="Ops-Inexpress">Ops-Inexpress</option>
          <option value="Ops-EBS">Ops-EBS</option>
          <option value="Ops-TSN">Ops-TSN</option>
        </select>
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="Type of Leave">Type of Leave</label>
      </div>
      <div class="col-75">
        <select id="Type of Leave" name="l_type">
          <option value=""></option>
          <option value="Vacation Leave">Vacation Leave</option>
          <option value="Sick Leave">Sick Leave</option>
          <option value="Undertime">Undertime</option>
          <option value="Emergency Leave">Emergency Leave</option>
          <option value="Paternity Leave">Paternity Leave</option>
          <option value="Maternity Leave">Maternity Leave</option>
          <option value="Bereavement Leave">Bereavement Leave</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Date Start">Date Start</label>
      </div>
      <div class="col-75">
        <input type="date" name="l_Dstart">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Date End">Date End</label>
      </div>
      <div class="col-75">
        <input type="date" name="l_Dend">
      </div>
    </div>

    <h2 style="padding-top: 10px">Reason of Leave</h2>
    <p align="justify">Provide the explanation of your Leave. For undertime applications, make sure to indicate the time of departure.</p>

    <div class="row">
      <div class="col-25">
        <label for="reasonLeave">Reason</label>
      </div>
      <div class="col-75">
        <textarea id="reasonLeave" name="l_reason" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div><br>

    <div class="row">
      <input type="submit" id="ms_sbm" name="submit" value="Submit" style="font-weight:bold; background-color: #8E44AD; font-size: 16px">
    </div>
  
    </div>
  </form>

</div>
</div>
</body>
</html>
