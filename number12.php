<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array_in_php </title>
</head>
<body>
    <h1 style="color: orange"> PHP ARRAY EXAMPLE </h1>
    <?php
    $fruits = array("mango","banana","apple","guava","pineapple","orange");
    echo "fruits list: ";
    echo "<br>";
    for($i = 0; $i<count($fruits); $i ++){
        echo $fruits[$i];
        echo "<br>";
    }
?>
</body>
</html>