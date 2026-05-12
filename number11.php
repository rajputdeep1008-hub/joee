<html>
<body>

<form method="post">

Enter String:
<input type="text" name="txt">

<input type="submit" value="Submit">

</form>

<?php

if(isset($_POST['txt']))
{
    $str = $_POST['txt'];

    echo "<h3>String Operations</h3>";

    // String Length
    echo "String Length: " . strlen($str);

    echo "<br><br>";

    // Reverse String
    echo "Reverse String: " . strrev($str);

    echo "<br><br>";

    // Substring
    echo "Substring: " . substr($str,0,3);
}

?>

</body>
</html>