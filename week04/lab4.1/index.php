<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>IN618 XSS example</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <p>These pages demonstrate a security vulernability for IN618.  
  Anything you enter on this or following pages is world-readable.
  </p>
  <h2>Log in below</h2>
  <form action="login.php" method="post">
  <p>
    User Name: <input type="text" name="user" /><br />
    Password: <input type="password" name="pass" /><br />
    <input type="submit" value="Sign in"/>
  </p>
  </form>
</body>
</html>

