<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <style>
        .tabla{
            margin: 0 auto;
        }
        td{
            width: 3.5rem;
            height: 3.5rem;
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>
<body>

    <?php
    
    
        conversion();
    
    ?>
    
</body>
</html>

<?php
    // function pre_r($array){
    //     echo '<pre>';
    //         print_r($array);
    //     echo '<pre>';
    // }

    function conversion(){
        echo '<table class="tabla">';
        for ($i=1; $i < 10; $i++) { 
            echo '<tr>';
            for ($j=1; $j < 6; $j++){

                echo '<td>' . 'Celda ' . $j . '</td>';
            }
            echo '</tr>';
        }      
        echo '</table>';  
    }
?>