<?php
session_start();

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
    <link rel="stylesheet" href="./css/findjobs.css">

    <link rel="stylesheet" href="./css/footer.css">


    <style>
    body {
        font-family: 'Montserrat';

    }

    @media screen and (min-width:992px) {
        .items {
            width: 30% !important;
        }




    }


    @media screen and (min-width:1100px) {
        .items {
            width: 23% !important;
        }

    }


    @media screen and (max-width:992px) {

        .items {
            width: 45% !important;
        }

        .jobdesign {
            width: 100% !important;
        }

        .content {
            width: 100% !important;
            justify-content: center !important;

        }



        .content img {
            max-width: 90% !important;
        }

        .sidetextinjobdesign {

            width: 100% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            margin-top: 20px;

        }

        .sidetexinjobdesign2 {
            width: 90% !important;
        }


        .recruiterapplyjob2 {
            width: 100% !important;
        }






    }


    @media screen and (max-width:768px) {

        nav {
            height: 80px !important;
        }

        .maintheme {
            margin-top: 80px !important;
        }


        .items {
            width: 45% !important;
        }

        .recruiterapplyjob2 {
            width: 90% !important;
            flex-direction: column !important;
        }

        .textandbutton {
            width: 100% !important;
        }

        .textandbutton2 {
            width: 100% !important;

        }

        .logoofrecruiterapplyjob {
            display: none !important;
        }



        .textandbutton2 {
            margin-left: 0px !important;
        }



    }




    @media screen and (max-width:576px) {


        .maintheme {
            padding: 10px !important;
        }


        .box {
            display: flex !important;
            flex-direction: column !important;
            box-shadow: 0px 0px !important;

        }

        .jobsearch {
            width: 100% !important;

        }

        .buttondiv {
            width: 100% !important;
        }

        .jobsearch {
            border-radius: 10px !important;
            box-shadow: 0px 0px 100px 1px rgb(214, 212, 212);

        }

        .inputbutton {

            padding: 20px !important;
        }


        .items {
            width: 40% !important;
        }

        .allitemsinpopularcategories {
            width: 100% !important;
        }


        .jobdesign {
            width: 100% !important;
        }

        .sidetexinjobdesign2 {
            width: 100% !important;
            margin: 10px;
        }

        .content img {
            max-width: 90% !important;
        }






    }


    .navbar,
    .pc {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s linear;
    }


    @media screen and (max-width:450px) {


        .maintheme {
            padding: 0px !important;
        }

        .lefside {
            padding: 20px 0px 0px 0px !important;
        }

        .items {
            width: 100% !important;
            justify-content: center;

        }

        .allitemsinpopularcategories {
            width: 90% !important;
        }

    }







    .maintheme {
        height: 500px;
        width: 100%;
        background-color: aliceblue;
        padding: 40px;
    }

    .lefside {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s linear;

    }

    .rightside {
        opacity: 0;

        transition: all 0.5s linear;
    }




    .box {
        width: 100%;
        margin-top: 20px;
        box-shadow: 0px 0px 100px 1px rgb(214, 212, 212);
        border-radius: 10px;

    }


    .jobsearch {
        width: 70%;

    }

    .buttondiv {
        width: 30%;
    }

    .items {
        background: linear-gradient(to left, DeepSkyBlue 50%, transparent 50%);
        background-size: 200% 100%;
        transition: background-position 0.5s ease-in-out;
    }

    .items:hover {
        background-position: -100% 0;
        color: white;
    }

    .items:hover .itemicons>i {
        color: black !important;
    }


    .inputbox {
        border: 0px;
        outline: 0;
        background-color: aliceblue;
        width: 80%;
    }


    .inputbutton {
        outline: 0;
        border: 0px;


    }




    .popular-categories {
        opacity: 0;
        transform: translateY(20px);
        transition: all 1s ease-in-out;

    }

    .popular-categories {
        width: 100%;
    }

    .allitemsinpopularcategories {
        width: 90%;
    }


    .itemicons {
        font-size: 5vh;
        margin-right: 5vh !important;
    }

    .items {
        box-shadow: 0px 0px 100px 1px rgb(214, 212, 212);
        padding: 15px;
        border-radius: 20px;
        margin-bottom: 20px;


    }

    .pctext {
        font-size: 2.5vh !important;
    }

    .itemtext p {
        font-size: 1.5vh !important;
    }

    .mainjobdesign {
        width: 100%;
    }

    .jobdesign {
        width: 90%;
    }

    .content {
        width: 55%;
        display: flex;
        justify-content: start;
        align-items: center;
        transform: translateX(-50px);
        opacity: 0;
        transition: all 0.5s linear;

    }

    .content img {
        max-width: 80%;
        border-radius: 10px;
        height: auto;
    }

    .sidetextinjobdesign {
        transform: translateX(50px);
        opacity: 0;
        transition: all 0.5s linear;

        width: 45%;
    }

    .milliondesign2 {
        opacity: 0;

        transform: scale(0.5);
        transition: all 0.5s linear;

    }



    .milliondesign2 h5 {
        font-size: 5vh;
    }

    .milliondesign2 p {
        font-size: 2vh;
    }

    .recruiterapplyjob {
        width: 100%;
    }

    .recruiterapplyjob2 {
        width: 90%;
    }

    .textandbutton {
        width: 60%;
    }

    .textandbutton2 {
        width: 80%;

        opacity: 0;
        transform: translateX(-50px);
        transition: all 0.5s linear;
    }



    .logoofrecruiterapplyjob {
        width: 40%;

        transform: translateX(50px);
        opacity: 0;
        transition: all 0.5s linear;
    }

    .logoofrecruiterapplyjob img {
        max-width: 70%;
        transform: scaleX(-1);

    }

    .maintheme {
        margin-top: 100px;
        font-family: 'Montserrat';

    }

    .searchjobsbtn:hover,
    .recruitbtn:hover {
        background-color: aliceblue !important;
        color: black !important;
    }
    </style>

