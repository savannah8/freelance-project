<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/jobs.css">
    <title>Particular job</title>
</head>
<body>
    
<?php

include "db_conn.php";

$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);

  while ($obj = $result -> fetch_object()) {
    
  }
  $result -> free_result();
?>

</body>
</html>