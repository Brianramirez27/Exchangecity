const editar=document.querySelector(".editar")
const publicarProductos=document.querySelector(".editarPublicacion")
const cerrarPublicarProductos=document.querySelector(".cerrarPublicarProductos")

editar.addEventListener("click",()=>{
    publicarProductos.style.display="flex"
});

cerrarPublicarProductos.addEventListener("click",()=>{
    publicarProductos.style.display="none"
})




