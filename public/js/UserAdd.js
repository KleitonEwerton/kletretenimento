const fade = document.getElementById("fade");
const btn = document.getElementsByClassName("add");
const container = document.getElementsByClassName("form-container");

const modalBtns = [...btn].filter((el)=>{
    return el.dataset.modal != null;
})

const toggleModal = (id) =>{
    if(id == undefined){
        fade.classList.toggle("hide");
    } else{
        const modalOpen = document.getElementById(id);
        modalOpen.style.display = "flex"
        fade.classList.toggle("hide");
        fade.addEventListener("click", ()=>{
            modalOpen.style.display = "none";
        })
    }
}

[...modalBtns, fade].forEach((el)=>{
    el.addEventListener("click",()=>{
        toggleModal(el.dataset.modal);
    })
})

