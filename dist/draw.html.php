<?php
include 'includes/header.html.php';
?>

<?php
include 'draw.php';
?>


  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="large-12 cell">
        <h4>The Draw!</h4>
        <p>Have a look at the following draw, if you're player 1 then you're in charge of booking your team at the club.</p>
      </div>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-padding-x grid-padding-y">
      <div class="medium-12 cell">
        <?php
        if ($result->num_rows > 0) {
          echo "
          <table style='text-align: Left;'>
            <tr>
              <th>Date</th>
              <th>Tee Off Time</th>
              <th>Course</th>
              <th>Tee Off Hole</th>
              <th>Player 1</th>
              <th>Player 2</th>
              <th>Player 3</th>
              <th>Player 4</th>
            </tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["dateStart"]."</td>
              <td>".$row["timeStart"]."</td>
              <td>".$row["courseName"]."</td>
              <td>".$row["teeOffHole"]."</td>
              <td>".$row["Player One"]."</td>
              <td>".$row["Player Two"]."</td>
              <td>".$row["Player Three"]."</td>
              <td>".$row["Player Four"]."</td>
            </tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
      </div>


    </div>
  </div>

<?php
include 'includes/footer.html.php';
?>

