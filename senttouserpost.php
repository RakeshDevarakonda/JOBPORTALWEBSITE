<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jobdatabase';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_SESSION['userid'])) {

        $user_id = $_SESSION['userid'];






        if ($_FILES["resume"]["error"] == UPLOAD_ERR_OK) {



            $targetDir = "resume/";
            $fileName = basename($_FILES["resume"]["name"]);



            $uniqueID = time();
            $uniqueFileName = $uniqueID . "_" . $fileName;
            $targetFilePath = $targetDir . $uniqueFileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath);





            // $stmt = $conn->prepare("INSERT INTO recruiterpostedjobs (userid,companyname, companyinfo, numberofemployees, jobtitle, location, education, description, rolesandres, workexp, jobtype, workmode, skills, openings, lowsalary, highsalary, perksandbenifits,moneytype,perannum,logo) VALUES (?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");


            // $stmt->bind_param("ississsssssssiiissss", $user_id, $companyname, $aboutyourcompany, $numberofemployees, $jobtitle, $location, $educationdetails, $jobdescription, $rolesandres, $workexp, $jobtype, $workmode, $skillsdiv, $openings, $salary1, $salary2, $selectedperksandbenifits, $moneyType, $perannum, $uniqueFileName);

            // $stmt->execute();


        }

        $name = $_POST["name"];
        $phoneNumber = $_POST["number"];
        $email = $_POST["email"];
        $jobid = $_POST["jobid"];

        echo $phoneNumber;



        $sql = "INSERT INTO userappliedjobs (userid, jobid, name, email, number,resume) 
        VALUES ('$user_id','$jobid','$name', '$email', '$phoneNumber', '$uniqueFileName' )";


        $result = $conn->query($sql);
        if ($result) {
            header("Location:myjobs.php");

        }


    }
}





















?>