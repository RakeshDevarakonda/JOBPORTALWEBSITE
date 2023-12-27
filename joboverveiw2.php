<div class="entirejobdata  d-flex flex-column">


    <div class="totaltopdata w-100  d-flex flex-row justify-content-center">


        <div
            class="firsttopdata  align-items-center d-flex flex-column d-md-flex flex-sm-row  justify-content-around p-3 ">

            <div class="logoandtitle  d-flex flex-row justify-content-start ">

                <div class="logoinoverveiw mt-4  d-flex justify-content-center align-items-start ">

                    <?php

                    if (strlen($logo) > 5) {
                        echo "<img src='./images/$logo';> ";


                    } else {
                        echo "<i class='fa-solid fa-layer-group'></i>";

                    }


                    ?>
                </div>




                <div class="titlelocationandcompany p-3  d-flex  flex-column">
                    <div class="name mb-0">
                        <h5 class="mb-0 jobname">
                            <?php echo ucwords($gottitle); ?>
                        </h5>
                    </div>


                    <div class="companyandlocation d-flex flex-row">
                        <p class="companyname  me-3 opacity-50">
                            <?php echo ucwords($gotcompanyname) ?>
                        </p>
                        <p class="location opacity-50">
                            <i class="fa-solid me-2 fa-location-dot"></i><?php echo ucwords($gotlocation) ?>
                        </p>
                    </div>
                </div>
            </div>


            <div class="d-flex  applybuttondiv  justify-content-center ">
                <button data-jobidinjoboverveiw='<?php echo $jobidinjoboverveiw ?>' class="p-3 ms-3 applybutton bg-primary d-flex flex-row justify-content-center align-items-center p-2
                    border rounded-3 me-4 mb-0 mt-1 mb-1">
                    <h5 class="me-3 applypara">
                        Apply
                    </h5><i class="ms-2 fa-solid fa-arrow-right"></i>
                </button>
            </div>


        </div>


    </div>




    <div class="descandright  d-flex flex-column d-md-flex  flex-md-row justify-content-center">

        <div class="descriptiondata  d-flex flex-row justify-content-end">

            <div class="descriptiondata2  mt-5">
                <div class="seconddata  d-flex flex-row ">
                    <div class="jobleftsideoverveiw">



                        <?php if (strlen($gotjobdescription)>10): ?>


                        <div class="companyinfo">
                            <h5 class="makebold">Job Description</h5>
                            <p>
                                <?php echo $gotjobdescription ?>

                            </p>
                        </div>


                        <?php endif; ?>







                        <?php if (isset($gotcompanyinfo)): ?>
                        <div class="companyinfo">
                            <h5 class="makebold">company information</h5>
                            <p>
                                <?php echo $gotcompanyinfo ?>

                            </p>
                        </div>
                        <?php endif; ?>



                        <?php if (isset($goteducation)): ?>
                        <h5 class="makebold">Eduction</h5>
                        <div class="education">
                            <p>
                                <?php echo $goteducation ?>

                            </p>
                        </div>
                        <?php endif; ?>

                        <?php if (isset($gotrolesandres)): ?>
                        <h5 class="makebold">Roles And Responsibilities</h5>
                        <div class="rolesandres">
                            <p>
                                <?php echo $gotrolesandres ?>

                            </p>
                        </div>
                        <?php endif; ?>


                        <?php if (isset($gotworkexp)): ?>
                        <h5 class="makebold">Work Expereince</h5>
                        <div class="workexp">
                            <p>
                                <?php echo $gotworkexp ?>

                            </p>
                        </div>
                        <?php endif; ?>



















                    </div>




                </div>
            </div>

        </div>





        <div class="joboverveiwcontentright d-flex ms-5 mt-5 ">


            <div class="joboverveiwcontentright2  text-start w-100">
                <h5 class="makebold joboverveiwtitle">Job Overveiw</h5>
                <div class="joboverveiwsection2 ">
                    <div class="titleinoverveiw divmaintag">
                        <h5>jobtitle</h5>
                        <p><?php echo $gottitle ?></p>
                    </div>
                    <div class="locationinoverveiw divmaintag">
                        <h5>location</h5>
                        <p><?php echo $gotlocation ?></p>
                    </div>
                    <div class="salaryinoverveiw divmaintag">
                        <h5>salary</h5>
                        <p><?php echo $gotsalary1 . '-' . $gotsalary2 ?></p>
                    </div>

                    <?php if (isset($gotopenings)): ?>
                    <div class="openingsinoverveiw divmaintag">
                        <h5>Openings</h5>
                        <p>
                            <?php echo $gotopenings ?>

                        </p>
                    </div>
                    <?php endif; ?>


                    <?php if (isset($gotjobtype)): ?>
                    <div class="jobtypeinoverveiw divmaintag">
                        <h5>jobtype</h5>
                        <?php foreach ($gotjobtype as $key): ?>
                        <button class="border border-1"><?php echo $key; ?></button>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>


                    <?php if (isset($gotworkmode)): ?>
                    <div class="worktypeinoverveiw divmaintag">
                        <h5>Work mode</h5>

                        <?php foreach ($gotworkmode as $key): ?>
                        <button class="border border-1"><?php echo $key; ?></button>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($gotskills)): ?>
                    <div class="skillsinoverveiw divmaintag">
                        <h5>skills</h5>
                        <?php foreach ($gotskills as $key): ?>
                        <button class="border border-1"><?php echo $key; ?></button>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($gotperksandbenifits)): ?>
                    <div class="perksandbenfinoverveiw divmaintag">
                        <h5>perks and benifits</h5>
                        <?php foreach ($gotperksandbenifits as $key): ?>
                        <button class="border border-1"><?php echo $key; ?></button>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>



                    <?php if (isset($gotnumberofemployees)): ?>
                    <div class="openingsinoverveiw divmaintag">
                        <h5>Number Of Employees</h5>
                        <p>
                            <?php echo $gotnumberofemployees ?>

                        </p>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>



    </div>


</div>