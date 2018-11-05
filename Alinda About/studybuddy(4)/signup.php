<?php
    include_once 'header.php';
 ?>
    <section class="main-container">
        <div class="main-wrapper">
              <h2>Sign up</h2>
              <form class="signup-form" action="back-end/signup-back-end.php" method="POST"><?The POST method hides the password in the url?>
                <input type="text" name="first" placeholder="First name">
                <input type="text" name="last" placeholder="Last name">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="phone" placeholder="Phone number (xxx-xxx-xxxx)">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="confirmpwd" placeholder="Confirm Password">
                <label class="container">Student
                <input type="radio" checked="checked" name="demi" value="0">
                <span class="checkmark"></span>
                </label>
                <label class="container">Demi
                <input type="radio" checked="checked" name="demi" value="1">
                <span class="checkmark"></span>
              </label><br>
                <button type="submit" name="submit">Sign up</button>
                <button type="reset" name="reset">Reset</button>
                <button formaction="index.php">Cancel</button>
              </form>
        </div>
    </section>
<?php
    include_once 'footer.php';
?>
