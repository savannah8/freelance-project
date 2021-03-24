
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/jobs.css">
</head>
<body>



<?php

include "db_conn.php";
$sql = "SELECT * FROM jobs";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<br>';
        echo   '<div class="container">';
        echo '<div class="card">';
        echo   '<div class="card-container">';
        echo '<h4 id="text2">' .$row["job_compensation"].  ' KSH </h4>';
        echo  '<h3>' .$row["job_title"].'</h3>';
        
        echo '<h4 id="text1">' .$row["job_category"]. '</h3>';
        echo '<a href="particularjob.php" class="btn1">View job </a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
       
    }
} else {
    echo "0 results";
}
?>


</body>
</html>