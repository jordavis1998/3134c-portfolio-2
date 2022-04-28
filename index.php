<?php
    INCLUDE("database.php");
?>
<html>
  <head>
    <title>Residents</title>
  </head>
  <body>
   <h2>Current Residents</h2>
    <?php
       connect();
       salesTable();
       updateTable();
       close();
    ?>
    <form action="index.php" method="post">
      <label for="cid">ID</label>
      <input type="number" id="customer_id" name="customer_id">
      <br>
      <label for="first_name" >First Name</label>
      <input type="text" id="first_name" name="first_name">
      <br>
      <label for="last_name">Last Name</label>
      <input type="text" id="last_name" name="last_name">
      <br>
      <label for="city">City</label>
      <input type="text" id="city" name="city">
      <br>
      <label for="state">State</label>
      <input type="text" id="state" name="state">
      <br>
    </form>
  </body>
</html>