<nav class=" d-flex justify-content-md-center  w-100">


    <div class="navbar d-flex flex-row justify-content-between">



        <div class="d-flex logodiv ms-0 ms-md-0    justify-content-start  ">


            <li class="d-flex  hamburgerli d-md-none ms-3 align-items-center">
                <i style="font-size:5vh;" class="  hamburgericon  fa-solid fa-bars "></i>

            </li>


            <li class="d-flex   w-100 justify-content-center ">
                <a class="imganchor" href="index.php"><img class="logoimg me-5 me-md-0"
                        src="./otherimages/Screenshot_2023-12-25_164802-removebg-preview.png" alt=""></a>
            </li>


        </div>





        <div class="homeandother    d-flex justify-content-between  flex-column flex-md-row">


            <div class="d-flex d-md-none justify-content-between mt-5">

                <li class="ms-3 text-info" style="font-size:5vh;">Menu </li>
                <li>
                    <i style="font-size:4vh;" class=" fa-solid fa-xmark"></i>
                </li>
            </div>






            <div class="middlecontent d-flex justify-content-end justify-content-start flex-column flex-md-row w-50 ">
                <li class="ms-3 me-3">
                    <a href="findjobs.php">Find Jobs</a>

                </li>
                <li class="ms-3 me-3">
                    <a href="myjobs.php">My Jobs</a>
                </li>

                <li class="ms-3 me-3">
                    <a href="postedjobs.php">Posted Jobs</a>

                </li>
            </div>


            <?php

if (isset($_SESSION['userid'])) {

    $user_id = $_SESSION['userid'];




    echo '<div class="lastcontent  d-flex justify-content-end justify-content-start flex-column flex-md-row w-50">
    <li class="ms-3 me-3" ><button class="postajobbtn btn btn-primary"><a href="postjobs.php">Post A Job</a></button></li> 
    <li class="ms-3 me-3 btn btn-outline-primary logoutbtn"> <a href="logout.php">Logout</a></li>
</div>
    
    
    '
    ;

} else {


    echo '<div class="lastcontent d-flex justify-content-end justify-content-start flex-column flex-md-row w-50  align-items-center">
    <li class="me-3" ><button class="postajobbtn btn btn-primary"><a href="postjobs.php">Post A Job</a></button></li> 

   <li class="ms-3 me-3 btn btn-outline-primary register"><a href="login.php">Login/Register </a></li>




</div>';
}

?>


        </div>

    </div>
</nav>