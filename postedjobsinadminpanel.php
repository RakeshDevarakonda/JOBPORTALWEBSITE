<table class="postedjobslist2  justify-content-evenly">
    <thead>
        <tr>
            <th>Job ID</th>
            <th>Job Title</th>
            <th>Location</th>
            <th>Salary</th>
            <th></th>
        </tr>

    </thead>
    <tbody style="height:100px;">



        <?php

        require "./connectosql/connecttosql.php";


        session_start();


        if (isset($_SESSION['userid'])) {


            $user_id = $_SESSION['userid'];

            $isVisible = true;

            $getposteddata = "SELECT * FROM recruiterpostedjobs where userid='$user_id' ";


            $result1 = $conn->query($getposteddata);



            if ($result1) {
                while ($row = $result1->fetch_assoc()) {
                    $gotjobid = $row["jobid"];
                    $jobtitle = $row["jobtitle"];
                    $gotlocation = $row["location"];
                    $gotsalary1 = $row["lowsalary"];
                    $gotsalary2 = $row["highsalary"];
                    $gotmoneytype = $row["moneytype"];



                    if ($gotmoneytype == "lakhs") {
                        $flag = "LPA";
                    } else {
                        $flag = "T";
                    }


                    echo '
    <tr>


    
        <td class="jobid">' . $gotjobid . '</td>
        <td> ' . $jobtitle . ' </td>
        <td>' . $gotlocation . '</td>
        <td>' . $gotsalary1 . '-' . $gotsalary2 . ' ' . $flag . '</td>
        <td class="iconinpostedjobs" >
            <div class="maineditandicon">
                <div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                <div class="editanddelete" >
                    <p class="editbuttoninpostedjobs">edit</p>

                    <p class=" deletebuttoninpostedjobs" data-bs-toggle="modal" data-bs-target="#exampleModal"> Delete </p>

                </div>
            </div>
            
        </td>
    </tr>
    
    ';








                }
            }
        } else {

            echo ' <tr>
            <td colspan="5" class=" text-center">Your haven\'t Posted a Job</td>
        </tr>';
        }







        ?>



    </tbody>
</table>