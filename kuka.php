<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szelektív hulladékgyűjtés</title>
    <link rel="stylesheet" href="stilus1.css">
</head>
<?php 
	include_once "backend.php"
?>

<body>
    <?php
        $szemet=array("papír", "konzerv", "tejes doboz", "sörös üveg", "nylon csomagolás", "krumpli", "elem")
    ?>
    <form action="backend.php" method="post">
        <label for="szemetes">Kidobandó szemét</label>
        <select name="szemetem" id="szemetes">
            <?php
                foreach ($szemet as $ertek) {
                    echo "<option value='$ertek'>$ertek</option>";
                }
            ?>             
        </select>
        <br>
        <input type="image" src="forras/kuka.jpg" alt="kuka" name="kuka">
               
    </form>
    <a href="vizVedelme.php">Víz Védelme</a>
</body>
</html>