<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Display jobs

  https://www.uuidgenerator.net/api/version1
  </title>
  <link rel="stylesheet" href="displayformdata.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<h2>Display Jobs</h2>
  <div class="table-div">  <?php
  $mysqli = new mysqli("localhost", "root", "", "jobportal");

  $mysqlquery = "SELECT * FROM tbljobs";

 echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th id="coloum-th_055"> ID </th>
          <th id="coloum-th_055"> Job title </th> 
          <th id="coloum-th_055"> Company Name </th> 
          <th id="coloum-th_055"> Company Email </th> 
          <th id="coloum-th_055"> Minimum Education </th> 
          <th id="coloum-th_055"> Required Skills </th> 
          <th id="coloum-th_055"> Minimum Experience </th> 
          <th id="coloum-th_055"> Maximun Experience </th> 
          <th id="coloum-th_055"> Job Description </th> 
          <th id="coloum-th_055"> Salary Range </th> 
          <th id="coloum-th_055"> Last date to Apply </th> 
          
      


      </tr>';

  if ($result = $mysqli->query($mysqlquery)) {

    while ($tabledatarow = $result->fetch_assoc()) {

      $id_055 = $tabledatarow["id"];
      $jobitle_055 = $tabledatarow["jobtitle"];
      $companyname_055 = $tabledatarow["companyname"];
      $companyemail_055 = $tabledatarow["companyemail"];
      $minimumeducation_055 = $tabledatarow["mininumeducation"];
      $requiredskills_055 = $tabledatarow["requiredskills"];
      $minimumexperience_055 = $tabledatarow["minimumexperience"];
      $maximumexperience_055 = $tabledatarow["maximumexperience"];
      $Jobdescription_055 = $tabledatarow["Jobdescription"];
      $salaryrange_055 = $tabledatarow["salaryrange"];
      $lastdatetoapply = $tabledatarow["lastdatetoapply"];



      echo '<tr> 
                  <td>' . $id_055 . '</td> 
                  <td>' . $jobitle_055 . '</td> 
                  <td>' . $companyname_055 . '</td> 
                  <td>' . $companyemail_055 . '</td> 
                  <td>' . $minimumeducation_055 . '</td> 
                  <td>' . $requiredskills_055 . '</td> 
                  <td>' . $minimumexperience_055 . '</td> 
                  <td>' . $maximumexperience_055 . '</td> 
                  <td>' . $Jobdescription_055 . '</td> 
                  <td>' . $salaryrange_055 . '</td> 
                  <td>' . $lastdatetoapply . '</td> 

              </tr>';
    }
    $result->free();
  }
  ?>
</div>

</body>


</html>