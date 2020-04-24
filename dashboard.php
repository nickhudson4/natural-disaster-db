<html>
	<head>
  		<title>PHP Test</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<h2>Insert Into Database</h2>
		<form method=post action="dashboard.php">
			<p>Table:<input type="text" name="table"> </p>
			<p>Name:<input type="text" name="name"> </p>
			<p>Number:<input type="text" name="number"> </p>
			<p>Major:<input type="text" name="major"> </p>
			<input type="submit">
		</form>
		<?php 
			//if ($connection=@mysqli_connect('localhost', $_POST['username'], $_POST['password'], 'nhudson1DB')){
			if ($connection=@mysqli_connect('localhost', 'nhudson1', 'nhudson1', 'nhudson1DB')){
				print'<p>Successfully connected</p>';
			}
			else {
				print'<p>Failed to connect to SQL server</p>';
			}

			// INSERT QUERY
			$tableName = $_POST['table'];
			$name= $_POST['name'];
			$number = $_POST['number'];
			$major = $_POST['major'];
			if(!empty($tableName) && !empty($name) && !empty($number) && !empty($major)){ 
				echo "inserting";
				$insert_query = "INSERT INTO {$tableName} (name,number,major)
					VALUES ('{$name}', '{$number}', '{$major}')";
				$r2=mysqli_query($connection, $insert_query);
			}

			//QUERY TO SHOW TABLE
			$sql = "SELECT name, number, major FROM LabExampleTable";
			$result = $connection->query($sql);
			if ($result->num_rows > 0) {
				echo "<table><tr><th>name</th><th>number</th><th>major</th></tr>";
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["name"]."</td><td>".$row["number"]." ".$row["major"]."</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			$connection->close();
		?> 
 	</body>
</html>
