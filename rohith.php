<html>
<body>
<h1>welcome</h1>
<?php
	$var = "rohith";
	$replace = str_replace("rohith", "c00ki3s", $var);#substr to get last 
	echo "hello $replace"
?>
<br>
<hr>
<br>
<?php
	echo 10786 % 8;
?>
<br>
<hr>
<br>
<?php
	$num = 10;
	$num++;
	echo $num;
?>
<br>
<hr>
<br>
	<form action="site.php" method="GET">
	Name: <input type="text" name="name">	
	<button type="submit">submit</button>
	</form>

<br>
<hr>
<br>

	<form action="rohith.php" method="get">
	Number1: <input type="number" name="num1">

        <br>
<br>
	Number2: <input type="number" name="num2">
<br>
	<input type="submit">
</form>
<?php

	echo $_GET["num1"] + $_GET["num2"]


?>
<br>
<hr>
<br>

	<form action="rohith.php" method="post">
	Name: <input type="text" name="user">
        <br>
	password: <input type="text" name="password">
<br>
	<input type="submit">
         </form>
<?php

$user = $_POST["user"];
$password = $_POST["password"];

echo "Ur username is $user <br>";
echo "Ur password is $password <br>";
?>
<br>
<hr>
<html>
<body>
<?php
	$name = array("rohith", "krishna", "sai", "jai", "kandepu");
	 echo $name[1];

?>
</body>
</html>
<br>
<hr>
<?php
$grade = array("rohith"=>"O", "krishna"=>"A+", "sai"=>"O");
$var = $grade[$_POST["student"]];
echo "<h3>ur garde is $var</h3>"
?>	
<form action="rohith.php" method="post">
STU: <input type="text" name="student">
<input type="submit">
<br>
<hr>
<br>
<?php 
function hi($name,$age){
	echo "hi there $name and ur $age<br>";
}
hi("rohit",19);
hi("tarun",19);
hi("gokul",19);
hi("sai",19);
?>
<br>
<hr>
<?php

	$ismale = 0;
	$istall = 0;

	if ($ismale && $istall ){
		echo "ur male and tall";
} elseif(!$ismale && !$istall ){
	echo "ur short woman";
	
}elseif(!$ismale && $istall ){
	echo "ur tall woman";

}elseif($ismale && !$istall ){
	echo "ur shot male"; 

} else{
	echo "ur not male and woman";
}

?>
<br>
<hr>
<?php
function getNum($num1,$num2,$num3){
	if ($num1 >= $num2 && $num1 >= $num3){
		return "$num1 is big";
     }elseif($num2 >= $num1 && $num2 >= $num3){
		return "$num2 is big";
	}else{
		return "$num3 is big";
	}
}
echo getNum(333,444,555)

?>
<br>
<hr>
<form action="rohith.php" method="post">
Number1:<input type="number" step="0.001 name="num1">
op:<input type="text" name="op">
Number2:<input type="number" step="0.0000000001 name="num2">
<br>
<input type="submit">
</form>

<?php 
$number1 = $_POST["num1"];
$number2 = $_POST["num2"];
$op = $_POST["op"];

if ($op == "+"){
	echo $number1 + $number2;
}elseif ($op == "-"){
	echo $number1 - $number2;
}

?>
<br>
<br>
<hr>
<form action="rohith.php" method="post">
grade please
<input type="text" name="grade">
<input type="submit">
</form>

<?php 
$O = $_POST["grade"];
switch($O){
	case "A":
	echo "its good";
	break;
	case "B":
	echo "Not bad";
	break;
}
?>
<br>
<br>
<hr>
<form action="rohith.php" method="post">
gender please
<input type="text" name="grade">
<input type="submit">
</form>

<?php 
$O = $_POST["grade"];
switch($O){
	case "male":
	echo "male";
	break;
	case "female":
	echo "female";
	break;
}
?>
<br>
<br>
<hr>
<?php 
$i=1;
while($i<=10){
echo "$i <br>";
$i++;
}
?>
<br>
<br>
<hr>
<?php 
for($i=1; $i<=10;$i++){
echo "$i <br>";
}
?>
<br>
<br>
<hr>
<?php 
$N = array("rohith","krishna", "jai", "kandepu", "sai");/*comments here*/
for($i=0; $i<count($N);$i++){
echo "$N[$i] <br>";
}
?>
<hr>
<?php include "site.html" ?>
<?php 
$R = "rohith";
$S = "Sai";
$J = "Jai";
include "index.php" ?>
</body>
<html>