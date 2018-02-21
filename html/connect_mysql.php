<?php
$link = mysqli_connect("172.18.0.2:3306", "root", "123456", "mysql");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "</br>";

    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "</br>";

    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL. "\n";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL. "\n";

mysqli_close($link);
?>