<?php
require '../functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Queue Number</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1>
        Queue Number:
        <?php echo $queue_number ?>
      </h1>
      <p>
        You are scheduled to see Dr.
        <?php echo $doctor ?>
        at
        <?php echo $time ?>
      </p>
    </div>
  </body>
</html>

