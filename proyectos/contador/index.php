
<?php
$timer = 60*5; // seconds
$timestamp_file = 'end_timestamp.txt';

// $date=$years.":".$days.":".$hours.":".$minutes.":".$seconds;

if(!file_exists($timestamp_file))
{
$now=0;
$years=0;
$days=0;
$hours=0;
$minutes=0;
$seconds=0;

$thedate =$years.":".$days.":".$hours.":".$minutes.":".$seconds;
  file_put_contents($timestamp_file, $thedate);

}
$end_timestamp = file_get_contents($timestamp_file);

// $new_timestamp=$end_timestamp;
$indate=explode(':',  $end_timestamp);
$years=$indate[0];
$days=$indate[1];
$hours=$indate[2];
$minutes=$indate[3];
$seconds=$indate[4]+=1;
$new_date = $years.":".$days.":".$hours.":".$minutes.":".$seconds;
if ($seconds>=60) {
	$minutes++;
	$seconds=0;
}
if ($minutes>=60) {
	$hours++;
	$minutes=0;
}
if ($hours>=24) {
	$days++;
	$hours=0;
}
if ($days>=365) {
	$years++;
	$days=0;
}
$new_date_new = $years.":".$days.":".$hours.":".$minutes.":".$seconds;

 file_put_contents($timestamp_file, $new_date_new);

?>

<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="refresh" content="1" >
	<link href="https://fonts.googleapis.com/css?family=Coda+Caption:800|Jaldi:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/counter.css"> 

	<title>%</title>
</head>
<body>

<h1>
<div class="h1">
<?php echo $new_date_new; ?>
</div>
<div id="foc"></div>
</h1>
<div class="p">
<p>Este contador muestra el tiempo que esta página lleva estando activa. Si hay más visitantes conectados el tiempo se multiplica por esa cantidad. Se puso en marcha el día xx-xx-xx coincidiendo con el lanzamiento del nº 3 de la revista Accesos.</p>
<p>guillem bayo & bajonazo lópez xx/ xx/ 2019.</p>
</body>
</body>
</html>

<script type="text/javascript">
	var window_focus;

	$(window).focus(function() {
	    window_focus = true;
	}).blur(function() {
	    window_focus = false;
	});

	
	$(document).ready(function(){
		 setInterval(function() {
        	// $("#foc").html('has focus? ' + window_focus + '<br>');
   			
   			 }, 1000);
	})


</script>
