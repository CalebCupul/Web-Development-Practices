<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Tipo de triángulo</h1>
    <form action="" method="POST">
        <label for="valorA">Lado A</label>
        <input  type="number" name="valorA" id="valorA"><br>
        <label for="valorB">Lado B</label>
        <input  type="number" name="valorB" id="valorB"><br>
        <label for="valorC">Lado C</label>
        <input  type="number" name="valorC" id="valorC"><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    
    if(isset($_POST['submit'])){
        conversion($_POST);
    }
    ?>
    
</body>
</html>

<?php
    // function pre_r($array){
    //     echo '<pre>';
    //         print_r($array);
    //     echo '<pre>';
    // }

    function conversion($array){
        
        unset($array['submit']);
        $array = array_unique($array);

        if(count($array) == 1){
            echo 'Tipo de triángulo: equilatero';
        }else if(count($array) == 2){
            echo 'Tipo de triángulo: isoceles';
        }else{
            echo 'Tipo de triángulo: escaleno';
        }
        
    }
?>