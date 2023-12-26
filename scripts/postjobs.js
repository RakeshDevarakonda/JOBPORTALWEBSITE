document.querySelectorAll(".multiplecheckers1").forEach((e) => {
  e.addEventListener("click", () => {
    let gettingitag = e.querySelector(".fa-solid");

    if (gettingitag.classList.contains("fa-plus")) {
      gettingitag.classList.remove("fa-plus");
      gettingitag.classList.add("fa-check");
      e.style.backgroundColor = "#6bc2e1";
      e.classList.add("bluecolorchanged1");
    } else {
      gettingitag.classList.add("fa-plus");
      gettingitag.classList.remove("fa-check");
      e.style.backgroundColor = "";
      e.classList.remove("bluecolorchanged1");
    }
  });
});

document.querySelectorAll(".multiplecheckers2").forEach((e) => {
  e.addEventListener("click", () => {
    let gettingitag = e.querySelector(".fa-solid");

    if (gettingitag.classList.contains("fa-plus")) {
      gettingitag.classList.remove("fa-plus");
      gettingitag.classList.add("fa-check");
      e.style.backgroundColor = "#6bc2e1";
      e.classList.add("bluecolorchanged2");
    } else {
      gettingitag.classList.add("fa-plus");
      gettingitag.classList.remove("fa-check");
      e.style.backgroundColor = "";
      e.classList.remove("bluecolorchanged2");
    }
  });
});

document.querySelectorAll(".multiplecheckers3").forEach((e) => {
  e.addEventListener("click", () => {
    let gettingitag = e.querySelector(".fa-solid");

    if (gettingitag.classList.contains("fa-plus")) {
      gettingitag.classList.remove("fa-plus");
      gettingitag.classList.add("fa-check");
      e.style.backgroundColor = "#6bc2e1";
      e.classList.add("bluecolorchanged3");
    } else {
      gettingitag.classList.add("fa-plus");
      gettingitag.classList.remove("fa-check");
      e.style.backgroundColor = "";
      e.classList.remove("bluecolorchanged3");
    }
  });
});




setTimeout(() => {
  const values1 = Array.from( document.querySelectorAll(".bluecolorchanged1") ).map((e) => e.getAttribute("data-value")); 

  console.log((values1[0]))
}, 5000);

function setFormValues() {
  const values1 = Array.from( document.querySelectorAll(".bluecolorchanged1") ).map((e) => e.getAttribute("data-value")); 
  const values2 = Array.from( document.querySelectorAll(".bluecolorchanged2") ).map((e) => e.getAttribute("data-value"));
   const values3 = Array.from( document.querySelectorAll(".bluecolorchanged3") ).map((e) => e.getAttribute("data-value"));
   const values4 = Array.from( document.querySelectorAll(".bluecolorchanged4") ).map((e) => e.getAttribute("data-value"));




  document.getElementById("selectedjobtype").value =JSON.stringify(values1);
  document.getElementById("selectedshift").value = JSON.stringify(values2);
  document.getElementById("selectedperksandbenifits").value = JSON.stringify(values3);
  document.getElementById("skillsdiv").value = JSON.stringify(values4);

}

document.querySelector("form").addEventListener("submit", function () {
  setFormValues();
});

document.querySelector("#skills").addEventListener("keyup", (event) => {

  let skillvalue = document.querySelector("#skills").value;


    if (event.key=="Enter" && skillvalue.length>0 ){
        // let skillvalue = document.querySelector("#skills");
        let displaydata = document.querySelector(".displayskills");
        let li = document.createElement("li");
        li.classList="bluecolorchanged4"
        li.setAttribute("data-value",`${skillvalue}`);
        displaydata.append(li);
        li.innerHTML = ` ${skillvalue}<i class="fa-solid fa-xmark 2xs"></i>`;
        document.querySelector("#skills").value=""

    }



    
    document.querySelectorAll(".displayskills i").forEach((e)=>{

        e.addEventListener("click",()=>{
            e.parentElement.remove()
        })



     
        
    })





});

document.querySelectorAll("input").forEach((e) => {
  e.addEventListener("keydown", preventDefaultOnEnter);
});



function preventDefaultOnEnter(event) {
  if (event.key === "Enter") {
    event.preventDefault();
  }
}





