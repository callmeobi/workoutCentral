<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
      if (isset($_POST[$name])) {
          echo $_POST[$name];
        }
    }
 ?>

<html>
  <head>
    <title>WorkoutCentral!</title>

  <!-- TOSIN, this is the CSS that we'll use for the register page -->
   <link rel="stylesheet" href="assets/css/register.css">


  </head>
  <body>
            <div id="background">
                          <div id="inputContainer">
                                <form id="loginForm" action="register.php" method="post">
                                        <h2>Already Have An Account?</h2>
                                        <p>

                                          <?php echo $account->getError(Constants::$loginFailed); ?>
                                          <label for="loginUsername">Username</label>
                                          <input id="loginUsername" name="loginUsername" type="text" placeholder="ChineduObi" required>
                                        </p>
                                        <p>
                                        <label for="loginPassword">Password</label>
                                        <input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required>
                                        </p>

                                        <button type="submit" name="loginButton">LOG IN</button>
                                </form>

                                <form id="registerForm" action="register.php" method="post">
                                        <h2>Health and Fitness Starts with You.</h2>
                                        <p>
                                          <?php echo $account->getError(Constants::$usernameCharacters); ?>
                                          <?php echo $account->getError(Constants::$usernameTaken); ?>
                                          <label for="registerUsername">Username</label>
                                          <input id="registerUsername" name="registerUsername" type="text" placeholder="TosinFarmer" value="<?php getInputValue('username') ?>" required>
                                        </p>

                                        <p>
                                          <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                                          <label for="firstName">First Name</label>
                                          <input id="firstName" name="firstName" type="text" placeholder="Tosin" value="<?php getInputValue('firstName') ?>" required>
                                        </p>

                                        <p>
                                          <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                                          <label for="lastName">Last Name</label>
                                          <input id="lastName" name="lastName" type="text" placeholder="Obi" value="<?php getInputValue('lastName') ?>" required>
                                        </p>

                                        <p>
                                          <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                                          <?php echo $account->getError(Constants ::$emailIsInvalid); ?>
                                          <?php echo $account->getError(Constants ::$emailTaken); ?>
                                          <label for="email">E-mail</label>
                                          <input id="email" name="email" type="email" placeholder="youremail@gmail.com" value="<?php getInputValue('email') ?>" required>
                                        </p>

                                        <p>
                                          <label for="email2">Confirm E-mail</label>
                                          <input id="email2" name="email2" type="email" placeholder="youremail@gmail.com" value="<?php getInputValue('email2') ?>"required>
                                        </p>


                                        <p>
                                          <?php echo $account->getError(Constants :: $passwordsDoNotMatch); ?>
                                          <?php echo $account->getError(Constants :: $passwordNotAlphanumeric); ?>
                                          <?php echo $account->getError(Constants :: $passwordCharacters); ?>
                                        <label for="password">Password</label>
                                        <input id="password" name="password" type="password" placeholder="Password"required>
                                        </p>

                                        <p>
                                        <label for="password2">Confirm Password</label>
                                        <input id="password2" name="password2" type="password" placeholder="Confirm Password" required>
                                        </p>

                                        <button type="submit" name="registerButton">JOIN US</button>
                                </form>
                          </div>
                      </div>
  </body>
</html>
