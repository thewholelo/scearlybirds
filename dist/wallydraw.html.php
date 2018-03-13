<?php
include 'includes/wallyheader.html.php';
?>

<?php
include 'wallydraw.php';
include 'register.php'
?>


  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="large-12 cell">
        <h4>Hi Wally, Pick a draw to look at and make changes here.</h4>
        <p>The draw table will appear after you've made a selection from this drop down menu</p>
        <label>Which draw would you like to look at?
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <select id="mySelection" name="mySelection">
              <option value="choose one" style="display: none;" selected>Pick a date</option>
              <?php foreach ($draws as $draw): ?>
                <option value="<?php echo htmlspecialchars($draw, ENT_QUOTES, 'UTF-8'); ?>">
                  <?php echo htmlspecialchars($draw, ENT_QUOTES, 'UTF-8'); ?>
                </option>
              <?php endforeach; ?>
            </select>
          </form>
        </label>
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

      <div class="medium-4 cell">
        <form>
          <p>Would you like to swap anyone around?</p>

          <label>Swap this player
            <input type="text" placeholder="Player 1">
          </label>

          <label>With this player
            <input type="text" placeholder="Player 2">
          </label>

          <a href="register.html.php" class="button expanded">Swap</a>

        </form>
      </div>
      <div class="medium-4 cell">


      </div>
      <div class="medium-4 cell"></div>


    </div>
  </div>


<?php
include 'includes/footer.html.php';
?>

