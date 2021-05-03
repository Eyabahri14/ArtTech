<?php
$link = mysqli_connect("localhost", "root", "", "web","3308");
if (!$link)

  {
  die('Could not connect: ' . mysql_error());
  }
$result = mysqli_query($link, "SELECT * FROM cmnt");
echo "<table border='1'>

<tr>

<th>Comment ID</th>

<th>User ID</th>

<th>Date</th>

<th>Message</th>

</tr>";
while($row = mysqli_fetch_array($result)){

  $cid = $row['cid'];
  $uid = $row['uid'];
  $dat = $row['dat'];
  $msg = $row['message'];

 echo "<tr>";

  echo "<td>" . $cid . "</td>";

  echo "<td>" . $uid . "</td>";

  echo "<td>" . $dat . "</td>";

  echo "<td>" . $msg . "</td>";

  echo "</tr>";
}
echo "</table>";
 
mysqli_close($link);
?>
