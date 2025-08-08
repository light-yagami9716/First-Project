<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "<h1>Hello, " . $name . "!</h1>";
    echo "<a href='index.html'>Go Back</a>";
} else {
    header("Location: index.html");
    exit();
}
?>
