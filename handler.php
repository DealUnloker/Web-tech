<?php 

if ($_POST) {
    echo '<pre>';
    $dec_num = htmlspecialchars($_POST['dec_num']);
    $bin_num = decbin($dec_num);
    echo "<h1>" . "Decimal number " . $dec_num . " in binary: " .  $bin_num . "</h1>";
    echo '</pre>';
}

?>