<?php
$submit = filter_input(INPUT_POST, 'submit')
$cars = filter_input(INPUT_POST, 'cars')
$spz = filter_input(INPUT_POST, 'spz')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodej auta</title>
</head>
<body>
    <h1> Prodejte svoje auto </h1>
    
    <label for="vehicle-type"> Typ vozidla </label>

    <?php
    if(isset($submit)) { ?>

    <h2> Vozidlo prodáno <h2>
    <p> Prodal jste <p>     
        
     <p> Auto: <?= $cars ?> </p>
     <p> Spz: <?= $spz ?> </p>

     <?php } else { ?>

    <form action="index.php" method="post">

    <select name="cars" id="vehicle-type"> 
     <option> Osobní </option>
     <option> Nákladní </option>
     <option> Karavan </option>
     <option> Autobus </option>
    </select>

      <label for="spz"> SPZ: </label>
      <input type="text" id="spz" name="spz"> <br>
      <p> <input type="submit" value="submit"> </p>

    </form> </p>
        
        <?php } ?>
</body>
</html>