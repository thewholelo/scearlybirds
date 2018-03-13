<?php
include 'includes/dbConnectionOpen.php';

//
$sql = "
SELECT
    DATE_FORMAT(dr.dateStart, '%e %M %y') AS dateStart,
    dr.timeStart,
    cr.`courseName`,
    cr.`teeOffHole`,
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
		AND dr.`dateStart` = '2018-03-16'
	JOIN tblCourse cr ON
		cr.id = reg.fk_Course
GROUP BY
	cr.`courseName`,
    cr.`teeOffHole`,
	reg.`fk_Draw`
ORDER BY
	dr.`dateStart`,
	dr.timeStart,
	cr.`courseName`,
    cr.`teeOffHole`
	";
  $result = $conn->query($sql);