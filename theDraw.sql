SELECT
	DATE_FORMAT(dr.dateStart, '%e %M %y'),
	dr.timeStart,

  MAX(IF(reg.intSortOrder = 1, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS "Player One",
  MAX(IF(reg.intSortOrder = 2, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS "Player Two",
  MAX(IF(reg.intSortOrder = 3, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS "Player Three",
  MAX(IF(reg.intSortOrder = 4, CONCAT(pl.`firstName`, ' ', pl.`lastName`) , NULL)) AS "Player Four"
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