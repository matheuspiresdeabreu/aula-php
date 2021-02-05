<html>
<head> 

 </head>

<body>
<h1>php - aula 2 </h1>



<form method= "POST">
<label>numero 1</label>
<input type ="text" name= "campo-num1"/>

<label>numero 2</label>
<input type ="text" name= "campo-num2"/>

<button> Enviar</button>

</form>
<p>
<?php
   $n1 = $_POST["campo-num1"];
  $n2 = $_POST["campo-num2"];
$soma = $n1 + $n2;
 if($n1 == $n2)
{
   // verdade
     $maior= " Igual ";


}elseif ($n1 > $n2)

{
//true
$maior = "num 1" ;


} else
{
$maior = "num 2";

 

?>
<br>

Soma: <? echo $soma; ?>
o maior numero é : <?php echo $maior; ?>
</p>

</body>

</html>



