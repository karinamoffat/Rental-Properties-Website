<?php
$result = $connection->query("select * from RentalGroup");
echo "<ol>";
while ($row = $result->fetch()) {
	echo "<li>" . $row["Code"] . " - " . $row["TypePreference"] . "</li>";
}
echo "</ol>";

$query = "SELECT * FROM RentalGroup";
$result = $connection->query($query);

echo "Select your rental group: </br>";

while ($row = $result->fetch()) {
	echo '<input type="radio" name="groupcode" value="' . $row["Code"] . '">';
	echo $row["Code"] . "</br>";
}
?>