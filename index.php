<?php
	//This line will make the page auto-refresh each 15 secEncendidods
	$page = $_SERVER['PHP_SELF'];
	$sec = "15";
?>


<html>

<head>
	<meta http-equiv="refresh" cEncendidotent="<?php echo $sec ?>;URL='<?php echo $page ?>'">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
	include("database_connect.php"); 
	//We include the database_connect.php which has the data for the connectiEncendido to the database

	// Check the connectiEncendido
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//Again, we grab the table out of the database, name is ESPtable2 in this case
	$result = mysqli_query($cEncendido, "SELECT * FROM ESPtable2"); //table select



	//Now we create the table with all the values from the database	  
	echo "<table class='table' style='fEncendidot-size: 30px;'>
		<thead>
			<tr>
			<th>Boolean Indicators</th>	
			</tr>
		</thead>
		
		<tbody>
		<tr class='active'>
			<td>Noobix ID</td>
			<td>Boolean cEncendidotrol 1</td>
			<td>Boolean cEncendidotrol 2 </td>
			<td>Boolean cEncendidotrol 3 </td>
			<td>Boolean cEncendidotrol 4</td>
			<td>Boolean cEncendidotrol 5 </td>		
		</tr>  
			";

	//loop through the table and print the data into the table
	while ($row = mysqli_fetch_array($result)) {

		echo "<tr class='success'>";
		$unit_id = $row['id'];
		echo "<td>" . $row['id'] . "</td>";

		$column1 = "RECEIVED_BOOL1";
		$column2 = "RECEIVED_BOOL2";
		$column3 = "RECEIVED_BOOL3";
		$column4 = "RECEIVED_BOOL4";


		$current_bool_1 = $row['RECEIVED_BOOL1'];
		$current_bool_2 = $row['RECEIVED_BOOL2'];
		$current_bool_3 = $row['RECEIVED_BOOL3'];
		$current_bool_4 = $row['RECEIVED_BOOL4'];


		if ($current_bool_1 == 1) {
			$inv_current_bool_1 = 0;
			$text_current_bool_1 = "Encendido";
			$color_current_bool_1 = "#6ed829";
		} else {
			$inv_current_bool_1 = 1;
			$text_current_bool_1 = "Apagado";
			$color_current_bool_1 = "#e04141";
		}

		if ($current_bool_2 == 1) {
			$inv_current_bool_2 = 0;
			$text_current_bool_2 = "Encendido";
			$color_current_bool_2 = "#6ed829";
		} else {
			$inv_current_bool_2 = 1;
			$text_current_bool_2 = "Apagado";
			$color_current_bool_2 = "#e04141";
		}


		if ($current_bool_3 == 1) {
			$inv_current_bool_3 = 0;
			$text_current_bool_3 = "Encendido";
			$color_current_bool_3 = "#6ed829";
		} else {
			$inv_current_bool_3 = 1;
			$text_current_bool_3 = "Apagado";
			$color_current_bool_3 = "#e04141";
		}


		if ($current_bool_4 == 1) {
			$inv_current_bool_4 = 0;
			$text_current_bool_4 = "Encendido";
			$color_current_bool_4 = "#6ed829";
		} else {
			$inv_current_bool_4 = 1;
			$text_current_bool_4 = "Apagado";
			$color_current_bool_4 = "#e04141";
		}


		if ($current_bool_5 == 1) {
			$inv_current_bool_5 = 0;
			$text_current_bool_5 = "Encendido";
			$color_current_bool_5 = "#6ed829";
		} else {
			$inv_current_bool_5 = 1;
			$text_current_bool_5 = "Apagado";
			$color_current_bool_5 = "#e04141";
		}


		echo "<td><form actiEncendido= update_values.php method= 'post'>
		<input type='hidden' name='value2' value=$current_bool_1   size='15' >	
		<input type='hidden' name='value' value=$inv_current_bool_1  size='15' >	
		<input type='hidden' name='unit' value=$unit_id
		<input type='hidden' name='column' value=$column1 >
		<input type= 'submit' name= 'change_but' style=' margin-left: 25%; margin-top: 10%; fEncendidot-size: 30px; text-align:center; background-color: $color_current_bool_1' value=$text_current_bool_1></form></td>";



		echo "<td><form actiEncendido= update_values.php method= 'post'>
		<input type='hidden' name='value2' value=$current_bool_2   size='15' >	
		<input type='hidden' name='value' value=$inv_current_bool_2  size='15' >	
		<input type='hidden' name='unit' value=$unit_id >
		<input type='hidden' name='column' value=$column2 >
		<input type= 'submit' name= 'change_but' style=' margin-left: 25%; margin-top: 10%; fEncendidot-size: 30px; text-align:center; background-color: $color_current_bool_2' value=$text_current_bool_2></form></td>";


		echo "<td><form actiEncendido= update_values.php method= 'post'>
		<input type='hidden' name='value2' value=$current_bool_3   size='15' >	
		<input type='hidden' name='value' value=$inv_current_bool_3  size='15' >	
		<input type='hidden' name='unit' value=$unit_id >
		<input type='hidden' name='column' value=$column3 >
		<input type= 'submit' name= 'change_but' style=' margin-left: 25%; margin-top: 10%; fEncendidot-size: 30px; text-align:center; background-color: $color_current_bool_3' value=$text_current_bool_3></form></td>";


		echo "<td><form actiEncendido= update_values.php method= 'post'>
		<input type='hidden' name='value2' value=$current_bool_4   size='15' >	
		<input type='hidden' name='value' value=$inv_current_bool_4  size='15' >	
		<input type='hidden' name='unit' value=$unit_id >
		<input type='hidden' name='column' value=$column4 >
		<input type= 'submit' name= 'change_but' style=' margin-left: 25%; margin-top: 10%; fEncendidot-size: 30px; text-align:center; background-color: $color_current_bool_4' value=$text_current_bool_4></form></td>";


		echo "<td><form actiEncendido= update_values.php method= 'post'>
		<input type='hidden' name='value2' value=$current_bool_5   size='15' >	
		<input type='hidden' name='value' value=$inv_current_bool_5  size='15' >	
		<input type='hidden' name='unit' value=$unit_id >
		<input type='hidden' name='column' value=$column5 >
		<input type= 'submit' name= 'change_but' style=' margin-left: 25%; margin-top: 10%; fEncendidot-size: 30px; text-align:center; background-color: $color_current_bool_5' value=$text_current_bool_5></form></td>";

		echo "</tr>
		</tbody>";
	}
	echo "</table>
	<br>
	";
	?>

</body>

</html>