<?php
include 'includes/wallyheader.html.php';
?>

<?php
include 'wallymanage.php';
?>

    <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
          <h4>Hi Wally, On this page you can manage the members list and open new draws</h4>
        </div>
      </div>
    </div>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
<!-- add a new draw date -->
<form action="wallymanage.html.php" method="post">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <h5>Click the triangle to pick a date from the calendar:</h5>
            </div>
        </div>
    </div>
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="medium-4 cell">
            <input name="newDrawDate" type="date">
            <input type="submit" name="createANewDraw" class="button expanded" value="Click me to create the draw">
        </div>
      </div>
    </div>
</form>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
            <p>&nbsp;</p>
        </div>
    </div>
</div>
<form action="addANewMember" method="post">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <h5>Add a new regular member here:</h5>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y">
            <div class="medium-3 cell">
                <label>What is their First Name?
                    <input type="text" placeholder="First Name">
                </label>
            </div>
            <div class="medium-3 cell">
                <label>What is their Last Name?
                    <input type="text" placeholder="Last Name">
                </label>
            </div>
            <div class="medium-3 cell">
                <label>What is their email address?
                    <input type="text" placeholder="Email Address">
                </label>
            </div>
            <div class="medium-3 cell">
                <label>What is their phone number?
                    <input type="text" placeholder="phone number">
                </label>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <a href="register.html.php" class="button expanded">Click me to save the new member's details</a>
            </div>
        </div>
    </div>
</form>

<?php
include 'includes/footer.html.php';
?>

