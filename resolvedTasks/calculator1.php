<?php 


/*Calculator

Hey, Task-ul de azi implica ce am invatat aseara si azi dimineata. Trebuie sa faci asa:

A =[TEXTBOX] - B=[TEXTBOX] - C=[TEXTBOX] [BUTTON]

Cand apesi pe [BUTTON], in aceeasi pagina, deasupra textbox-urilor sa afiseze asa:

((A+B)/2) - (C * 2)*100 = [REZULTATUL]

REGULI / EXPLICATII

[TEXTBOX] - Un text field in care sa poti introduce valori
[BUTTON] - Un Buton in care scrie Calculeaza Si pe care cand apesi sa trimita formularul la aceeasi pagina
[REZULTATUL] - Se afiseaza rezultatul matematic ce e afisat in stanga egalului din exemplul cu rezultatul
Toate sa se intample pe aceeasi pagina, intr-un fisier ce sa se numeasca calculator1.php Sa folosesti, cum am folosit azi, parametrii GET (sa te asiguri ca formularul , trimite GET (hint: atributul method)<?php 
*/

$A = 0;
$B = 0;
$C = 0;

if (isset($_GET["Textbox1"])) {
	$A = $_GET["Textbox1"];
}

if (isset($_GET["Textbox2"])) {
	$B = $_GET["Textbox2"];
}
if (isset($_GET["Textbox3"])) {
	$C = $_GET["Textbox3"];
}
$rezultat = (($A+$B)/2) - ($C * 2)*100;

?>
<h4>((A+B)/2) - (C * 2)*100 = <?php echo $rezultat;?></h4>
<!DOCTYPE html>
<html>
<head>
	<title>Task 2</title>
</head>
<body>

<form method="GET" action="calculator1.php">


<b>A =</b>
<input type="text" name="Textbox1" />
<b>B =</b>
<input type="text" name="Textbox2" />
<b>C =</b>
<input type="text" name="Textbox3" /><br><br>
<input type="submit" value="Rezultatul" />


</form>




</body>
</html>






