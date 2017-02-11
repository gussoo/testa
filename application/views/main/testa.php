<?php 

$hora = date('H');
//if($hora < 16) echo "Hola Che!!".$hora;
//Inicializamos las plantas i la posición de los ascensores.
for ($i=0; $i < 4; $i++) { 
	$planta[$i] = $i;
}

//$hora = 10; //Podemos manipular la hora para testeo.

/**** Lógica actual de sessiones para posición inicial ****/
$pos_original_asc[0] = 0;
$pos_original_asc[1] = 0;
$pos_original_asc[2] = 0;


if($hora >= 9)
{
	$pos_original_asc[0] = 0;
	$pos_original_asc[1] = 0;
	$pos_original_asc[2] = 0;

} if (($hora >= 11) && ($hora <= 18)) {
	$pos_original_asc[0] = 0;

} if ($hora >= 11) {
	$pos_original_asc[1] = 0;
	$pos_original_asc[2] = 0;

} if ($hora == 14) {
	$pos_original_asc[0] = 1;
	$pos_original_asc[1] = 2;
	$pos_original_asc[2] = 3;

} if ($hora == 15) {
	$pos_original_asc[1] = 2;
	$pos_original_asc[2] = 3;

} if (($hora >= 18) && ($hora <= 20)) {
	$pos_original_asc[0] = 1;
	$pos_original_asc[1] = 2;
	$pos_original_asc[2] = 3;
}
/********************************************************/
?>

<h1>Ascensores TESTA</h1>
<br>
<h3>Posici&oacute;n actual:</h3>
<br>
<p><b>Ascensor 1</b> se encuentra en la Planta <?php echo $pos_original_asc[0];?></p>
<br>
<p><b>Ascensor 2</b> se encuentra en la Planta <?php echo $pos_original_asc[1];?></p>
<br>
<p><b>Ascensor 3</b> se encuentra en la Planta <?php echo $pos_original_asc[2];?></p>
<br><br>
<h3>Simulaci&oacute;n de Plantas:</h3>

<h4>Planta Baja:</h4>
<button onclick="llamar(0);" class="myButton">Llamar</button>
<form id="planta-fm-0" method="post">
	<?php 
	for ($i=0; $i < 3; $i++) 
	{
		$g = $i+1;
		if($pos_original_asc[$i]==0) echo '<p><input type="hidden" value="'.$g.'" name="asc" />Ascensor '.$g.'</p><p>Donde vamos&#63; <select name="pv"><option value="1">Planta 1</option><option value="2">Planta 2</option><option value="3">Planta 3</option></select>&nbsp;<button class="myButton2" name="vamos" value="0">Ir</button></p>';
	}
	?>
</form>

<h4>Planta 1:</h4>
<button onclick="llamar(1);" class="myButton">Llamar</button>
<form id="planta-fm-1" method="post">
	<?php 
	for ($i=0; $i < 3; $i++) 
	{
		$g = $i+1;
		if($pos_original_asc[$i]==1) echo '<p><input type="hidden" value="'.$g.'" name="asc" />Ascensor '.$g.'</p><p>Donde vamos&#63; <select name="pv"><option value="0">Planta 0</option><option value="2">Planta 2</option><option value="3">Planta 3</option></select>&nbsp;<button class="myButton2" name="vamos" value="1">Ir</button></p>';
	}
	?>
</form>

<h4>Planta 2:</h4>
<button onclick="llamar(2);" class="myButton">Llamar</button>
<form id="planta-fm-2" method="post">
	<?php 
	for ($i=0; $i < 3; $i++) 
	{
		$g = $i+1;
		if($pos_original_asc[$i]==2) echo '<p><input type="hidden" value="'.$g.'" name="asc" />Ascensor '.$g.'</p><p>Donde vamos&#63; <select name="pv"><option value="0">Planta 0</option><option value="1">Planta 1</option><option value="3">Planta 3</option></select>&nbsp;<button class="myButton2" name="vamos" value="2">Ir</button></p>';
	}
	?>
</form>

<h4>Planta 3:</h4>
<button onclick="llamar(3);" class="myButton">Llamar</button>
<form id="planta-fm-3" method="post">
	<?php 
	for ($i=0; $i < 3; $i++) 
	{
		$g = $i+1;
		if($pos_original_asc[$i]==3) echo '<p><input type="hidden" value="'.$g.'" name="asc" />Ascensor '.$g.'</p><p>Donde vamos&#63; <select name="pv"><option value="0">Planta 0</option><option value="1">Planta 1</option><option value="2">Planta 3</option></select>&nbsp;<button class="myButton2" name="vamos" value="3">Ir</button></p>';
	}
	?>
</form>
