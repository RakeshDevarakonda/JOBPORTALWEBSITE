document.querySelector(".applybutton").addEventListener("click",()=>{


        var datatosend = document.querySelector(".applybutton").getAttribute("data-jobidinjoboverveiw");

        var encodedData1 = encodeURIComponent(datatosend);
        
        window.location.href = `./userapplyjobdetails.php?jobidinapplyjob=${encodedData1}`;
    })



    array.forEach(element => {
        
    });

