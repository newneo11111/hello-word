<?php

$connection = mysqli_connect("localhost", "root", "", "test");

mysqli_set_charset($connection,'utf8');


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	body{font-size: 18px;
	     color: green;}
   td{padding: 20px;}	     
</style>
<body>
<table border="1">

<?php

 $result = mysqli_query($connection, "SELECT * FROM oblast ");
	while ($row=mysqli_fetch_row($result))
{



    $result_3 = mysqli_query($connection, "SELECT * FROM rayon WHERE id_oblast=".$row[0]);
	while ($row_3=mysqli_fetch_row($result_3))
{
$i++;

    $result_1 = mysqli_query($connection, "SELECT * FROM ayl WHERE id_rayon=".$row_3[0]);
	while ($row_1=mysqli_fetch_row($result_1))
{
$j++;

}
}

echo '<tr><td>'.$row[1].'</td><td><a href="get.php?id='.$row[0].'" class="list-group-item ">'.$row[2].'('. $i.'район, '.$j.'айыл ,калкынын саны'.$row_1[3].')';
$i=0;
$j=0;
$k=0;
'</a></td></tr><br>';

 }					
?>



</table>
</body>
</html>