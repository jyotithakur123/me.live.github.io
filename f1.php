<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  height: 50%;
}

td, th {
  border: 1px solid #74b0f6;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #74b0f6;
}
</style>
</head>
<body>

<h2> Table</h2>
<?php

echo '<table>';  
for ($i=1; $i <= 10; $i++) { // init , condition , statement 
  echo '</tr>'."".'<tr>'; // creating new lines 
  echo '<td>'. $i .'</td>'; // adding data into line
  echo '<td>'. "*" .'</td>';
  echo '<td>'. 2 .'</td>';
  echo '<td>'. "=" .'</td>';
  echo '<td>'.$i * 2 .'</td>';// adding data into line
}
echo '</table>';
?>

 
<!-- </table> -->

</body>
</html>
