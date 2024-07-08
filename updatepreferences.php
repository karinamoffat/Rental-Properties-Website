<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Preferences</title>
</head>


<body>

<?php
include 'connectdb.php';
?>

<h1>Update Preferences</h1>

<?php
include 'getdata.php';
?>

<h2> Which preference would you like to change? </h2>

<form action="addnewpet.php" method="post">

<input type="radio" name="typepreference" value="typepreference">Accommodation Preference<br>
<input type="radio" name="rentalpreference" value="rentalpreference">Rental Preference<br>
<input type="radio" name="otherpreferences" value="otherpreferences">Other Preferences<br>

Update preference here: <input type="text" name="updatepreference"><br>

<input type="submit" value="Update Preference">

</form>

<?php
$connection =- NULL;
?>

</body>