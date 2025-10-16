<?php 
$fruits = ["apple", "banana", "orange", "mango"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>
    <h1>Fruits list</h1>

    <ol>
    <?php 
        foreach($fruits as $fruit) {
            echo "<li>$fruit</li>";
        }
    ?>
    </ol>
</body>
</html>