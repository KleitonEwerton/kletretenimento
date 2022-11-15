class UserController{
    constructor(){
        this.addEventBtns();
        this.users = {};
        this.register();
    }

    addLine(user){
        let tr=document.createElement("tr");
        tr.innerHTML = `
        <td class ='table-icon'>${user.getId()}</td>
        <td class ='table-icon''><img src='${user.getPhoto()}' alt ='icone'></td>
        <td class ='table-icon'>${user.getName()}</td>
        <td class ='table-icon'>${user.getEmail()}</td>
        <td class ='table-icon'>${user.getPhone()}</td>
        <td class ='table-icon'>${user.getDate()}</td>`;
        if (user.getAdmin()){
            tr.innerHTML+=`<td class ='table-adimin'>Sim</td>`

        }else{
            tr.innerHTML+=`<td class ='table-adimin'>Não</td>`
        }
        tr.innerHTML+=`
        <td class ='table-actions'>
        span class="material-icons-sharp edit-btn">edit</span>
        span class="material-icons-sharp delete-btn">delete</span>
        </td>`;
        document.querySelector('.users tobody').appendChild(tr);
        
            

    }

    readPhoto(data){

        return new Promise((resolve,reject)=>{
            let fr = new FileReader();
            fr.addEventListener('load',()=>{
                resolve(fr.result);
            });
            fr.addEventListener('error',(e)=>{
                reject(e)
            })
            fr.readAsDataURL(data);


        })
    }



     register(){
        let formEl = document.querySelector('.register');
        let elements = formEl.elements;
        let user;
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
        if (JSON.stringify(this.users) == JSON.stringify({})){
            user = new User(0,registerData.name,"",registerData.email,registerData.phone,registerData.admin,registerData.password);
        }
        else{
            let lastUser = Object.values({"a":"teste","b":"teste2"})[Object.values({"a":"teste","b":"teste2"}).length-1];
            user = new User(lastUser.getId()+1 ,registerData.name, "",registerData.email,registerData.phone,registerData.admin,registerData.password);
        }
        let fileEl = elements.photo;
        if(fileEl.files.length == 0){
            user.setPhoto("img/icon.jpg");
        }else {

            this.readPhoto(elements.photo.files[0]).then((result) => {
                user.setPhoto(result)
            }, (e) => {
                console.error(e)
            })

        }
         console.log(user)
     }

    addEventBtns(){
        document.querySelector(".add").addEventListener("click",()=>{
            document.querySelector(".form-add").style.display = "flex"
        })

        document.querySelectorAll(".close")[0].addEventListener("click",()=>{
            document.querySelector(".form-add").style.display = "none"
        })
        document.querySelectorAll(".close")[1].addEventListener("click",()=>{
            document.querySelector(".form-edit").style.display = "none"
        })
    }
}