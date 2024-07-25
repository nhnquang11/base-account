<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="css/auth.css">
  <link rel="stylesheet" href="css/noti.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Create account</title>
</head>

<body>
  <?php require __DIR__ . '/partials/noti.view.php'; ?>

  <div class="auth-container">
    <div class="auth-intro-container">
      <img src="images/logo.png" alt="Base logo">
      <h1>Sign up</h1>
      <p>Create a new account.</p>
    </div>
    <hr>
    <form class="auth-form" method="post">
      <div class="auth-form-section">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" <?= isset($_SESSION["_flash"]['signupForm']) ? 'value="' . htmlspecialchars($_SESSION["_flash"]['signupForm']['email']) . '"' : '' ?>>
      </div>
      <div class="auth-form-section">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username" <?= isset($_SESSION["_flash"]['signupForm']) ? 'value="' . htmlspecialchars($_SESSION["_flash"]['signupForm']['username']) . '"' : '' ?>>
      </div>
      <div class="auth-form-section">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" <?= isset($_SESSION["_flash"]['signupForm']) ? 'value="' . htmlspecialchars($_SESSION["_flash"]['signupForm']['name']) . '"' : '' ?>>
      </div>
      <div class="auth-form-section">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">
      </div>
      <div class="keep-logged-in-section">
        <input type="checkbox" id="keep-logged-in" name="keep-logged-in" value="1">
        <label for="keep-logged-in">Keep me logged in</label>
      </div>
      <button class="submit-button" type="submit">Create account</button>
    </form>
    <div class="further-info-section">
      <p>Already have an account? <a href="/login" class="text-blue">Log in</a></p>
    </div>
  </div>
</body>

</html>
