<?php
$view = "login";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Welcome to <?php echo $view ?> page </h1>
    <form action="../index.php" method="post" >
    <input type="text" placeholder="username" name="userName">
    <input type="text" placeholder="password" name="password" >
    <button type="submit"> login as user</button>
</form>

</body>
</html>