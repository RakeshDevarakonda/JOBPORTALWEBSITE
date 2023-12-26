<?php


require "./connectosql/connecttosql.php";


session_start();

$jobidfromeditjob = $_GET['jobid'];

if (isset($_SESSION['userid'])) {


    $user_id = $_SESSION['userid'];


    $sql = "SELECT * FROM recruiterpostedjobs where jobid='$jobidfromeditjob'";
    $result = $conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()) {


            $companyname = $row["companyname"];
            $aboutyourcompany = $row["companyinfo"];
            $numberofemployees = $row["numberofemployees"];
            $jobtitle = $row["jobtitle"];
            $location = $row["location"];
            $educationdetails = $row["education"];
            $jobdescription = $row["description"];
            $rolesandres = $row["rolesandres"];
            $workexp = $row["workexp"];
            $jobtype = (json_decode($row["jobtype"]));
            $workmode = (json_decode($row["workmode"]));
            $skillsdiv = (json_decode($row["skills"]));
            $openings = $row["openings"];
            $salary1 = $row["lowsalary"];
            $moneyType = $row["moneytype"];
            $salary2 = $row["highsalary"];
            $selectedperksandbenifits = (json_decode($row["perksandbenifits"]));
            $logo = $row["logo"];

            // $skillsdivlength = count($skillsdiv);


            // if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
            //     $targetDir = './images/';
            //     $fileName = basename($_FILES['{input_name=}']['name']);
            
            //     $uniqueID = time();
            //     $uniqueFileName = $uniqueID . '_' . $fileName;
            //     $targetFilePath = $targetDir . $uniqueFileName;
            //     $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                
            //     // move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath);
            
            // }



            

            
            


            

            



            












        }
    }

}




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
    <link rel="stylesheet" href="./css/postjobs.css">
    <link rel="stylesheet" href="./css/navbarstyle.css">


    <style>
    li {
        list-style-type: none;
    }
    </style>
</head>

<body>



    <?php


require "navbar.php";

