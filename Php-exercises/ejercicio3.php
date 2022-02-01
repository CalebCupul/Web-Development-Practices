<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Conversión de grados Centígrados a Farenheit</h1>
    <form action="" method="POST">
        <label for="centigrados">Grados centígrados</label>
        <input  type="number" name="centigrados" id="centigrados"><br>
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
    function conversion($array){
        echo "Grados Centigrados: ".$_POST['centigrados']."℃".'<br>';
        $array['centigrados'] = $array['centigrados'] * 1.8000 + 32;
        echo "Grados Farenheit: ".$array['centigrados']."℉";
    }
?>