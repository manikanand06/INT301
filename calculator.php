<html>
<body>
<form method="post">
Enter a first number:
<input type="number" name="number1">
Enter a second number:
<input type="number" name="number2">
<br>
Enter operator No.<br>
1.Addition<br>
2.Substract<br>
3.Multiply<br>
4.Divide<br>
<input type="number" name="operator">
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php 
if($_POST){
$number1 = $_POST['number1'];  
$number2 = $_POST['number2'];  
$operator = $_POST['operator']; 

switch($operator)
{
case 1:
echo "".$number1+$number2;
break;
case 2:
echo "".$number1-$number2;
break;
case 3:
echo "".$number1*$number2;
break;
case 4:
echo "".$number1/$number2;
break;

default: echo "Invalid Input";
}
}
?>


