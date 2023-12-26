

document.querySelectorAll(".joblist").forEach((e)=>{
    e.addEventListener("click",(event)=>{

let value=(event.target.closest(".joblist"))
        var datatosend = value.getAttribute("data-jobidinindex");
        var jobname = value.querySelector(".jobname").textContent;

        var encodedData1 = encodeURIComponent(datatosend);
        var encodedData2 = encodeURIComponent(jobname);
        
        window.location.href = `./joboverveiw1.php?jobidinjoboverveiw=${encodedData1}&jobname=${encodedData2}`;
    })
})




