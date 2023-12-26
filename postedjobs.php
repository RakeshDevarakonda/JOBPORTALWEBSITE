<?php


session_start();

require "./connectosql/connecttosql.php";
$counting = 0;
$numRows = 0;




if (isset($_SESSION['userid'])) {


    $user_id = $_SESSION['userid'];



    $gettotalposteddata = "SELECT * FROM recruiterpostedjobs WHERE userid='$user_id' ";

    $result1 = $conn->query($gettotalposteddata);

    $gotalljobid = [];

    if ($result1) {


        $numRows = $numRows + $result1->num_rows;

        while ($row = $result1->fetch_assoc()) {

            array_push($gotalljobid, $row["jobid"]);

        }


        foreach ($gotalljobid as $key) {
            $getapplidata = "SELECT * FROM userappliedjobs WHERE jobid='$key' ";
            $result3 = $conn->query($getapplidata);




            if ($result3) {

                $ok = $result3->num_rows;

                $counting = $ok + $counting;
            }







        }





    }


}



?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+JP:wght@300&family=Plus+Jakarta+Sans:wght@800&family=Poppins:wght@300&family=Rubik+Doodle+Triangles&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="./css/navbarstyle.css">
    <link rel="stylesheet" href="./css/footer.css">


    <style>
    @media screen and (max-width:992px) {}

    @media screen and (max-width:768px) {
        table {
            width: 100% !important;
        }

        .top-panel {
            width: 95% !important;
        }
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

        .adminpanel {
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




    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 80%;
        border: 1px solid #ddd;

    }

    th,
    td {
        text-align: left;
        padding: 8px;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
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

    .adminpanel {
        margin-top: 150px !important;

    }

    .postedjobs {
        padding: 3rem;
        border-radius: 50px;
        margin-right: 50px;
    }




    .postedjobs,
    .applications {
        /* background-color: red; */
        border-radius: 20px;
        border: 1px solid #dadada;
        padding: 20px 50px;
    }


    th {
        background-color: #f2f2f2;

    }

    .iconinpostedjobs {
        position: relative;
    }

    .editanddelete {
        display: none;
        position: absolute;
        background-color: white !important;
        border-radius: 10px;
        z-index: 2000 !important;
        border: 1px solid #ddd !important;
        right: -2px !important;
        width: 100px !important;
        height: 100px !important;
        justify-content: center !important;
        flex-direction: column !important;


    }

    .editanddelete p:hover {
        border-radius: 10px;

        cursor: pointer;
        background-color: #ddd !important;
    }

    .deletebuttoninpostedjobs:hover {
        border-radius: 10px !important;

        background-color: #ddd !important;

    }







    .postedjobs,
    .applications {
        background: linear-gradient(to left, green 50%, transparent 50%);
        background-size: 200% 100%;
        transition: background-position 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    .postedjobs:hover,
    .applications:hover {
        background-position: -100% 0;
        color: white;
        transform: scale(1.2) !important;
    }

    table {
        cursor: pointer !important;
    }

    .gettingdata {
        margin-bottom: 150px !important;
        margin-top: 50px !important;
    }
    </style>



</head>

<body>
    <?php


require "navbar.php";

?>


    <div class="adminpanel  w-100 d-flex flex-row flex-wrap justify-content-sm-center mt-5 ">

        <div class="top-panel d-flex flex-row   justify-content-center   ">
            <div class="postedjobs postedjobsclick bg-warning      d-flex flex-column ">

                <p class="w-100 text-center " style="font-size:10vh;">
                    <?php
                    echo $numRows;
                    ?>
                </p>
                <p class="w-100 text-center">Posted Jobs </p>
            </div>
            <div class="applications applicationsclick bg-warning  d-flex flex-column ">
                <p class="text-center" style="font-size:10vh;">
                    <?php
                    echo $counting;
                    ?>
                </p>
                <p class="w-100 text-center">Applications </p>
            </div>
        </div>
    </div>

    <div class="paneldistribution w-100 d-flex justify-content-center align-items-center flex-column mt-5 mb-0">

        <div class="w-100  d-flex flex-row justify-content-center ">

            <p class="hover_animation   changetopostedjobs me-5 mb-0 d-flex justify-content-center align-items-center">
                Posted Jobs
            </p>
            <p class="hover_animation  changetoapplication ms-5 mb-0 d-flex justify-content-center align-items-center">
                Applications
            </p>
        </div>

        <div class="hrrule w-100 h-0">
            <hr>
        </div>
    </div>


    <div class="gettingdata w-100 d-flex justify-content-md-center justify-content-start " style="overflow-x:auto">
    </div>








    <div class="modal fade mainmodal" data-value="" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title  text-danger " style="font-size:30px" id="exampleModalLabel">Alert <i
                            style="color:red;" class=" fa-solid fa-triangle-exclamation ms-3"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="  btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class=" deletebtninmodal btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>




</body>






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

<script src="./scripts/navbar.js"></script>

<script>
var application = document.querySelector(".changetoapplication")
var postedjobs = document.querySelector(".changetopostedjobs")


document.addEventListener("DOMContentLoaded", function() {
    postedjobs.click()
    postedjobs.style.textDecoration = "underline";
    postedjobs.style.color = "#0087ca"

});

var contentContainer = document.querySelector('.gettingdata');






document.querySelector(".applicationsclick").addEventListener("click", () => {

    fetch('applicationslistinadminpanel.php ')
        .then(response => response.text())
        .then(content => {
            contentContainer.innerHTML = content;
        })
        .catch(error => console.error('Error loading content:', error));


    application.style.textDecoration = "underline";
    application.style.color = "#0087ca"

    postedjobs.style.textDecoration = "none";
    postedjobs.style.color = "black"


})






document.querySelector(".postedjobsclick").addEventListener("click", () => {

    fetch('postedjobsinadminpanel.php ')
        .then(response => response.text())
        .then(content => {
            contentContainer.innerHTML = content;
        })
        .catch(error => console.error('Error loading content:', error));

    postedjobs.style.textDecoration = "underline";

    postedjobs.style.color = "#0087ca"

    application.style.textDecoration = "none";
    application.style.color = "black"


})




function loadContent() {
    var contentContainer = document.querySelector('.gettingdata');







    application.addEventListener("click", () => {

        fetch('applicationslistinadminpanel.php ')
            .then(response => response.text())
            .then(content => {
                contentContainer.innerHTML = content;
            })
            .catch(error => console.error('Error loading content:', error));

        application.style.textDecoration = "underline";
        application.style.color = "#0087ca"

        postedjobs.style.textDecoration = "none";
        postedjobs.style.color = "black"


    })

    postedjobs.addEventListener("click", () => {

        fetch('postedjobsinadminpanel.php ')
            .then(response => response.text())
            .then(content => {
                contentContainer.innerHTML = content;

                const mainEditAndIcons = document.querySelectorAll('.maineditandicon');



                document.addEventListener('click', function(event) {
                    mainEditAndIcons.forEach(editAndIcon => {
                        const editAndDeleteDiv = editAndIcon.querySelector(
                            '.editanddelete');
                        if (editAndDeleteDiv && !editAndIcon.contains(event
                                .target)) {
                            editAndDeleteDiv.style.display = 'none';
                        }
                    });
                });





                mainEditAndIcons.forEach(editAndIcon => {
                    editAndIcon.addEventListener('click', function(event) {
                        mainEditAndIcons.forEach(otherEditAndIcon => {
                            if (otherEditAndIcon !== this) {
                                const otherEditAndDeleteDiv =
                                    otherEditAndIcon.querySelector(
                                        '.editanddelete');
                                if (otherEditAndDeleteDiv) {
                                    otherEditAndDeleteDiv.style
                                        .display = 'none';
                                }
                            }
                        });

                        const editAndDeleteDiv = this.querySelector(
                            '.editanddelete');
                        if (editAndDeleteDiv) {
                            editAndDeleteDiv.style.display = (editAndDeleteDiv
                                    .style.display === 'none' ||
                                    editAndDeleteDiv.style.display === '') ?
                                'flex' : 'none';
                        }
                        event.stopPropagation();
                    });
                });


                document.querySelectorAll(".editbuttoninpostedjobs").forEach(e => {
                    e.addEventListener("click", () => {

                        let sharejobid = e.closest("tr").querySelector(".jobid")
                            .textContent;

                        var encodedData1 = encodeURIComponent(sharejobid);

                        window.location.href = `./editjob.php?jobid=${encodedData1}`;



                    });
                });




                document.querySelectorAll(".deletebuttoninpostedjobs").forEach(e => {
                    e.addEventListener("click", () => {
                        let sharejobid = e.closest("tr").querySelector(".jobid")
                            .textContent;



                        document.querySelector(".mainmodal").setAttribute("data-value",
                            sharejobid)
                        document.querySelector(".modal-body").innerHTML =
                            `Do You Want To Delete JOBID = ${sharejobid}`;




                    });
                });



                document.querySelector(".deletebtninmodal").addEventListener(
                    "click", (event) => {


                        let sharejobid = (event.target.closest(".mainmodal").getAttribute("data-value"))

                        let dataToSend = {
                            jobid: sharejobid,
                        };


                        console.log(dataToSend)

                        fetch('postedjobs.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify(dataToSend)
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error(
                                        `HTTP error! Status: ${response.status}`);
                                }
                                return response.text();
                            })
                            .then(data => {
                                console.log(data);
                                window.location.href = "postedjobs.php"
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    })








            })



            .catch(error => console.error('Error loading content:', error));

        postedjobs.style.textDecoration = "underline";
        postedjobs.style.color = "#0087ca"


        application.style.textDecoration = "none";
        application.style.color = "black"


    })






}






loadContent()
</script>


<script src="./scripts/navbar.js"></script>

</body>

</html>


<?php


require "./connectosql/connecttosql.php";

$jsonData = file_get_contents("php://input");

$data = json_decode($jsonData,true);




if ($data){
    $jobid = $data['jobid'];

    echo $jobid;
    $sql = "DELETE FROM recruiterpostedjobs WHERE jobid ='$jobid' ";
    
    if ($conn->query($sql)) {
        echo $jobid;  // Just echo the jobid after successful deletion
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}



?>