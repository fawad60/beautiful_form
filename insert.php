

<?php



/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";
}
*/

// Create connection
$conn = new mysqli('localhost', 'root', '', 'jobportal');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connected";
}

// sql to create table 
/*
$sql =CREATE TABLE IF NOT EXISTS  `tbljobs` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `jobtitle` VARCHAR(200) NOT NULL,
  `companyname` VARCHAR(300) NOT NULL,
  `companyemail` VARCHAR(200) NOT NULL,
  `mininumeducation` VARCHAR(1000) NOT NULL,
  `requiredskills` VARCHAR(2000) NOT NULL,
  `minimumexperience` VARCHAR(200) NOT NULL,
  `maximumexperience` VARCHAR(200) NOT NULL,
  `Jobdescription` VARCHAR(3000) NOT NULL,
  `salaryrange` VARCHAR(100) NOT NULL,
  `lastdatetoapply` DATE NOT NULL
)

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/

	 $jobtitle_055 = $_POST["jobtitlevar"];
	 $companyname_055 = $_POST["companynamevar"];
   $companyemail_055 = $_POST["companyemailvar"];
   $mininumeducation_055 = $_POST["mininumeducationvar"];
   $requiredskills_055 = $_POST["requiredskillsvar"];
   $minimumexperience_055 = $_POST["minimumexperiencevar"];
   $maximumexperience_055 = $_POST["maximumexperiencevar"];
   $Jobdescription_055 = $_POST["Jobdescriptionvar"];
   $salaryrange_055 = $_POST["salaryrangevar"];
   $lastdatetoapply_055 = $_POST["lastdatetoapplyvar"];

   

	 $sql = "INSERT INTO tbljobs (jobtitle,companyname,companyemail,mininumeducation,requiredskills,
   minimumexperience,maximumexperience,Jobdescription,salaryrange,lastdatetoapply) 
   values('$jobtitle_055','$companyname_055','$companyemail_055','$mininumeducation_055',
   '$requiredskills_055','$minimumexperience_055','$maximumexperience_055','$Jobdescription_055',
   '$salaryrange_055','$lastdatetoapply_055')";
	
  $sqlqu=$conn->query($sql);

  //https://www.uuidgenerator.net/api/version1

?>


