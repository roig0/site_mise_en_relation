<!DOCTYPE html>
<html>

<?php require 'Vue/entete.inc.php';?>
<?php //require 'Vue/navbar.inc.php';?>

<head>
    <link href="src/style/style.css" rel="stylesheet">
</head>
<body>
<?php

if (!empty($_GET) and isset($_GET["page"]) and file_exists("./Controller/" . $_GET["page"] . ".php")) {
    require "./Controller/" . $_GET["page"] . ".php";
} else {
    require "./Controller/index.php";
}
?>
</body>

</html>


<!-- Custom styles for this template -->
<link href="src/style/navbar-top-fixed.css" rel="stylesheet">
</head>
<body>