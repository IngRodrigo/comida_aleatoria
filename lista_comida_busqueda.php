<?php
include_once './Procesos.php';


if(isset($_GET['palabra'])){
    $palabra=$_GET['palabra'];
    if ((obtenerComidas()) > 0) {
    $lista = obtenerComidasPorParametro($palabra);
} else {
    $lista = false;
}
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title></title>
    </head>
    <body>  
        <div class="containter">
            <h1>DALE CLICK PARA VER UNA RECETA</h1>
            <button id="btnCargar" name="mostrar" class="boton">Mostrar recetas</button>
            <button id="btnMostrarTodo" name="mostrar-todo" class="boton">Todas las recetas vistas</button>
            <div class="bloque-titulo">
                <h1>Lista de comidas</h1>
            </div>

             <form method="GET" action="lista_comida_busqueda.php" name="formulario">

                <input type="text" placeholder="Buscar comida" name="palabra" id="palabra">

                <input id="buscar" type="submit" value="Buscar" name="buscar" class="boton-buscar">

            </form>
            <div id="bloque-tabla">
                <table>
                    <tr>
                        <td><span>CODIGO</span></td>
                        <td><span>COMIDA</span></td>
                        <td><span>IMAGEN</span></td>
                        <td><span>VIDEO</span></td>
                    </tr>
                    <?php
                    if ($lista) {
                        foreach ($lista as $key => $value) {
                            echo '<tr>';
                            echo"<td>$value[0]</td>";
                            echo"<td>$value[1]</td>";
                            echo"<td><img src=" . $value[4] . " width='" . "100'" . " height='" . "100'" . "></td>";
                            echo"<td><a href=$value[5]>Preparación</a></td>";
                            echo '</tr>';
                        }
                    }
                    else{
                            echo '<tr>';
                                echo '<td>No hay resultados que mostrar</td>';
                            echo '</tr>';
                        
                    }
                    ?>
                    
                </table>    
            </div>

    </body>
    <script src="js.js"></script>

    <script>
        btn = document.getElementById('buscar');
        inputPalabra = document.getElementById('palabra');
        btn.onclick = function () {
            if (inputPalabra.value.length===0) {
                alert("Favor introduzca un parametro de busqueda, no puede ir vacio");
            }
        }
    </script>
</html>