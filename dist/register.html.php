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
              <h4>Registration Form</h4>
            </div>
          </div>
        </div>
        <div class="grid-container">
          <div class="grid-x grid-padding-x grid-padding-y">
            <div class="medium-3 cell">
              <label>Your Member Number
                <input type="text" placeholder="eg. 2107">
              </label>
            </div>
            <div class="medium-3 cell">
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
            </div>
            <div class="medium-3 cell">
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
            </div>
            <div class="medium-3 cell">
              <label>On Which Course
                <select>
                  <option value="choose one" style="display: none;" selected>Choose One</option>
                  <?php foreach ($courses as $course): ?>
                    <option value="<?php echo htmlspecialchars($course, ENT_QUOTES, 'UTF-8'); ?>">
                      <?php echo htmlspecialchars($course, ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </label>
            </div>
          </div>
        </div>
        <div class="grid-container">
          <div class="grid-x grid-padding-x grid-padding-y">
            <div class="medium-6 cell">

              <fieldset>
                <legend>Are you registering yourself to play?</legend>
                <input id="checkbox1" type="checkbox"><label for="checkbox1">Yes</label>
                <input id="checkbox2" type="checkbox"><label for="checkbox2">No</label>
              </fieldset>

              <label>Additional Player 1
                <select>
                  <option value="choose one" style="display: none;" selected>Choose One</option>
                  <?php foreach ($names as $name): ?>
                  <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                  <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </label>

              <label>Additional Player 2
                <select>
                  <option value="choose one" style="display: none;" selected>Choose One</option>
                  <?php foreach ($names as $name): ?>
                  <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                  <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </label>

              <label>Additional Player 3
                <select>
                  <option value="choose one" style="display: none;" selected>Choose One</option>
                  <?php foreach ($names as $name): ?>
                  <option value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                  <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </label>

            </div>
            <div class="medium-6 cell">
              <p>If you have guests you would like to register to play, you can do that here</p>

              <label>Guest First Name
                <input type="text" placeholder="Guest First Name">
              </label>

              <label>Guest Last Name
                <input type="text" placeholder="Guest Last Name">
              </label>

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

