let sbBtn = document.querySelector("#sidebar-btn");
let sb = document.querySelector('.nav-sidebar');

sbBtn.addEventListener('click', () =>{
    if(sb.style.display == 'flex'){
        sb.style.display = "none";
    }else{
        sb.style.display = "flex";
    }
})