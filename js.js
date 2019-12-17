var btnCargar = document.getElementById('btnCargar');
var btnListar = document.getElementById('btnMostrarTodo');
var btnBuscar=document.getElementById('buscar');

btnCargar.onclick = function () {
    console.log("funciona");
    location.href = "consumir_comida.php";
    
};
btnListar.onclick = function () {
    location.href = "ListarComidas.php";
}
;
