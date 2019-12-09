var btnCargar = document.getElementById('btnCargar');
var btnListar = document.getElementById('btnMostrarTodo');

btnCargar.onclick = function () {
    console.log("funciona");
    location.href = "consumir_comida.php";
    
};
btnListar.onclick = function () {
    location.href = "ListarComidas.php";
}
;
