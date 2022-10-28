const fade = document.querySelector("#fadeModal");
const btn = document.getElementsByClassName("btn");

const modalBtns = [...btn].filter((el)=>{
    return el.dataset.modal != null;
})

const toggleModal = (id) =>{
    if(id == undefined){
        fade.classList.toggle("hide");
        const closeModal = closeModal();
        closeModal.classList.toggle("hide");
    } else{
        const openModal = document.getElementById(id);
        modalOpen.classList.toggle("hide");
        fade.classList.toggle("hide");
    }
}

const closeModal = () =>{
    const modal = document.getElementById("modalAdd");
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