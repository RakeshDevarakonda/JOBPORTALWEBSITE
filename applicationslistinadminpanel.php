<table>

    <thead>
        <tr>
            <th class="text-center">Jobid</th>
            <th class="text-center">Job Name</th>
            <th class="text-center">Username</th>
            <th class="text-center">email</th>
            <th class="text-center">Number</th>
            <th class="text-center">Resume</th>

        </tr>

    </thead>


    <tbody>

        <?php
                session_start();


                require "./connectosql/connecttosql.php";

                if (isset($_SESSION['userid'])) {
                    

                    $user_id = $_SESSION['userid'];


                    $getapplicantdata = "SELECT * FROM recruiterpostedjobs WHERE userid='$user_id'";

                    $result = $conn->query($getapplicantdata);

                    $gotjobid_gotjobname = [];

                    if ($result) {



                        while ($row = $result->fetch_assoc()) {





                            $gotjobid = $row['jobid'];
                            $gottitle = $row['jobtitle'];

                            $gotjobid_gotjobname[$gotjobid] = $gottitle;
                        }
                    }


                    

                    $flag=false;

                         


                    foreach ($gotjobid_gotjobname as $jobid2 => $gottitle2) {

                        $getapplicantdata2 = "SELECT * FROM userappliedjobs WHERE jobid='$jobid2' ";

                        $result2 = $conn->query($getapplicantdata2);


                        if ($result2) {
                            while ($row = $result2->fetch_assoc()) {

                                $flag=true;

                                $gotjobid=$row["jobid"];
                                $name=$row["name"];
                                $email=$row["email"];
                                $resume=$row["resume"];
                                $number=$row["number"];


                                
                                echo '<tr>
                                <td>' . $gotjobid . '</td>

                                <td>'.$gotjobid_gotjobname[$gotjobid].'</td>

                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $number . '</td>
                                <td><a class="veiwinapplication" target="_blank" href="./resume/' . $resume . '" style="color:blue; text-decoration:underline; ">Veiw</a></td>



                            </tr>';
                            }

                            

                        }
                            
                                                       
                       

                    }


                    if (!$flag){
                        echo '  <tr>
                        <td colspan="6"  class=" text-center " style="height:200px;">No Applications Are Available</td>
                      </tr>';}

                    


                }
                


                

                else{
                    echo '  <tr>
                    <td colspan="6"  class=" text-center " style="height:200px;">No Applications Are Available</td>
                  </tr>';
                    }
                


              



                ?>



    </tbody>




</table>