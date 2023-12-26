<?php




require "./connectosql/connecttosql.php";


session_start();



if (isset($_SESSION['userid'])) {


    $user_id = $_SESSION['userid'];

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {





    $jobid = $_POST["jobidfromprevious"];
    $companyname = $_POST["companyname"];
    $jobtitle = $_POST["jobtitle"];
    $salary1 = ($_POST["salary1"]);
    $salary2 = $_POST["salary2"];
    $moneyType = $_POST["moneytype"];
    $perannum = $_POST["perannum"];


    $jobtype = json_encode(json_decode($_POST["selectedjobtype"]));


    $workmode = json_encode(json_decode($_POST["selectedshift"]));
    $selectedperksandbenifits = json_encode(json_decode($_POST["selectedperksandbenifits"]));
    
    $skillsdiv = json_encode(json_decode($_POST["skillsdiv"]));








    $numberofemployees = (strlen(trim($_POST["noe"])) == 0) ? '' : trim($_POST["noe"]);

    $openings = (strlen(trim($_POST["openings"])) == 0) ? '' : trim($_POST["openings"]);
    $aboutyourcompany = (strlen(trim($_POST["companyinfo"])) == 0) ? '' : trim($_POST["companyinfo"]);
    $location = (strlen(trim($_POST["location"])) == 0) ? '' : trim($_POST["location"]);
    $educationdetails = (strlen(trim($_POST["educationdetails"])) == 0) ? '' : trim($_POST["educationdetails"]);
    $rolesandres = (strlen(trim($_POST["rolesandres"])) == 0) ? '' : trim($_POST["rolesandres"]);
    $workexp = (strlen(trim($_POST["workexp"])) == 0) ? '' : trim($_POST["workexp"]);
    $jobdescription = (strlen(trim($_POST["jobdescription"])) == 0) ? '' : trim($_POST["jobdescription"]);



    $sql = "UPDATE recruiterpostedjobs SET companyname = ?, companyinfo = ?, numberofemployees = ?, jobtitle = ?, location = ?, education = ?, description = ?, rolesandres = ?, workexp = ?, jobtype = ?, workmode = ?, skills = ?, openings = ?, lowsalary = ?, highsalary = ?, perksandbenifits = ?, moneytype = ? WHERE jobid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisssssssssiiissi", $companyname, $aboutyourcompany, $numberofemployees, $jobtitle, $location, $educationdetails, $jobdescription, $rolesandres, $workexp, $jobtype, $workmode, $skillsdiv, $openings, $salary1, $salary2, $selectedperksandbenifits, $moneyType, $jobid );


    if ($stmt->execute()) {
        header("Location: postedjobs.php");

    }
































}













?>