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
                    <li class="header-main-nav"><a href="rental-groups.php"><strong>RENTAL GROUPS</strong></a></li>
                </ul>
            </nav>
        </div>
    </header>

<?php
 //Match selected code to code in renter (so we match students to their group)
    $whichCode= $_POST["groupcode"];
    //get renters in rental group
    $query = 'SELECT * FROM People INNER JOIN Renter ON People.ID = Renter.RID INNER JOIN RentalGroup ON Renter.RGCode = RentalGroup.Code WHERE RentalGroup.Code = ' . $whichCode .'';
    
    $result=$connection->query($query);

    echo "<table>";
    if ($row = $result->fetch())
        echo "Preferences: " . $row["TypePreference"] . ", " . $row["RentPreference"] . ", " . $row["OtherPreferences"] . "<br>";
    
    while($row=$result->fetch()) {
        echo "<tr><td>" . $row["FName"] . "</td><td>" . $row["LName"] . "</td><td>";
    }
    echo "</table>";
?>

<!--format this to look like a button when it is actually just a link at bottom of the page-->
<h6><a href="updatepreferences.php"><h4>Update Group Preferences</a></h4>



</table>
<?php
    $connection=NULL;
?>

</body>
</html>
