<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Job Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />\




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+JP:wght@300&family=Plus+Jakarta+Sans:wght@800&family=Poppins:wght@300&family=Rubik+Doodle+Triangles&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./css/navbarstyle.css">
    <link rel="stylesheet" href="./css/findjobs.css">

    <link rel="stylesheet" href="./css/footer.css">



    <style>

    </style>
</head>




<body>




    <?php


require "navbar.php";

?>






    <div class="entirecontent d-flex flex-row flex-wrap w-100 ">

        <div class="filters w-0">

        </div>

        <div class="alljoblistings d-flex  flex-row  flex-wrap justify-content-evenly w-100">
            <?php

            require "./connectosql/connecttosql.php";


            $okk = "SELECT jobid, jobtitle,location,companyname,lowsalary,highsalary,jobtype,time,perannum,moneytype,logo FROM recruiterpostedjobs ORDER BY jobid DESC";

            // $combinedArray = array(); 
            
            $result1 = $conn->query($okk);

            if ($result1) {

                // while ($row = $result1->fetch_assoc()) {
                //     $selectedJobType = json_decode($row['jobtype']); // Use true to get an associative array
                //     $combinedArray = array_merge($combinedArray, $selectedJobType);
                // }
                // print_r($combinedArray);
            

                while ($row = $result1->fetch_assoc()) {

                    $gottitle = $row["jobtitle"];
                    $gotcompanyname = $row["companyname"];
                    $gotlocation = $row["location"];
                    $gotsalary1 = $row["lowsalary"];
                    $gotsalary2 = $row["highsalary"];
                    $gotjobid = $row["jobid"];
                    $gotmoneytype = $row["moneytype"];
                    $perannum = $row["perannum"];

                    $logo=$row["logo"];


                    

                     if ($gotmoneytype=="lakhs"){
                       $flag="LPA";
                     }
                     else{
                        $flag="T";
                     }

                    



                    date_default_timezone_set('Asia/Kolkata');

                    // Assuming $row["date"] contains the date from your database
                    $postedDate = new DateTime($row["time"]);


                    $currentDate = new DateTime(); // Assuming "20-12-2023" is in the format "dd-mm-yyyy"

                    $interval = $currentDate->diff($postedDate);



                    // Now you can access the difference between the two dates using the $interval object
            









                    $gotjobtype = [];


                    if (strlen($row["jobtype"]) > 2) {


                        $gotjobtype = json_decode($row["jobtype"]);

       
                    }



                    require "job_list_in_index.php";

                    $gotjobtype = [];



                }
            } else {
                echo "Error executing query: " . $conn->error;
            }
            ?>
        </div>



    </div>



    <?php
    
    require "./footer.html";
    
    
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>


    <script src="./scripts/index.js">
    </script>
    <script src="./scripts/navbar.js"></script>




    </script>
</body>

</html>