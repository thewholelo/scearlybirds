
<?php
include 'includes/dbConnectionOpen.php';

//

$sql = "
  DECLARE @drawDate DATE DEFAULT 0;
  SET @drawDate = '2018-01-01';
      
  INSERT INTO tblDraw 
    (fk_Course, dateStart, timeStart, blnDrawOpen, dteCreated, dteUpdated)
  VALUES
	('1', @drawDate, '7:24:00', '1', NOW(), NOW())
	,('1', @drawDate, '7:32:00', '1', NOW(), NOW())
	,('1', @drawDate, '7:40:00', '1', NOW(), NOW())
	,('1', @drawDate, '7:48:00', '1', NOW(), NOW())
	,('1', @drawDate, '7:56:00', '1', NOW(), NOW())
	,('1', @drawDate, '8:04:00', '1', NOW(), NOW())
	,('1', @drawDate, '8:12:00', '1', NOW(), NOW())
    ,('1', @drawDate, '8:20:00', '1', NOW(), NOW())
	,('1', @drawDate, '8:28:00', '1', NOW(), NOW())
";


include 'includes/dbConnectionClose.php';
