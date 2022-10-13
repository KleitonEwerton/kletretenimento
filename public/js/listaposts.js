let mblBtn = document.querySelector("#three-dot-btn");
let icons = document.querySelector('.icons');

mblBtn.addEventListener('click', () =>{
    if(icons.style.display == "flex"){
        icons.style.display = "none";
    }else{
        icons.style.display = "flex";
    }
})