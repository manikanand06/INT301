<html>
<body>
<form method="post">
Enter a number:
<input type="number" name="number">
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php 
if($_POST){
$number = $_POST['number'];  
if(($number % 2) == 0){
echo "$number is an Even number";
$num=$number;
while(floor($num))
{
$rem=$num%10;
$res=$res*10+$rem;
$num=$num/10;
}

if(($res==$number)){
echo "  Palindrome";}
else{echo "  not palindrome";}


}else{		
echo "$number is Odd number"; 
$factorial = 1;  
for ($x=$number; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $number is $factorial";  
}
}
?>


