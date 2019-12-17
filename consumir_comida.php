<?php
$data = json_decode(file_get_contents("https://www.themealdb.com/api/json/v1/1/random.php", true));
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
                <?php
                foreach ($data as $value) {
                    $nombre = $value[0]->strMeal;
                    echo "<h1>Comida: " . $nombre . "<h1>";
                }
                ?>
            </div>
            <div id="bloque-ingrediente">
                <?php
                foreach ($data as $value) {
                    echo "<h2>INGREDIENTES<h2>";
                    for ($index = 1; $index <= 20; $index++) {
                        $ingrediente = "strIngredient" . $index;
                        $valorIngrediente = $value[0]->$ingrediente;
                        if (empty($valorIngrediente)) {
                            break;
                        } else {
                            echo"<li>" . $valorIngrediente . "</li>";
                            $arrayIngredientes[$index]=$valorIngrediente;
                           
                        }
                    }
                }
                
                $todosLosIngredientes = implode(", ", $arrayIngredientes);
               
                ?>
            </div>
            <div id="bloque-contenido">
                <?php
                foreach ($data as $value) {
                    echo '<h2>Instrucciones<h2>';
                    echo '<p>' . $value[0]->strInstructions . '</p>';
                    echo "<img src=" . $value[0]->strMealThumb . " width='" . "400'" . " height='" . "400'" . ">";
                }
                ?>
            </div>
            <div id="bloque-video">
                <?php
                $video = $value[0]->strYoutube;
                $url = substr($video, 32);
                ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo substr("$video", 32); ?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <?php
                include_once './Procesos.php';
                $id = $value[0]->idMeal;
                if(!consultarExistenciaComida($id)){
                $fechaActual = fechaActual();
                $instrucciones = $value[0]->strInstructions;
                $imagen = $value[0]->strMealThumb;
                $fecha = $fechaActual;
                insertarRegistro($id, $nombre, $todosLosIngredientes, $instrucciones, $imagen, $video, $fecha);    
                }
                
            ?>
            </div>
    </body>
    <script src="js.js"></script>
</html