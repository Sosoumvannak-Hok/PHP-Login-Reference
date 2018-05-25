<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
   
<?php

if (isset($_SESSION['u_first'])) {
    echo "<header><p>" . $_SESSION['u_first'] . "</p></header><a href=\"includes/logout.inc.php\">Logout</a>";
    # header("Location: home.php");
    exit();
}

?>