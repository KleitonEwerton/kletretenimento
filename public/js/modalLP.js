const fade = document.getElementById("fade");
const btn = document.getElementsByClassName("btn");

const modalBtns = [...btn].filter((el)=>{
    return el.dataset.modal != null;
})

const toggleModal = (id) =>{
    if(id == undefined){
        fade.classList.toggle("hide");
        const closeModal = currentModal();
        closeModal.classList.toggle("hide");
    } else{
        const modalOpen = document.getElementById(id);
        modalOpen.classList.toggle("hide");
        fade.classList.toggle("hide");
    }
}

const currentModal = () =>{
    const modal = document.getElementsByClassName("form-container");
    const openModal = [...modal].filter((modal)=>{
        return !modal.classList.contains("hide");
    })
    openModal[0];
}

[...modalBtns, fade].forEach((el)=>{
    el.addEventListener("click",()=>{
        toggleModal(el.dataset.modal);
    })
})