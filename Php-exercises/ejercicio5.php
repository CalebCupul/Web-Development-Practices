<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Teorema de Pitágoras</h1>
    <form action="" method="POST">
        <label for="valorA">Valor A</label>
        <input  type="number" name="valorA" id="valorA"><br>
        <label for="valorB">Valor B</label>
        <input  type="number" name="valorB" id="valorB"><br>
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

        $c = sqrt(pow($array['valorA'],2) + pow($array['valorB'],2));
        echo "Cateto A = ".$array['valorA'].'<br>';
        echo "Cateto B = ".$array['valorB'].'<br>';
        echo "Hipotenusa = ".$c;

    }
?>