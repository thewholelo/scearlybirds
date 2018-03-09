<?php


$servername = "localhost";
$username = "twl0987";
$password = "twl0987";
$dbname = "scEarlyBirds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
	DATE_FORMAT(dr.dateStart, '%e %M %y') AS dateStart,
	dr.timeStart,

  MAX(IF(reg.intSortOrder = 1, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS \"Player One\",
  MAX(IF(reg.intSortOrder = 2, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS \"Player Two\",
  MAX(IF(reg.intSortOrder = 3, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS \"Player Three\",
  MAX(IF(reg.intSortOrder = 4, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS \"Player Four\"
FROM
	tblRegistration reg
	JOIN tblPlayer pl ON
		pl.id = reg.fk_Player
	JOIN tblDraw dr ON
		dr.id = reg.fk_Draw
	JOIN tblCourse cr ON
		cr.id = reg.fk_Course
GROUP BY
	reg.`fk_Draw`
ORDER BY
	dr.`dateStart`,
	dr.timeStart
	";
$result = $conn->query($sql);


?>