<?php include "dbConnection.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/application.css">
<title>Overtime Application</title>
</head>
<body>



<div class="container-login100">
    <div class="wrap-overtime">
      <h1>OVERTIME APPLICATION</h1>
      <p>Welcome to the Extreme Outsource Solutions Overtime Application System.<br><br>
  		In this page you will be applying for the approval of your rendered overtime. Once applied, your overtime will undergo approval on 2 levels. First approval will be under HR or by immediate superior, and the Final Approval will be under Management.<br><br>

  		The approval process will take 48 hours, and you will be notified if it is approved or not.</p>
      <br>
      <br>

    <div class="container">
   <form action="employeeFunctions.php" method="post">
     <div class="row">
       <div class="col-25">
        <label>Employee Name</label>
       </div>
       <div class="col-75">
        <input type="text" name="o_name" placeholder="Your name.." required="">
       </div>
     </div>


      <div class="row">
        <div class="col-25">
          <label>Date Rendered</label>
        </div>
        <div class="col-75">
          <input type="date" name="o_date" required="">
        </div>
      </div>


      <div class="row">
        <div class="col-25">
          <label >Time Started</label>
        </div>
        <div class="col-75">
          <input type="time" name="o_tart" required="">
        </div>
      </div>

     
      <div class="row">
        <div class="col-25">
          <label>Time Ended</label>
        </div>
        <div class="col-75">
          <input type="time" name="o_end" required="">
        </div>
      </div>
    
       <div class="row">
       <div class="col-25">
         <label>Number of Hours</label>
       </div>
       <div class="col-75">
         <input type="Number"name="num" placeholder="hours" required="">
       </div>
      </div>

      <div class="row">
      <div class="col-25">
        <label >Reason of Overtime</label>
      </div>
      <div class="col-75">
        <textarea id="o_reason" name="o_reason" placeholder="Write something.." required="" style="height:200px"></textarea>
      </div>
    </div><br>

     <div class="row">
     <!--  <input type="submit" value="Submit"> -->
     <input type="submit" id="ms_add" name="submit1" style="font-weight:bold; background-color: #8E44AD; font-size: 16px">
     </div>

   </form>
   </div>

</div>
</div>
</body>
</html>