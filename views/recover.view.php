<?php
use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();
$_SESSION['captcha'] = $builder->getPhrase();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="css/auth.css">
  <link rel="stylesheet" href="css/noti.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Password Recovery</title>
</head>

<body>
  <?php require __DIR__ . '/partials/noti.view.php'; ?>

  <div class="auth-container">
    <div class="auth-intro-container">
      <img src="images/logo.png" alt="Base logo">
      <h1>Password Recovery</h1>
      <p>Enter your information, submit, then check your email for password recovery.</p>
    </div>
    <hr>
    <form class="auth-form" method="post">
      <div class="auth-form-section">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email" <?= isset($_SESSION["_flash"]['recoverForm']) ? 'value="' . htmlspecialchars($_SESSION["_flash"]['recoverForm']['email']) . '"' : '' ?>>
      </div>
      <div class="auth-form-section">
        <label for="captcha">Code</label>
        <input type="text" id="captcha" name="captcha" placeholder="Security code">
        <img style="margin-top:30px" src="<?php echo $builder->inline(); ?>" />
      </div>
      <button class="submit-button" type="submit">Recover password</button>
    </form>
    <div class="further-info-section">
      <p>Just rememebered your password? <a href="/login" class="text-blue">Back to log in</a></p>
    </div>
  </div>
</body>

</html>

