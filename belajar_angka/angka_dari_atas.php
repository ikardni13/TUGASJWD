<!DOCTYPE html>
<html>
<head>
    <title>Piramida Angka Terbalik</title>
</head>
<body>
    <?php
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 5; $j >= $i; $j--) {
            echo $j;
        }
        echo "<br>";
    }
    ?>
</body>
</html>
