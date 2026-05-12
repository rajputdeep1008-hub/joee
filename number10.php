<!DOCTYPE html>
<html>
<head>
    <title>POST Method Example</title>
</head>

<body>

    <h2>User Form</h2>

    <!-- HTML Form -->
    <form method="post">

        Enter Name:
        <input type="text" name="username">

        <br><br>

        Enter Age:
        <input type="number" name="age">

        <br><br>

        <input type="submit" value="Submit">

    </form>

    <hr>

    <?php

        // Check form submitted or not
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // Store form data
            $name = $_POST["username"];
            $age = $_POST["age"];

            // Display submitted data
            echo "<h3>Submitted Data</h3>";

            echo "Name: " . $name . "<br>";

            echo "Age: " . $age;
        }

    ?>

</body>
</html>