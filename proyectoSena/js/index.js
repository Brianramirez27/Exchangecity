//js para  que cuando den en el acount puedan ver el login o registrarse 
const  bottom=document.querySelector(".bottom")
const  acount=document.querySelector(".acount")


bottom.addEventListener("click",()=>{
    acount.classList.toggle("verAcount");
})


// js para que cuando selecionen administrador puedan poner el codigo 
const RegistroOpcion=document.querySelector(".RegistroOpcion")


RegistroOpcion.addEventListener("change", function() {
    if(RegistroOpcion.value =="Administrador"){
        document.querySelector(".RegistroCodigo").style.display="block"
    
    }else{
        document.querySelector(".RegistroCodigo").style.display="none"
    }
    
});