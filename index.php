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
            
        </div>
        <div class="bloque-titulo">
            <h1>MILES DE RECETAS A SU ALCANCE</h1>
<button id="btnCargar" name="mostrar" class="boton">Mostrar recetas</button>
        </div>

        <div id="bloque-tabla">
            <?php
            
            if (isset($lista)) {
            echo"<table>";
                echo "<tr>";
                    echo"<td><span>CODIGO</span></td>";
                    echo"<td><span>COMIDA</span></td>";
                    echo"<td><span>IMAGEN</span></td>";
                    echo"<td><span>VIDEO</span></td>";
                echo"</tr>";
                
                
                    foreach ($lista as $key => $value) {
                        echo '<tr>';
                        echo"<td>$value[0]</td>";
                        echo"<td>$value[1]</td>";
                        echo"<td><img src=" . $value[4] . " width='" . "100'" . " height='" . "100'" . "></td>";
                        echo"<td><a href=$value[5]>Preparación</a></td>";
                        echo '</tr>';
                    }
                }
            echo "</table>"
                ?>
                
        </div>

    </body>
    <script src="js.js"></script>
</html>
