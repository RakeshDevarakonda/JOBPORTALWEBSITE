<div data-jobidinindex=' <?php echo $gotjobid ?> ' class="joblist justify-content-between d-flex  flex-column">

    <div class="logocompanynameandfulltimeandbookmark p-3 d-flex flex-row justify-content-between">
        <div class="d-flex w-100 flex-column">
            <div class="d-flex w-100 flex-row logoandcompanyname mb-3">
                <div class="logoinindex me-3 justify-content-center ms-3 d-flex me-3">
                    <?php

                    if (strlen($logo) > 5) {
                        echo "<img src='./images/$logo';> ";


                    } else {
                        echo "<i class='fa-solid fa-layer-group'></i>";

                    }


                    ?>
                </div>


                <div class="companyname">
                    <div class="d-flex jobtitleandlocation flex-column ">
                        <div class="name">
                            <h5 class="mb-0 jobname"><?php echo ucwords($gottitle); ?></h5>

                        </div>
                        <div class="companyandlocation d-flex flex-row">
                            <p class="companyname me-3 opacity-75"><i
                                    class="fa-solid me-1 fa-briefcase"></i><?php echo ucwords($gotcompanyname); ?></p>
                            <p class="location opacity-75"> <i
                                    class="fa-solid me-1 fa-location-dot"></i><?php echo ucwords($gotlocation); ?></p>
                        </div>

                    </div>


                </div>

            </div>








            <div class="jobtype d-flex flex-row flex-wrap justify-content-start ">
                <?php
            
            $x = 0;
           foreach ($gotjobtype as $key){
               $x = $x + 1;
            
               if ($x == 1) {

                echo '
                <div class="me-1 border border-1 key mb-2 rounded-pill d-flex justify-content-center p-1" style="width: auto;">
                <p class="ms-2 me-2 mb-0 ">' . $key . ' </p>
        </div>
        ';
        }
        else {
        break;
        }
        }

        ?>


                <div class="me-1 border border-1 timeinfind  mb-2 rounded-pill d-flex justify-content-center p-1"
                    style="width: auto;">
                    <p class="ms-2 me-2 mb-0 "><i class="fa-regular fa-clock me-1"></i><?php if ($interval->y > 0) {
                        echo $interval->y . " year" . ($interval->y > 1 ? 's' : '') . " ago";
                    } elseif ($interval->m > 0) {
                        echo $interval->m . " month" . ($interval->m > 1 ? 's' : '') . " ago";
                    } elseif ($interval->d > 0) {
                        echo $interval->d . " day" . ($interval->d > 1 ? 's' : '') . " ago";
                    } elseif ($interval->h > 0) {
                        echo $interval->h . " hour" . ($interval->h > 1 ? 's' : '') . " ago";
                    } elseif ($interval->i > 0) {
                        echo $interval->i . " minute" . ($interval->i > 1 ? 's' : '') . " ago";
                    } else {
                        echo "Just now";
                    } ?></p>
                </div>
                <div class="me-1 border border-1 salaryinfind mb-2 rounded-pill d-flex justify-content-center p-1"
                    style="width: auto;">
                    <p class="ms-2 me-2 mb-0 "> <i
                            class="fa-solid fa-indian-rupee-sign"></i><?php echo $gotsalary1 . " - " . $gotsalary2 . $flag ?>
                    </p>
                </div>
            </div>
        </div>



    </div>
    <!-- 




    <div class="veiwallandbookmark p-2 text-center    d-flex d-flex justify-content-end align-items-center  ">
        <button
            class="d-flex border border-0 veiwdetails rounded-pill p-2  text-center justify-content-end align-items-center p-1">Veiw
            Details<i class="ms-2 fa-solid fa-arrow-right"></i> </button>
    </div> -->

</div>