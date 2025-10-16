<!-- <?php

$name = "Naveen";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Practicing PHP integration with HTML <h1>
    
    <p> Hi <?php echo $name ?> <p>
</body>
</html> -->

<!-- <?php
$hour = 12;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
</head>

<body>
    <h1> Practice Series </h1>

    <?php if ($hour < 12): ?>
        Good Morning
    <?php elseif ($hour < 18): ?>
        Good Afternoon
    <?php elseif ($hour < 22): ?>
        Good Evening
    <?php else: ?>
        Good Night
    <?php endif; ?>

</body>

</html> -->

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