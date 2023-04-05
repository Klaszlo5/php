<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadar Laszlo</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <main>
<?php
$tolt = mysql_connect("localhost","root","");
if (!$tolt)
{
    die('Nem töltött be az oldal: ' . mysql_error());
}
mysql_select_db("toltodik", $tolt);
$quer = mysql_query("SELECT * FROM Form");
echo "<table border='1'>
<tr>
<th>ID</th>
<th>felhasznalo</th>
<th>tel-szam</th>
<th>e-meil</th>
</tr>";

while($sorok = mysql_fetch_array($quer))
  {
  echo "<tr>";
  echo "<td>" . $sorok['Id'] . "</td>";
  echo "<td>" . $sorok['felhasznalo'] . "</td>";
  echo "<td>" . $sorok['tel-szam'] . "</td>";
  echo "<td>" . $sorok['e-meil'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($tolt);
?>
</main>
</body>
</html>