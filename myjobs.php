<?php

session_start();

require "./connectosql/connecttosql.php";



?>
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



    <link rel="stylesheet" href="./css/navbarstyle.css">



    <link rel="stylesheet" href="./css/footer.css">


</head>


<style>
body {
    font-family: 'Montserrat';

}

@media screen and (max-width:768px) {
    table {
        width: 100% !important;
    }

    .top-panel {
        width: 95% !important;
    }
}



table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    border: 1px solid #ddd;

}

th {
    background-color: #f2f2f2;

}

th,
td {
    text-align: left;
    padding: 8px;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

.hover_animation:hover {
    cursor: pointer;

    text-decoration: underline !important;
}

/* .hover_animation {
        position: relative;
    }

    .hover_animation:hover {
        cursor: pointer;
    }


    .hover_animation:after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #0087ca;
        transform-origin: bottom right;
        transition: transform 0.25s ease-out;
    }

    .hover_animation:hover:after {

        transform: scaleX(1);
        transform-origin: bottom left;
        cursor: pointer;
    } */
.top-panel {
    margin-top: 100px;
    padding: 3rem;
    border-radius: 50px;
    width: 95%;
}

.postedjobs,
.applications {
    /* background-color: red; */
    border-radius: 20px;
    border: 1px solid #dadada;
    padding: 20px 50px;
}

@media screen and (max-width:576px) {
    .postedjobs {
        width: 40%;
        padding: 0px !important;
    }

    .applications {
        width: 40%;
        padding: 0px !important;


    }

    .admin-panel {
        padding: 0px !important;
        display: block !important;
        width: 100%;
    }

    .top-panel {
        width: 100% !important;
        padding: 0px !important;
        border: 0px !important;
    }


}



.totaldata {
    margin-top: 150px !important;
}

.appliedjobsh5 {
    margin-bottom: 30px !important;
}

.totaldata {
    min-height: 400px;
}
</style>

<body>



    <?php


    require "navbar.php";

    ?>





    <div
        class="totaldata  w-100 d-flex justify-content-md-center flex-column align-items-center justify-content-start mb-5">
        <h5 class="text-center appliedjobsh5 ">Applied Jobs</h5>

        <table>

            <thead>
                <tr>
                    <th class="text-center">Sl.No</th>
                    <th class="text-center">Job Name</th>
                    <th class="text-center">Company name</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Salary</th>

                </tr>

            </thead>


            <tbody>

                <?php



                if (isset($_SESSION['userid'])) {


                    $user_id = $_SESSION['userid'];


                    $userappliedjobids = "SELECT * FROM userappliedjobs WHERE userid='$user_id'";

                    $result = $conn->query($userappliedjobids);

                    $alljobids = [];

                    if ($result) {



                        while ($row = $result->fetch_assoc()) {





                            $gotjobid = $row['jobid'];

                            array_push($alljobids, $gotjobid);


                        }
                    }


                    if (count($alljobids) == 0) {
                        echo '  <tr>
                        <td colspan="6"  class=" text-center " style="height:200px;">No Jobs Are Applied...</td>
                      </tr>';
                    }


                    $slno = 0;

                    foreach ($alljobids as $jobid2) {

                        $getapplicantdata2 = "SELECT * FROM recruiterpostedjobs WHERE jobid='$jobid2' ";

                        $result2 = $conn->query($getapplicantdata2);


                        if ($result2) {

                            while ($row = $result2->fetch_assoc()) {

                                $slno = $slno + 1;
                                $jobtitle = $row["jobtitle"];
                                $companyname = $row["companyname"];
                                $location = $row["location"];
                                $salary1 = $row["lowsalary"];
                                $salary2 = $row["highsalary"];
                                $gotmoneytype = $row["moneytype"];





                                if ($gotmoneytype == "lakhs") {
                                    $flag = "LPA";
                                } else {
                                    $flag = "T";
                                }




                                echo '<tr>
                            <td>' . $slno . '</td>

                            <td>' . $jobtitle . '</td>

                            <td>' . $companyname . '</td>
                            <td>' . $location . '</td>
                            <td>' . $salary1 . " - " . $salary2 . $flag . '</td>



                        </tr>';
                            }
                        }

                    }

                   



                } else {
                    echo '  <tr>
                <td colspan="6"  class=" text-center " style="height:200px;">No Jobs Are Applied...</td>
              </tr>';
                }







                ?>



            </tbody>




        </table>
    </div>




    <?php

    require "./footer.html";


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>