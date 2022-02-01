<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Formula general</h1>
    <form action="" method="POST">
        <label for="valorA">Valor A</label>
        <input  type="number" name="valorA" id="valorA"><br>
        <label for="valorB">Valor B</label>
        <input  type="number" name="valorB" id="valorB"><br>
        <label for="valorC">Valor C</label>
        <input  type="number" name="valorC" id="valorC"><br>
        <input type="submit" name="submit" value="Convertir">
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

        $x1 = -$array['valorA'] + (sqrt($array['valorB'])-(4*$array['valorA']*$array['valorC']))/(2*$array['valorC']);
        echo "X1 = ".$x1.'<br>';
        $x2 = -$array['valorA'] - (sqrt($array['valorB'])-(4*$array['valorA']*$array['valorC']))/(2*$array['valorC']);
        echo "X2 = ".$x2;
    }
?>