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
  <p id="p3">
    Here is a picture of a bear for you, <?php echo($_COOKIE['name']); ?>:
  </p>

  <p id="p4">
    <img src="http://placebear.com/400/400" />

  </p>
  <p id="p1">
    Here is the text you entered on the previous form:
  </p>

  <p id="p2">
    <?php echo($_REQUEST['txt']); ?>
  </p>
</body>
</html>


