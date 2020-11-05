<!DOCTYBE html>
<html>
<head>
<title> pho </title>
</head>
<body>
<?php
$arr=array("5","12","72","44","21");

foreach($arr as $value ){
	echo"valu :".$value . "<br/>";
	
}
echo"sum is " . array_sum($arr) . "<br/>";
echo"avereage is " . $average= array_sum($arr) / count ($arr);



?>
</body>
</html>
