const passFeild=document.querySelector(".form input[type='password']");
const toggleBtn=document.getElementById("togglePass");
    toggleBtn.onclick=()=>{
        if(passFeild.type=="password"){
                passFeild.type="text";
        }else{
                passFeild.type="password";
        }
    };