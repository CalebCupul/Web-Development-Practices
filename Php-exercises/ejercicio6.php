<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Índice de contaminación</h1>
    <form action="" method="POST">
        <label for="valorA">Nivel de contaminación</label>
        <input  type="number" name="valorA" id="valorA"><br>
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

        if($array['valorA']<=37){
            $val = "aceptable.";
        }else if($array['valorA']<=55){
            $val = "desagradable.";
        }else{
            $val = "peligroso!";
        }

        echo "El nivel de contaminación de ". $array['valorA']. " se considera ". strtoupper($val);
    }
?>