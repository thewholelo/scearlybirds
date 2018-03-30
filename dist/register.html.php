<?php
include 'includes/header.html.php';
?>

<?php
include 'register.php';
?>

      <form action="registerPlayers" method="post">
        <div class="grid-container">
          <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
              <h4>Register your interest for a Friday Early Birds game here</h4>
            </div>
          </div>
        </div>
        <div class="grid-container">
          <h5>Step 01 (required) - Your name and the date</h5>
          <div class="grid-x grid-padding-x grid-padding-y">
            <div class="medium-4 cell">
              <label>Enter your member number here:
                <input type="text" placeholder="eg. 2107">
              </label>
            </div>
            <div class="medium-4 cell">
              <label>Pick your name from this list:
                <select name="currentUser">
                  <option class="defaultDropDown" value="pick your name" style="display: none;" selected>-- select your name --</option>
                  <?php foreach ($names as $name): ?>
                  <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                  <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </label>
            </div>
            <div class="medium-4 cell">
              <label>Select the Friday you want to play on:
                <select>
                  <option value="pick a date" style="display: none;" selected>-- select the day --</option>
                  <?php foreach ($draws as $draw): ?>
                  <option value="<?php echo htmlspecialchars($draw, ENT_QUOTES, 'UTF-8'); ?>">
                  <?php echo htmlspecialchars($draw, ENT_QUOTES, 'UTF-8'); ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </label>
            </div>
          </div>
        </div>

        <div class="grid-container">
          <h5>Step 02 (optional) - Is there anyone else you want to register while you're here?</h5>
          <div class="grid-x grid-padding-x grid-padding-y">
            <div class="medium-4 cell">
              <label>Extra player (1):
                <select>
                  <option value="pick a name" style="display: none;" selected>-- select their name(1) --</option>
                  <?php foreach ($names as $name): ?>
                    <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                      <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </label>
            </div>
            <div class="medium-4 cell">
              <label>Extra player (2):
                <select>
                  <option value="choose one" style="display: none;" selected>-- select their name(2) --</option>
                  <?php foreach ($names as $name): ?>
                    <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                      <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </label>
            </div>
            <div class="medium-4 cell">
              <label>Extra player (3):
                <select>
                  <option value="choose one" style="display: none;" selected>-- select their name(3) --</option>
                  <?php foreach ($names as $name): ?>
                    <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                      <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </label>
            </div>
          </div>
        </div>

        <div class="grid-container">
          <h5>Step 03 (optional) - If you have a guest to register, provide their details here:</h5>
          <div class="grid-x grid-padding-x grid-padding-y">
            <div class="medium-4 cell">
              <label>Guest First Name
                <input type="text" placeholder="Guest First Name">
              </label>
            </div>
            <div class="medium-4 cell">
              <label>Guest Last Name
                <input type="text" placeholder="Guest Last Name">
              </label>
            </div>
            <div class="medium-4 cell">
              <label>Guest Email
                <input type="text" placeholder="Guest Email">
              </label>
              <p class="small"><em>*leave this blank if you wish for us to use your email for contact</em></p>
            </div>
          </div>
        </div>
        <div class="grid-container">
          <div class="grid-x grid-padding-x grid-padding-y">
            <div class="large-12 cell">
              <h5>Comments</h5>
              <p>Do you have any additional comments or notes you would like to provide us?</p>
              <label>Notes
                <textarea placeholder="eg. time preference"></textarea>
              </label>
            </div>
          </div>
        </div>
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="large-12 cell">
            <a href="register.html.php" class="button expanded">Register the Selected Members</a>
          </div>
        </div>
      </form>


<?php
include 'includes/footer.html.php';
?>

