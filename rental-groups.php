<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Rental Groups</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <base href="http://localhost/">

</head>

<body>

<?php
include 'connectdb.php';
?>   

    <header class="header-main">
        <div class="header-main-logo">
            <img src="img\kingston-condo.jpg" alt="condo">
            <h1 class="header-main-title"><a href="rental.html">KINGSTON RENTAL PROPERTIES</a></h1>
            <nav class="header-main-nav">
                <ul class="header-main-nav">
                    <li class="header-main-nav"><a href="about.html"><strong>ABOUT US</strong></a></li>
                    <li class="header-main-nav"><a href="properties.html"><strong>PROPERTIES</strong></a></li>
                    <li class="header-main-nav"><a href="updatepreferences.php"><strong>RENTAL GROUPS</strong></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!--this should go right before the table of data bases we want to be dynamic-->
<form action="getcodes.php" method="post">

<?php
include 'getdata.php';
?>

<input type="submit" value="Get Codes">
</form>

<?php
$connection = NULL;
?>

</body>
</html>