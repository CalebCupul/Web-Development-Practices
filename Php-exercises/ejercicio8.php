<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <style>
        .tabla{
            margin-left: 5rem;
            /* border: 1px solid black; */
        }
        td{
            width: 1.5rem;
            height: 1.5rem;
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <form action="" method="POST">
        <label for="valorA">Numero a calcular</label>
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
        echo '<table class="tabla">';
        for ($i=1; $i < 13; $i++) { 

            echo '<tr>'.'<td>'.$array['valorA'].'</td>'.'<td>'.' x '. '</td>'.'<td>'.$i.'</td>'.'<td>'.' = '. '</td>'.'<td>'.$array['valorA']*$i.'</td>'.'</tr>';
            // echo '<tr>';
            // echo  '<td>'.$i.'</td>';
            // echo '</tr>';
        }      
        echo '</table>';  
    }
?>