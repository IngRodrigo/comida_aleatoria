<?php
include_once './Procesos.php';
$lista = obtenerComidas();
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
            <button id="btnCargar" name="mostrar">Mostrar recetas</button>
            </div>
            <div class="bloque-titulo">
                <h1>Lista de comidas</h1>
            </div>
            <div id="bloque-tabla">
                <table>
                    <tr>
                        <td><span>CODIGO</span></td>
                        <td><span>COMIDA</span></td>
                        <td><span>IMAGEN</span></td>
                        <td><span>VIDEO</span></td>
                    </tr>
                    <?php
                    foreach ($lista as $key => $value) {
                        echo '<tr>';
                        echo"<td>$value[0]</td>";
                        echo"<td>$value[1]</td>";
                        echo"<td><img src=" . $value[4] . " width='" . "100'" . " height='" . "100'" . "></td>";
                        echo"<td><a href=$value[5]>Preparación</a></td>";
                        echo '</tr>';
                    }
                    ?>

                </table>    
            </div>
        
    </body>
    <script src="js.js"></script>
</html>
