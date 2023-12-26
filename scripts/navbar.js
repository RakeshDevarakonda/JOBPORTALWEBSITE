
document.querySelector(".hamburgericon").addEventListener("click",()=>{
    document.querySelector(".homeandother").classList.add("responsivenav")
})


document.querySelector(".fa-xmark").addEventListener("click",()=>{
    document.querySelector(".homeandother").classList.remove("responsivenav")
})

