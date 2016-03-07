<?php
$user = $_COOKIE['auth'];
if(!($user)) {
    header("Location: http://xss.foo.org.nz/lab3.2");
    die();
}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>IN618 XSS Lab</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <form action="next.php" method="post">
  <p>
    Enter some text below: <br />
    <textarea name="txt" rows="10" cols="60"></textarea><br />
    
    <input type="submit" value="Enter"/>
  </p>
  </form>
</body>
</html>


