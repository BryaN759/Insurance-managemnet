<?php
include 'config.php';
$query="select * from policy";
$result=mysqli_query($query,$conn);

include 'home_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Policy</title>
</head>
<body>
  <table align="center" border="1px" style="width:300px; line-height:30px;">
    <tr>
      <th>Policy ID</th>
      <th>Term</th>
      <th>System</th>
      <th>Coverage</th>
      <th>Age Limit</th>
    </tr>
  </table>
  
</body>
</html>