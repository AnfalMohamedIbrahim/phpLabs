<?php
$view = "home";
echo $_SESSION["guest"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our website </title>
</head>
<body>
    <h1 align="center"> Welcome To Our Website <?php echo $view  ?> page</h1>
</body>
</html>


