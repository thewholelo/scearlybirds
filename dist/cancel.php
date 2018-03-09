<?php
if (get_magic_quotes_gpc())
{
  $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
  while (list($key, $val) = each($process))
  {
    foreach ($val as $k => $v)
    {
      unset($process[$key][$k]);
      if (is_array($v))
      {
        $process[$key][stripslashes($k)] = $v;
        $process[] = &$process[$key][stripslashes($k)];
      }
      else
      {
        $process[$key][stripslashes($k)] = stripslashes($v);
      }
    }
  }
  unset($process);
}
if (isset($_POST['registerPlayers']))
{
  try
  {
    $sql = "INSERT INTO tblRegistration SET
        fk_Player = ''
        , fk_Course = ''
        , fk_Draw = ''
        , fk_RegisteredBy = ''
        , comments = ''
        , blnBooked = 0
        , dteCreated = CURDATE()
        ,dteUpdated = CURDATE()";
    $s = $pdo->prepare($sql);
    $s->bindValue($_POST['currentUser'], $_POST['currentUser']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted players: ' . $e->getMessage();
    //   include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=scEarlyBirds', 'twl0987', 'twl0987');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Please contact Lo on lo@thewholelo.com - Unable to connect to the database server.';
  //include 'error.html.php';
  exit();
}

try
{
  $sqlNames = "SELECT firstName, lastName FROM tblPlayer ORDER BY lastName";
  $sqlCourse = "SELECT courseName, teeOffHole FROM tblCourse";
  $sqlDraw = "SELECT DISTINCT dateStart FROM tblDraw";
  $resultNames = $pdo->query($sqlNames);
  $resultCourses = $pdo->query($sqlCourse);
  $resultDraw = $pdo->query($sqlDraw);
}
catch (PDOException $e)
{
  $error = 'Please contact Lo on lo@thewholelo.com - Error fetching names: ' . $e->getMessage();
  // include 'error.html.php';
  exit();
}

while ($row = $resultNames->fetch())
{
  $names[] = strtoupper($row['lastName']) . ' ' . $row['firstName'];
}

while ($row = $resultCourses->fetch())
{
  $courses[] = $row['courseName'] . ' - ' . $row['teeOffHole'] . ' hole';
}

while ($row = $resultDraw->fetch())
{
  $draws[] = $row['dateStart'];
}

