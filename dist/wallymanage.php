
<?php
include 'includes/dbConnectionOpen.php';

//

// access and rename variable from input name on wallymanage.html.php and wrap in filter_input for database safety
$buildDrawDate = filter_input(INPUT_POST, 'newDrawDate', FILTER_SANITIZE_STRING);


$sql = "
  INSERT INTO tblDraw 
    (fk_Course, dateStart, timeStart, blnDrawOpen, dteCreated, dteUpdated)
  VALUES
	('1', '$buildDrawDate', '7:24:00', '1', NOW(), NOW())
	,('1', '$buildDrawDate', '7:32:00', '1', NOW(), NOW())
	,('1', '$buildDrawDate', '7:40:00', '1', NOW(), NOW())
	,('1', '$buildDrawDate', '7:48:00', '1', NOW(), NOW())
	,('1', '$buildDrawDate', '7:56:00', '1', NOW(), NOW())
	,('1', '$buildDrawDate', '8:04:00', '1', NOW(), NOW())
	,('1', '$buildDrawDate', '8:12:00', '1', NOW(), NOW())
    ,('1', '$buildDrawDate', '8:20:00', '1', NOW(), NOW())
	,('1', '$buildDrawDate', '8:28:00', '1', NOW(), NOW())
";

// action sql statement
if (!$conn->query($sql)) {
    echo "I'm having some trouble adding this date to the database, please contact Lo" . $conn->error;
}


include 'includes/dbConnectionClose.php';
