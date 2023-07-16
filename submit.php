<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
</head>
<body>
    <h1>Submitted Data</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>
