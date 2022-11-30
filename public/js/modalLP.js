const fade = document.getElementById("fade");
const btn = document.getElementsByClassName("btn");
const container = document.getElementsByClassName("struct-modal");
const fechar = document.getElementsByClassName("fechar");

const modalBtns = [...btn].filter((el)=>{
    return el.dataset.modal != null;
})

const toggleModal = (id) =>{
    if(id == undefined){
        fade.classList.toggle("hide");
    } else{
        const modalOpen = document.getElementById(id);
        modalOpen.style.display = "block"
        fade.classList.toggle("hide");
        fade.addEventListener("click", ()=>{
            modalOpen.style.display = "none";
        })
    }
}

[...modalBtns, fade, ...fechar].forEach((el)=>{
    el.addEventListener("click",()=>{
        toggleModal(el.dataset.modal);
    })
})