</head>



<body>



    <?php


require "navbar.php";

?>








    <div class="maintheme   d-flex flex-row justify-content-evenly ">



        <div class="lefside d-flex justify-content-center flex-column ">
            <h1 class="mb-5 ">
                <span style="color: rgb(0, 106, 255);">1000+ </span>Job oppurtunities Wating For You...
            </h1>


            <h1 class="mb-5"> Find Your <span style="color: rgb(0, 106, 255);">Dream</span> Job Here</h1>



            <div class="box d-flex flex-row">


                <div class="jobsearch d-flex flex-row  align-items-center">
                    <i class="ms-4 p-4 fa-solid  fa-magnifying-glass"></i>
                    <input type="text" class="inputbox p-4" name="" id="" placeholder="Search For Job Title">
                </div>



                <div class="buttondiv d-flex justify-content-center align-items-center">
                    <input type="button"
                        class=" w-100 h-75 me-2 findjobsbutton rounded-3 border border-1 border rounded-3 bg-info  inputbutton"
                        value="find jobs">
                </div>





            </div>

            <div class="mt-4 popular ">
                <p>Popular Searches :Software Developer, Software Engineer, UI/UX Designer</p>
            </div>
        </div>


        <div class="rightside d-none d-md-flex  justify-content-center">

            <img src="otherimages/wepik-export-20231217114252TSqc-removebg-preview.png" height="450px" alt="">
        </div>



    </div>


    <div class="popular-categories mt-5  d-flex flex-wrap justify-content-center mb-4">

        <h1 class="text-center mt-5 mb-5 pc">Popular Categories</h1>

        <div class="allitemsinpopularcategories d-flex flex-wrap flex-row justify-content-evenly">



            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="fa-solid fa-computer"></i>

                </div>


                <div class="itemtext">
                    <h5 class="pctext">Software</h5>
                    <p>(4000+ Openings)</p>
                </div>

            </div>



            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="p-2 fa-solid fa-coins"></i>

                </div>


                <div class="itemtext">
                    <h5 class="pctext">Finance</h5>
                    <p>(400+ Openings)</p>
                </div>

            </div>


            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="fa-solid fa-square-poll-vertical"></i>
                </div>


                <div class="itemtext">
                    <h5 class="pctext">Marketing</h5>
                    <p>(900+ Openings)</p>
                </div>

            </div>

            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>


                <div class="itemtext">
                    <h5 class="pctext">Design</h5>
                    <p>(900+ Openings)</p>
                </div>

            </div>


            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="fa-solid fa-code"></i>

                </div>


                <div class="itemtext">
                    <h5 class="pctext">Development</h5>
                    <p>(8000+ Openings)</p>
                </div>

            </div>


            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="fa-solid fa-gamepad"></i>

                </div>


                <div class="itemtext">
                    <h5 class="pctext">Gaming</h5>
                    <p>(4000+ Openings)</p>
                </div>

            </div>



            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="fa-solid fa-stethoscope"></i>

                </div>


                <div class="itemtext">
                    <h5 class="pctext">Health</h5>
                    <p>(200+ Openings)</p>
                </div>

            </div>







            <div class="items d-flex flex-row  ">

                <div class="itemicons d-flex justify-content-center align-items-start ">

                    <i class="fa-solid fa-fingerprint"></i>
                </div>


                <div class="itemtext">
                    <h5 class="pctext">Security</h5>
                    <p>(1000+ Openings)</p>
                </div>

            </div>



        </div>




    </div>



    <div style="background-color:aliceblue;"
        class="mainjobdesign d-flex flex-row mb-5 mt-5  p-5 justify-content-center align-items-start ">

        <div class="jobdesign d-flex flex-column flex-lg-row ">
            <div class="content">
                <img src="otherimages/jobdesign.jpg" height="200px" alt="">
            </div>
            <div class="sidetextinjobdesign">
                <div class="sidetexinjobdesign2">
                    <p style="color: blue; font-size: 4vh;">Millions Of Jobs Find The Right One For You</p>
                    <p>Search all the open positions on the web. Get your own personalized salary estimate. Read
                        reviews
                        on
                        over 600,000 companies worldwide. The right job is out there.</p>
                    <button class="p-2 btn btn-primary searchjobsbtn"> Search Jobs</button>
                </div>
            </div>
        </div>


    </div>


    <div class="  alljoblistings d-flex flex-row flex-wrap justify-content-evenly
        w-100">


        <?php
        require "./connectosql/connecttosql.php";
        $okk = "SELECT jobid, jobtitle,location,companyname,lowsalary,highsalary,jobtype,time,perannum,moneytype,logo FROM recruiterpostedjobs";

        // $combinedArray = array(); 
        
        $result1 = $conn->query($okk);

        if ($result1) {

            // while ($row = $result1->fetch_assoc()) {
            //     $selectedJobType = json_decode($row['jobtype']); // Use true to get an associative array
            //     $combinedArray = array_merge($combinedArray, $selectedJobType);
            // }
            // print_r($combinedArray);
        

            $i=0;
            while (($row = $result1->fetch_assoc()) && $i<=5) {

                $i=$i+1;

                $gottitle = $row["jobtitle"];
                $gotcompanyname = $row["companyname"];
                $gotlocation = $row["location"];
                $gotsalary1 = $row["lowsalary"];
                $gotsalary2 = $row["highsalary"];
                $gotjobid = $row["jobid"];
                $gotmoneytype = $row["moneytype"];
                $perannum = $row["perannum"];

                $logo = $row["logo"];




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








    <div style="background-color:aliceblue;"
        class="milliondesign mt-5 mb-5  d-flex flex-row flex-wrap p-5 justify-content-evenly">
        <div class="activeusers milliondesign2 p-2  d-flex justify-content-center align-items-center flex-column ">

            <h5>3M+</h5>
            <p>Active Users</p>
        </div>
        <div class="jobopenings milliondesign2 p-2  d-flex justify-content-center align-items-center flex-column ">

            <h5>8M+</h5>
            <p>Jon Openings</p>
        </div>
        <div class="applingjob milliondesign2 p-2  d-flex justify-content-center align-items-center flex-column ">

            <h5>2M+</h5>
            <p>Jobs Applied Everyday</p>
        </div>
    </div>


    <div class="recruiterapplyjob d-flex justify-content-center align-items-center">

        <div class="recruiterapplyjob2 d-flex justify-content-center align-items-center flex-row">
            <div class="textandbutton d-flex justify-content-end align-items-end flex-column">
                <div class="textandbutton2 ms-5">
                    <h2 class="mb-4" style="color:blue;">
                        Recruite Now ?
                    </h2>
                    <p>
                        Advertise your jobs to millions of monthly users and search 15.8 million
                        CVs in our database.
                    </p>
                    <button class="btn btn-primary recruitbtn ">Post A Job</button>
                </div>

            </div>
            <div class="logoofrecruiterapplyjob d-flex justify-content-center">
                <img src="otherimages/9411475-removebg-preview.png" alt="">
            </div>
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


    <script>
    document.addEventListener("DOMContentLoaded", () => {



        setTimeout(() => {
            var container = document.querySelector('.lefside');
            container.style.opacity = 1;
            container.style.transform = 'translateY(0)';

        }, 500);



        setTimeout(() => {
            var container = document.querySelector('.rightside');
            container.style.opacity = 1;

        }, 500);


        setTimeout(() => {
            var container = document.querySelector('.popular-categories');
            container.style.opacity = 1;
            container.style.transform = 'translateY(0)';


        }, 500);



        setTimeout(() => {
            var container = document.querySelector('.navbar');
            container.style.opacity = 1;
            container.style.transform = 'translateY(0)';


        }, 500);

        setTimeout(() => {
            var container = document.querySelector('.pc');
            container.style.opacity = 1;
            container.style.transform = 'translateY(0)';


        }, 500);






    })

    window.addEventListener("scroll", () => {
        let content = document.querySelector(".content")
        let rect = content.getBoundingClientRect()
        if (rect.top < window.innerHeight) {
            content.style.opacity = 1;
            content.style.transform = 'translateY(0)';

        }


        let sidetextinjobdesign = document.querySelector(".sidetextinjobdesign")
        let rect2 = sidetextinjobdesign.getBoundingClientRect()
        if (rect2.top < window.innerHeight) {
            sidetextinjobdesign.style.opacity = 1;
            sidetextinjobdesign.style.transform = 'translateY(0)';

        }


        let milliondesign = document.querySelectorAll(".milliondesign2")


        milliondesign.forEach((e) => {



            let rect3 = e.getBoundingClientRect()
            if (rect3.top < window.innerHeight) {

                e.style.opacity = 1;
                e.style.transform = 'scale(1.1)';
            }
        })


        let textandbutton2 = document.querySelector(".textandbutton2")
        let rect4 = textandbutton2.getBoundingClientRect()
        if (rect4.top < window.innerHeight) {
            textandbutton2.style.opacity = 1;
            textandbutton2.style.transform = 'translateX(0)';

        }

        let logoofrecruiterapplyjobimg = document.querySelector(".logoofrecruiterapplyjob")
        let rect5 = logoofrecruiterapplyjobimg.getBoundingClientRect()
        if (rect5.top < window.innerHeight) {
            logoofrecruiterapplyjobimg.style.opacity = 1;
            logoofrecruiterapplyjobimg.style.transform = 'translateX(0)';

        }

    })



    document.querySelector(".hamburgericon").addEventListener("click", () => {
        document.querySelector(".homeandother").classList.add("responsivenav")
    })


    document.querySelector(".fa-xmark").addEventListener("click", () => {
        document.querySelector(".homeandother").classList.remove("responsivenav")
    })

    document.querySelector(".recruitbtn").addEventListener("click", () => {
        window.location.href = "postjobs.php"
    })
    document.querySelector(".searchjobsbtn").addEventListener("click", () => {
        window.location.href = "findjobs.php"
    })

    document.querySelector(".findjobsbutton").addEventListener("click", () => {
        window.location.href = "findjobs.php"
    })
    </script>


    <script src="./scripts/navbar.js"></script>

</body>

</html>