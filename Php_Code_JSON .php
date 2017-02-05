<!DOCTYPE html>
<html>
<head>WELCOME</head>
<body  style="background-color:#E4E5E7">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
</style>
</head>
<body>


<?php
$url= 'http://stuxnet.herokuapp.com/api/';
$options = array(
  'http' => array(
    'header'  => array(
                   'name: '.$_GET['name'],
                 ),
    'method'  => 'GET',
  ),
);
$context = stream_context_create($options);
$output = file_get_contents($url, false,$context);

$arr = json_decode($output,true);


?>


<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>NAME</th> 
    <th>PHONE_NO</th>
    <th>STATUS</th>
  </tr>
    
	<br>
        <?php
	for($x=0;$x<count($arr);$x++)
	{
                ?>
	<tr>
         <td><?php echo $arr[$x]['id']; ?>
	
   	<td><?php echo $arr[$x]['name']; ?>
	<td><?php echo $arr[$x]['ph_no']; ?>
	<td><?php echo $arr[$x]['stats']; ?>
	</tr>
         <?php
	
               }
                 ?>
    
    <br>
</table>
</body>
</html>
