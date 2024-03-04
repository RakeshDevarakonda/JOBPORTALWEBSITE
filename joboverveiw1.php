<!DOCTYPE html>
<html lang="en">

<head>
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

    <link rel="stylesheet" href="./css/footer.css">

    <link rel="stylesheet" href="./css/navbarstyle.css">
    <style>
    .logoinoverveiw img {
        height: 40px;
    }

    .jobname {
        font-size: 28px;
    }


    .applybutton:hover {
        color: black !important;
        background-color: transparent !important;
        border: 1px solid rgb(13, 110, 253) !important;
    }

    .applybutton:hover>h5 {
        color: black !important;
    }


    .applybutton:hover>i {
        color: black !important;
    }





    .fa-layer-group {
        font-size: 30px;
        margin-top: 5px;
    }

    body {
        font-family: Montserrat !important;
    }


    @media screen and (max-width:992px) {
        .firsttopdata {
            width: 80% !important;
        }
    }




    @media screen and (max-width:768px) {

        .firsttopdata {
            justify-content: space-between !important;
            width: 100% !important;
        }




        .descriptiondata2 {
            width: 100% !important;
        }


        .joboverveiwcontentright {
            width: 100% !important;
            background-color: red;
            margin: 50px 0px 0px 0px !important;
        }

        .joboverveiwcontentright2 {
            width: 100% !important;
        }

        .descriptiondata {
            width: 100% !important;
            justify-content: center !important;
        }



        .applybutton {
            width: 100% !important;

        }




    }


    .applybutton i {
        color: white;
    }


    @media screen and (max-width:576px) {
        .firsttopdata {
            padding: 10px !important;
            width: 100% !important;
            flex-direction: column !important;
            /* border: 1px solid white !important; */
        }

        .logoandtitle {
            width: 100% !important;
            justify-content: center !important;
        }

        .applybuttondiv {
            width: 100% !important;
        }

        .applybutton {
            padding: 10px !important;
            margin: 0px !important;
        }

        .logoinoverveiw {
            /* margin-right: 30px; */
        }
    }


    body {

        font-family: Jost, sans-serif;

    }

    .logoandtitle {
        width: 70%;
    }

    .applybuttondiv {
        width: 30%;
    }

    .firsttopdata {

        width: 70%;
    }

    .applybutton {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .applypara {
        margin: 0px;
    }


    .applypara {
        color: white;
    }

    .descandright {
        width: 100%;
    }

    .descriptiondata {
        width: 60%;
    }


    .descriptiondata2 {
        width: 90%;
    }

    .joboverveiwcontentright {
        width: 30%;
    }

    .logoinoverveiw img {
        height: 50px;
    }

    .entirejobdata {
        margin-top: 150px;
    }

    .makebold {
        /* opacity: 0.9; */

        /* background-color: aqua; */
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .makebold+p {
        opacity: 0.5;
    }

    .education,
    .rolesandres,
    .workexp {
        opacity: 0.5;

    }

    .joboverveiwcontentright2 {
        background-color: aliceblue;
        padding: 10px 0px 0px 40px;
    }

    .joboverveiwtitle {
        margin-bottom: 25px;
    }

    .titleinoverveiw,
    .openingsinoverveiw,
    .perksandbenfinoverveiw,
    .worktypeinoverveiw,
    .skillsinoverveiw,
    .jobtypeinoverveiw,
    .noeinoverveiw,
    .salaryinoverveiw,
    .locationinoverveiw {
        /* background-color: red !important; */
        margin: 0px !important;
        text-transform: capitalize;
    }

    .divmaintag p {
        font-size: 15px;
        opacity: 0.8;
    }

    .divmaintag h5 {
        font-weight: 500;
        font-size: 20px;
    }

    .divmaintag button {
        margin: 10px 10px 10px 0px;
    }

    .firsttopdata {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }
    </style>
</head>

<body>


    <?php


    require "navbar.php";

    ?>




    <?php

    $jobidinjoboverveiw = $_GET['jobidinjoboverveiw'];






    require "./connectosql/connecttosql.php";





    $okk2 = "SELECT * FROM recruiterpostedjobs WHERE jobid=$jobidinjoboverveiw ";



    $myresult = mysqli_query($conn, $okk2);


    while ($row = $myresult->fetch_assoc()) {

        $gottitle = $row["jobtitle"];
        $gotcompanyname = $row["companyname"];
        $gotlocation = $row["location"];
        $gotsalary1 = $row["lowsalary"];
        $gotsalary2 = $row["highsalary"];
        $gotjobid = $row["jobid"];
        $gotjobdescription = $row["description"];
        $logo = $row["logo"];

        if (strlen($row["jobtype"]) > 2) {


            $gotjobtype = json_decode($row["jobtype"]);
        }





        if (strlen($row["workmode"]) > 2) {


            $gotworkmode = json_decode($row["workmode"]);
        }

        if (strlen($row["skills"]) > 2) {


            $gotskills = json_decode($row["skills"]);
        }


        if (strlen($row["perksandbenifits"]) > 2) {


            $gotperksandbenifits = json_decode($row["perksandbenifits"]);
        }




        if (strlen($row["companyinfo"]) > 0) {


            $gotcompanyinfo = ($row["companyinfo"]);
        }

        if (($row["numberofemployees"]) != 0) {


            $gotnumberofemployees = ($row["numberofemployees"]);
        }


        if (strlen($row["education"]) > 0) {


            $goteducation = ($row["education"]);
        }
        if (strlen($row["rolesandres"]) > 0) {


            $gotrolesandres = ($row["rolesandres"]);
        }


        if (strlen($row["workexp"]) > 0) {


            $gotworkexp = ($row["workexp"]);
        }


        if (($row["openings"]) != 0) {


            $gotopenings = ($row["openings"]);
        }




        $gotmoneytype = $row["moneytype"];
        $perannum = $row["perannum"];

        if ($gotmoneytype == "lakhs") {
            $flag = "LPA";
        } else {
            $flag = "T";
        }





        date_default_timezone_set('Asia/Kolkata');

        // Assuming $row["date"] contains the date from your database
        $postedDate = new DateTime($row["time"]);
        $currentDate = new DateTime(); // Assuming "20-12-2023" is in the format "dd-mm-yyyy"
    
        $interval = $currentDate->diff($postedDate);



        // Now you can access the difference between the two dates using the $interval object
    














        require "joboverveiw2.php";
    
        $gotjobtype = [];
    }













    ?>


    <?php
    require "./footer.html"
        ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script src="./scripts/joboverveiw.js"></script>
    <script src="./scripts/navbar.js"></script>

</body>

</html>