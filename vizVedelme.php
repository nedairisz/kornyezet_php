<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vízvédelme</title>
    <link rel="stylesheet" href="stilus1.css">
</head>
<body>
    <form action="vizBackend.php" method="post">
        <label for="v">A folyadékáram sebessége:</label>
            <input type="number" name="sebesseg" id="V" value=1 min="0"><br>
        <label for="v">A folyadékáram keresztmetszete (m2):</label>
            <input type="number" name="keresztMetszet" id="A" value=1 min="0"><br>
        <input type="submit" value="Számol" name="szamol">
    </form>
</body>
</html>