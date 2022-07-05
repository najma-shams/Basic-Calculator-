<!-- Addition, Multiplication, Subtraction, Division Using PHP -->
<h1 align="center">Basic Calculator</h1>
<form action="" method="post" align="center">
    <input type="text" name="n" value="" placeholder="enter no"><br>
    <input type="text" name="n2" value="" placeholder="enter no"><br>
    <input type="submit" name="a" value=" ADD + " >
    <input type="submit" name="m" value=" MUL * " >
    <input type="submit" name="d" value=" DIV / " >
    <input type="submit" name="s" value=" SUB - " >
</form>

<?php 

if(isset($_POST['a'])) //a is add button name
{
    $n = $_POST['n']; // textbox 1
    $n2 = $_POST['n2']; // textbox 2
    $add = $n+$n2;  // addition logic here
    echo"Addition Is " . $add;
}

//Multipliaction
if(isset($_POST['m'])) //m is multiplication button name
{
    $n = $_POST['n']; // textbox 1
    $n2 = $_POST['n2']; // textbox 2
    $m = $n*$n2;  // multiplication logic here
    echo"Multiplication Is " . $m;
}


//Division
if(isset($_POST['d'])) //d is division button name
{
    $n = $_POST['n']; // textbox 1
    $n2 = $_POST['n2']; // textbox 2
    $d = $n/$n2;  // division logic here
    echo"Division Is " . $d;
}


//Subtraction
if(isset($_POST['s'])) //s is subtraction button name
{
    $n = $_POST['n']; // textbox 1
    $n2 = $_POST['n2']; // textbox 2
    $s = $n-$n2;  // minus logic here
    echo"Subtraction Is " . $s;
}

?>