<?php





require "./connectosql/connecttosql.php";


session_start();

if (isset($_SESSION['userid'])) {


    $user_id = $_SESSION['userid'];



    if ($_SERVER["REQUEST_METHOD"] == "POST") {


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











        if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            


            $targetDir = "images/";
            $fileName = basename($_FILES["file"]["name"]);



            $uniqueID = time();
            $uniqueFileName = $uniqueID . "_" . $fileName;
            $targetFilePath = $targetDir . $uniqueFileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);


            


            $stmt = $conn->prepare("INSERT INTO recruiterpostedjobs (userid,companyname, companyinfo, numberofemployees, jobtitle, location, education, description, rolesandres, workexp, jobtype, workmode, skills, openings, lowsalary, highsalary, perksandbenifits,moneytype,perannum,logo) VALUES (?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");


            $stmt->bind_param("ississsssssssiiissss", $user_id, $companyname, $aboutyourcompany, $numberofemployees, $jobtitle, $location, $educationdetails, $jobdescription, $rolesandres, $workexp, $jobtype, $workmode, $skillsdiv, $openings, $salary1, $salary2, $selectedperksandbenifits, $moneyType, $perannum,$uniqueFileName);

            $stmt->execute();

            header("Location:postedjobs.php");
            
        } else {
            

            $stmt = $conn->prepare("INSERT INTO recruiterpostedjobs (userid,companyname, companyinfo, numberofemployees, jobtitle, location, education, description, rolesandres, workexp, jobtype, workmode, skills, openings, lowsalary, highsalary, perksandbenifits,moneytype,perannum) VALUES (?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


            $stmt->bind_param("ississsssssssiiisss", $user_id, $companyname, $aboutyourcompany, $numberofemployees, $jobtitle, $location, $educationdetails, $jobdescription, $rolesandres, $workexp, $jobtype, $workmode, $skillsdiv, $openings, $salary1, $salary2, $selectedperksandbenifits, $moneyType, $perannum);

            $stmt->execute();
            
            header("Location:postedjobs.php");

        }







        // $sql = "SELECT * FROM recruiterpostedjobs ";

        // $result = $conn->query($sql);


        // if ($result->num_rows > 0) {

        //     $row = $result->fetch_assoc();
        //     $fileName = $row["logo"];

        //     $filePath = "images/" . $fileName;



        //     echo "<img src=$filePath width='200px';height='200px';> ";
        // }



























    }


    // echo $user_id;
}





?>














<!DOCTYPE html>
<html lang="en">

<lhead>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+JP:wght@300&family=Plus+Jakarta+Sans:wght@800&family=Poppins:wght@300&family=Rubik+Doodle+Triangles&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="./css/navbarstyle.css">
    <link rel="stylesheet" href="./css/postjobs.css">

</lhead>

<body>

    <?php


require "navbar.php";

?>










    <?php


    if (isset($_SESSION['userid'])) {

        require "postjobs.html";
    }
    else{
        header("location:login.php");
    }

    ?>














    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="./scripts/postjobs.js"></script>
    <script src="./scripts/navbar.js"></script>

</body>

</html>