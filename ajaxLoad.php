<?php
$con = mysqli_connect("localhost", "root","", "test") or die("Connection Failed");

$sql = "SELECT * FROM student";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");
$output = "";
if (mysqli_num_row($result) > 0) {
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr>
      <th>ID</th>
      <th>Name</th>
    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      $output .= "<tr>
      <td>{$row["id"]}</td>
      <td>{$row["first_name"]} {$row["last_name"]}</td>
      </tr>"
    }

    $output .= "</table>";
    mysqli_close($con);
    echo $output;
}
else {
  echo "<h2> NO Record Found</h2>"
}
 ?>
