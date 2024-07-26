<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="css/auth.css">
  <link rel="stylesheet" href="css/noti.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Log in</title>
</head>

<body>
  <?php require __DIR__ . '/partials/noti.view.php'; ?>

  <div class="auth-container">
    <div class="auth-intro-container">
      <img src="images/logo.png" alt="Base logo">
      <h1>Log in</h1>
      <p>Welcome back. Log in to start working.</p>
    </div>
    <hr>
    <form class="auth-form" action="" method="post">
      <div class="auth-form-section">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email" <?= isset($_SESSION["_flash"]['loginForm']) ? 'value="' . htmlspecialchars($_SESSION["_flash"]['loginForm']['email']) . '"' : '' ?>>
      </div>
      <div class="auth-form-section">
        <div class="password-line">
          <label for="password">Password</label>
          <a href="/recover" class="text-blue">Forget your password?</a>
        </div>
        <input type="password" id="password" name="password" placeholder="Password">
      </div>
      <div class="keep-logged-in-section">
        <input type="checkbox" id="keep-logged-in" name="keep-logged-in" value="1">
        <label for="keep-logged-in">Keep me logged in</label>
      </div>
      <button class="submit-button" type="submit">Log in to start working</button>
    </form>
    <div class="further-info-section">
      <p>New user? <a href="/signup" class="text-blue">Create account</a></p>
    </div>
  </div>
</body>

</html>