?>



    <div class="formdata  d-flex justify-content-center flex-column align-items-center">


        <form action="savedata.php" method="post" class=" form d-flex justify-content-center flex-wrap "
            enctype="multipart/form-data">

            <h2 class="text-center">Edit Job</h2>

            <div class=" comanyinfo d-flex flex-column">




                <div class="subcompanyinfo d-flex flex-wrap w-100 ">
                    <div class="formtable  ">
                        <label for="companyname">Comapany Name</label>
                        <input type="text" value="<?php echo $companyname ?>" id=" companyname" name="companyname">
                    </div>

                    <div class="formtable ">
                        <label for="noe">Number of Employees</label>
                        <input type="text" value="<?php echo $numberofemployees ?>" id=" noe" name="noe">
                    </div>

                    <div class="formtable  w-50">
                        <label for="companyinfo">About your company</label>
                        <textarea name="companyinfo" id="companyinfo" cols="10" rows="10"></textarea>
                    </div>

                    <!-- <div class="formtable  w-50">
                        <label for="">Company Logo</label>
                        <input type="file" name="file">

                        <?php 
                        if (strlen($logo)>5){
                            echo "<a target'_blank' href='./images/$logo'>$logo</a>";
                        }?>


                    </div> -->


                </div>


            </div>

            <div class="jobinfo d-flex flex-column ">

                <div class="jobinformation d-flex flex-wrap">
                    <div class="1  ">
                        <label for="jobtitle">Job Title</label>
                        <input type="text" id="jobtitle" value="<?php echo $jobtitle ?>" name="jobtitle">
                    </div>
                    <div class="formtable  ">
                        <label for="location">Location</label>
                        <input type="text" id="location" value="<?php echo $location ?>" name="location">
                    </div>

                    <div class="formtable">
                        <label for="education">Education Details</label>
                        <textarea id="education" placeholder="Please Enter Education Details" cols="10" rows="10"
                            name="educationdetails"></textarea>
                    </div>
                    <div class="formtable">
                        <label for="jobdesc">Job Description</label>
                        <textarea id="jobdesc" cols="10" placeholder="Please Enter Your Job Description" rows="10"
                            name="jobdescription"></textarea>
                    </div>

                    <div class="formtable">
                        <label for="rolesandres">Roles and Responsibilities</label>
                        <textarea id="rolesandres" placaeholder="Please Enter the Roles and Responsibilities" cols="10"
                            rows="10" name="rolesandres"></textarea>
                    </div>

                    <div class="formtable">
                        <label for="workexp">Work Experience</label>
                        <textarea id="workexp" cols="10" placeholder=" Please enter the work experience" rows="10"
                            name="workexp"></textarea>
                    </div>



                    <div class="formtable  ">
                        <label>Job Type</label>
                        <div class="alljobtype d-flex justify-content-start flex-wrap">
                            <div class="job-type multiplecheckers1" data-value="Full-time">Full-time<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="Permanent">Permanent<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="Fresher">Fresher<i
                                    class="fa-solid fa-plus 2xs"></i>
                            </div>
                            <div class="job-type multiplecheckers1" data-value="Part-time">Part-time<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="Internship">Internship<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="Temporary">Temporary<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="Freelance">Freelance<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="Volunteer">Volunteer<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="contract">contract<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="job-type multiplecheckers1" data-value="other">other<i
                                    class="fa-solid fa-plus 2xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="formtable  ">
                        <label>Work Mode</label>
                        <div class="allshifts d-flex justify-content-start flex-wrap">
                            <div class="shifttype multiplecheckers2" data-value="Day shift">Day shift<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="shifttype multiplecheckers2" data-value="Morning shift">Morning shift<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="shifttype multiplecheckers2" data-value="Rotational shift">Rotational shift<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="shifttype multiplecheckers2" data-value="Night shift">Night shift<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="shifttype multiplecheckers2" data-value="Monday to Friday">Monday to Friday<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="shifttype multiplecheckers2" data-value="Evening shift">Evening shift<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="shifttype multiplecheckers2 text-center" data-value="Weekend availability">
                                Weekend availability<i class="fa-solid fa-plus 2xs"></i></div>
                            <div class="shifttype multiplecheckers2" data-value="Fixed shift">Fixed shift<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                        </div>
                    </div>
                    <div class="formtable  ">
                        <label for="skills">Skills</label>
                        <input type="text" id="skills" name="skills" placeholder="Enter your skills ">
                        <div class="displayskills d-flex flex-wrap "></div>
                    </div>
                    <div class="formtable  ">
                        <label for="numofpeople">Openings</label>
                        <input type="number" id="numofpeople" value="<?php echo $openings ?>" name="openings">
                    </div>


                    <div class="formtable  ">


                        <label for="salary">Salary:</label>
                        <div class="salary1andlakhs salary w-100  d-flex flex-row justify-content-start">
                            <input type="number" class="salaryinput" value="<?php echo $salary1 ?>" name="salary1">
                            <select id="moneytype" name="moneytype" class="w-25">
                                <option value="lakhs">lakhs</option>
                                <option value="thousand">thousand</option>
                            </select>

                        </div>
                        <div class="salary1andannum  salary w-100 d-flex flex-row justify-content-start">
                            <input type="number" class="salaryinput" value="<?php echo $salary2 ?>" name="salary2">

                            <select id="perannum" name="perannum" class="w-25">
                                <option value="per annum">per annum</option>
                            </select>
                        </div>
                    </div>
                    <div class="formtable  ">
                        <label for="supplemental_pay">Perks and Benifits:</label>
                        <div class="pab d-flex justify-content-start flex-wrap ">
                            <div class="perksandbenifits multiplecheckers3" data-value="Performance bonus">Performance
                                bonus<i class="fa-solid fa-plus 2xs"></i></div>
                            <div class="perksandbenifits multiplecheckers3" data-value="Yearly bonus">Yearly bonus<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="perksandbenifits multiplecheckers3" data-value="Commission pay">Commission pay<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="perksandbenifits multiplecheckers3" data-value="Health insurance">Health
                                insurance<i class="fa-solid fa-plus 2xs"></i></div>
                            <div class="perksandbenifits multiplecheckers3" data-value="Provident Fund">Provident Fund<i
                                    class="fa-solid fa-plus 2xs"></i></div>
                            <div class="perksandbenifits multiplecheckers3" data-value="Cell phone reimbursement">Cell
                                phone reimbursement<i class="fa-solid fa-plus 2xs"></i></div>
                            <div class="perksandbenifits multiplecheckers3" data-value="other">others<i
                                    class="fa-solid fa-plus 2xs"></i></div>

                        </div>
                    </div>
                </div>


            </div>




            <input type="hidden" id="selectedjobtype" name="selectedjobtype">
            <input type="hidden" id="selectedshift" name="selectedshift">
            <input type="hidden" id="selectedperksandbenifits" name="selectedperksandbenifits">
            <input type="hidden" id="skillsdiv" name="skillsdiv">
            <input type="hidden" id="jobidfromprevious" name="jobidfromprevious">


            <!-- <button type="submit" class="m-5 submitbutton">Post Job</button> -->

            <input type="submit" class="m-5 btn btn-primary submitbutton" value="Save">

        </form>




    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>


    <script>
    document.querySelector("#companyinfo").value = "<?php echo $aboutyourcompany ?>"
    document.querySelector("#education").value = "<?php echo $educationdetails ?>"
    document.querySelector("#jobdesc").value = "<?php echo $jobdescription ?>"
    document.querySelector("#rolesandres").value = "<?php echo $rolesandres ?>"
    document.querySelector("#workexp").value = "<?php echo $workexp ?>"






    document.querySelectorAll(".multiplecheckers1").forEach((e) => {

        let text = (e.innerText)

        let jobtype = <?php echo json_encode($jobtype); ?>;
        if (jobtype.includes(text)) {
            e.style.backgroundColor = "rgb(107, 194, 225)";
            let innertext = (e.innerText)

            e.innerHTML = `${innertext}<i class="
            fa-solid 2xs fa-check"></i>`


        }
    })


    document.querySelectorAll(".multiplecheckers2").forEach((e) => {

        let text = (e.innerText)

        let jobtype = <?php echo json_encode($workmode); ?>;
        if (jobtype.includes(text)) {
            e.style.backgroundColor = "rgb(107, 194, 225)";
            let innertext = (e.innerText)

            e.innerHTML = `${innertext}<i class="
    fa-solid 2xs fa-check"></i>`


        }
    })


    document.querySelectorAll(".multiplecheckers3").forEach((e) => {

        let text = (e.innerText)

        let jobtype = <?php echo json_encode($selectedperksandbenifits); ?>;
        if (jobtype.includes(text)) {
            e.style.backgroundColor = "rgb(107, 194, 225)";
            let innertext = (e.innerText)

            e.innerHTML = `${innertext}<i class="
    fa-solid 2xs fa-check"></i>`


        }
    })





    let displaydata = document.querySelector(".displayskills")

    displaydata.innerHTML = "<?php foreach ($skillsdiv as $key) {

        
        echo "<li class='bluecolorchanged4' data-value='$key'>$key<i class='fa-solid fa-xmark 2xs'></i></li>";
        
        
        }?>"






    document.querySelectorAll(".displayskills i").forEach((e) => {

        e.addEventListener("click", () => {
            e.parentElement.remove()
        })





    })






    document.querySelector("#jobidfromprevious").value = "<?php echo $jobidfromeditjob; ?>"
    </script>

    <script src="./scripts/postjobs.js"></script>

    <script src="./scripts/navbar.js"></script>

</body>

</html>