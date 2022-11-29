class UserController{
    constructor(){
        this.addEventBtns();
        this.users = {};
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

    addEventBtns() {
        document.querySelector(".add").addEventListener("click", () => {
            document.querySelector(".form-add").style.display = "flex"
        })

        document.querySelectorAll(".close")[0].addEventListener("click", () => {
            document.querySelector(".form-add").style.display = "none"
        })
        document.querySelectorAll(".close")[1].addEventListener("click", () => {
            document.querySelector(".form-edit").style.display = "none"
        })

        document.querySelectorAll(".close")[1].addEventListener("click",()=>{
            document.querySelector(".form-delet").style.display = "none"
        })
    }
}