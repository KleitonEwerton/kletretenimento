class UserAdd{
    constructor(){
        this.addEventBtns();
        this.register();
    }



    register(){
        let formEl = document.querySelector('.register');
        let elements = formEl.elements;
        let registerData = {};
        [...elements].forEach((v)=>{
            switch (v.type){
                case'checkbox':
                    registerData.admin = v.checked
                    break;

                case'file':
                    break;
                default:
                    registerData[v.name] = v.value
                    break;
            }

        })

    }




    addEventBtns(){

        document.querySelector(".add").addEventListener("click",()=>{
            document.querySelector(".form-add").style.display = "flex"
        })

        document.querySelectorAll(".close")[0].addEventListener("click",()=>{
            document.querySelector(".form-add").style.display = "none"
        })

    }
}