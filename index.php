<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LB 2</title>
</head>
<body>
    <form action="index.php" method="post">
        <h2>Your dec number: </h2>
        <input type="text" name="dec_num" />
        <input type="submit" name="submit" value="Click me!" />
    </form>

    <?php 

    if ($_POST) {
        echo '<pre>';
        $dec_num = htmlspecialchars($_POST['dec_num']);
        $bin_num = decbin($dec_num);
        echo "<h3>" . "Decimal number " . $dec_num . " in binary: " .  $bin_num . "</h3>";
        echo '</pre>';
    }

    ?>

</body>
</html>