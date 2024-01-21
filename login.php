<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calorie Planner</title>
  <link rel="shortcut icon" href="./src/images/logo-light-1.png" type="image/x-icon">
  <link rel="stylesheet" href="./src/css/login.css">
</head>
<body>
  <div class="container">
    <div class="form-box login">
<<<<<<< HEAD
      <form class="form" method='POST' action="validUser.php">
        <h2>Login</h2>
        <div class="input-box-wrapper">
          <div class="input-box">
            <span class="icon">
              <img src="./src/images/username-input.png" alt="Username-input-img" style="width: 19.2px;">
            </span>
            <input type="text" required placeholder="Username..." class="username" name='username'>
            <p class="is-invalid usernameError">Please enter a valid username!</p>
          </div>
          <div class="input-box">
            <span class="icon">
              <img src="./src/images/password-input.png" alt="Password" style="width: 19.2px;">
            </span>
            <input type="password" required placeholder="Password..." class="password" name='password'>
            <p class="is-invalid passwordError">Please enter a valid password!</p>
          </div>
=======
      <div class="form">
      <h2>Login</h2>
      <div class="input-box-wrapper">
        <div class="input-box">
          <span class="icon">
            <img src="./src/images/username-input.png" alt="Username-input-img" style="width: 19.2px;">
          </span>
          <input type="text" required placeholder="Username..." class="username">
          <p class="is-invalid usernameError">Please enter a valid username!</p>
        </div>
        <div class="input-box">
          <span class="icon">
            <img src="./src/images/password-input.png" alt="Password" style="width: 19.2px;">
          </span>
          <input type="password" required placeholder="Password..." class="password">
          <p class="is-invalid passwordError">Please enter a valid password!</p>
        </div>
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
          <div class="input-box">
            <span class="icon">
              <img src="./src/images/email-input.png" alt="Email" style="width: 19.2px;">
            </span>
<<<<<<< HEAD
            <input type="text" required placeholder="Email..." class="email" name='email'>
=======
            <input type="text" required placeholder="Email..." class="email">
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
            <p class="is-invalid emailError">Please enter a valid email!</p>
          </div>
        </div>
        <div class="remember-forgot">
          <label>
            <input type="checkbox"> Remember Me
          </label>
          <a href="#">Forgot Password?</a>
        </div>
<<<<<<< HEAD
        <a href=""><button type="submit" name='submit' class="submitBtn loginBtn">Login</button></a>
        <div class="login-register">
          <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <form class="form" action="registerUsers.php" method="POST">
=======
        <a href=""><button type="submit" class="submitBtn loginBtn">Login</button></a>
        <div class="login-register">
          <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
        </div>
      </div>
    </div>

    <div class="form-box register">
      <div class="form">
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
        <h2>Registration</h2>
        <div class="input-box-wrapper">
          <div class="input-box">
            <span class="icon">
              <img src="./src/images/username-input.png" alt="Username-input-img" style="width: 19.2px;">
            </span>
<<<<<<< HEAD
            <input type="text" required placeholder="Username..." class="register-username" name='registerUsername'>
=======
            <input type="text" required placeholder="Username..." class="register-username">
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
            <p class="is-invalid register-usernameError">Please enter a valid username!</p>
          </div>
          <div class="input-box">
            <span class="icon">
              <img src="./src/images/password-input.png" alt="Password" style="width: 19.2px;">
            </span>
<<<<<<< HEAD
            <input type="password" required placeholder="Password..." class="register-password" name="registerPassword">
=======
            <input type="password" required placeholder="Password..." class="register-password">
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
            <p class="is-invalid register-passwordError">Please enter a valid password!</p>
          </div>
        </div>
        <div class="input-box-wrapper">
          <div class="input-box">
            <span class="icon">
              <img src="./src/images/email-input.png" alt="Email" style="width: 19.2px;">
            </span>
<<<<<<< HEAD
            <input type="text" required placeholder="Email..." class="register-email" name='registerEmail'>
=======
            <input type="text" required placeholder="Email..." class="register-email">
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
            <p class="is-invalid register-emailError">Please enter a valid email!</p>
          </div>
        </div>
        <div class="remember-forgot">
          <label>
            <input type="checkbox">I agree to the terms & conditions
          </label>
        </div>
<<<<<<< HEAD
        <button type="submit" name='register' class="submitBtn registerBtn">Register</button>
        <div class="login-register">
          <p>Already have an account?<a href="#" class="login-link">Login</a></p>
        </div>
      </form>
=======
        <button type="submit" class="submitBtn registerBtn">Register</button>
        <div class="login-register">
          <p>Already have an account?<a href="#" class="login-link">Login</a></p>
        </div>
      </div>
>>>>>>> 817f2554a8716215050b4bf1897a65bd46e5b2d4
    </div>
  </div>



<script src="./src/js/login.js"></script>
</body>
</html>
