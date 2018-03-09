<?php
include 'includes/header.html.php';
?>

<?php
include 'cancel.php';
?>

<form action="registerPlayers" method="post">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="large-12 cell">
        <h4>Cancel and Contact Form</h4>
      </div>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-padding-x grid-padding-y">
      <div class="medium-6 cell">
        <label>Your Member Number
          <input type="text" placeholder="eg. 2107">
        </label>
        <label>Your Name
          <select name="currentUser">
            <option class="defaultDropDown" value="choose one" style="display: none;" selected>Choose One</option>
            <?php foreach ($names as $name): ?>
              <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </label>
        <label>On Which Day
          <select>
            <option value="choose one" style="display: none;" selected>Choose One</option>
            <?php foreach ($draws as $draw): ?>
              <option value="<?php echo htmlspecialchars($draw, ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($draw, ENT_QUOTES, 'UTF-8'); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </label>
        <!--button-->
        <a href="#" class="button expanded">Who am I playing with?</a>
      </div>
      <div class="medium-6 cell">
        <p>We have you registered to play on Palms 1st at 6:04am with:</p>
        <ul>
          <li>SMITH Adam</li>
          <li>BROWN John</li>
          <li>JONES Mark</li>
        </ul>

        <h5>Comments</h5>
        <p>Do you have any notes you would like to include in your cancellation?</p>
        <label>Comments:
          <textarea placeholder="eg. Catch you next time boys"></textarea>
        </label>

        <a href="register.html.php" class="button expanded">Contact the Displayed Members</a>

      </div>
    </div>
</form>

<!-- closing the tags opened in includes/header.html.php -->
<script src="assets/js/app.js"></script>
</body>
</html>