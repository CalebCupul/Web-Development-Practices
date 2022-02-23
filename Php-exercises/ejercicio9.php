<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Serie de Fibonacci</h1>
    <form action="" method="POST">
        <label for="valorA">Numero de elementos a calcular</label>
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
        $ans = "";

        $first = 0;
        $second = 1;

        for($i = 0; $i < $array['valorA']; $i++){

            if($i == 0){
                $ans .= $first . " " . $second . " ";
                $i++;
            }
            else{
                $first = $first + $second;
                $second = $first + $second;
                $ans .= $first . " " . $second . " ";
                $i++;
            }
        }
    echo "Serie de Fibonacci con " . $array['valorA'] . " elementos: " . $ans;
    }
?>

