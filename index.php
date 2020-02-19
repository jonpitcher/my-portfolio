

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<title></title>
</head>
<body>

<a href="archivosFinalesJohan">---Archivos finales para Johan</a>
<br><br><br>

<a href="archivosExperimentales">---Archivos experimentales para mi </a>


	<?php  

	echo "<br>"."<br>";
	include_once 'archivosFinalesJohan/000initialAccessDatabase.php';
	echo "<br>"."<br>";
	include_once 'archivosFinalesJohan/formulario.php';
	echo "<br>"."<br>";
	include_once 'archivosFinalesJohan/tabla.php';
	echo "<br>"."<br>";

	?>


</body>



<script type="text/javascript">

	function myfunction(){
	
	document.write("hello");

	}
</script>

<style type="text/css">
	
	div{

		height: 150px;
		width: 400px;
		overflow: auto;
	}

	td{

		width: 20px;
	}

	a{

		font-size: 24px;
	}
</style>

</html>