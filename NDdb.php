<html>
<head>
	<style>
	*{
		margin: 0px;
		padding: 0px;
	}

	body {
		background-color: #5cd6ff;
		margin-top: 0px;
	}
	.header {
	  padding: 20px;
	  text-align: center;
	  background: #3ef747;
	  color: black;
	  font-size: 26px;
	}

	#container input{
		background: none;
		color: white;
		border: none;
		padding: 0;
		font: inherit;
		cursor: pointer;
		outline: inherit;
		list-style: none;
		display:table;
		margin:auto;
		background-color: #0015ff;
		width: 150px;
		border: 1px solid black;
		height: 50px;
float: left;
	}
	#container input:hover{
		background-color: #85C1E9;
	}

	#container ul {
		list-style: none;
		display:table;
		margin:auto;
		width: 100%;
		text-align: center;
	}


	#container ul li:hover{
		background-color: #85C1E9;
	}
	#container ul li{
		background-color: #0015ff;
		width: 150px;
		border: 1px solid black;
		height: 50px;
		line-height: 50px;
		text-align: center;
		float: left;
		color: white;
		font-size: 19px;
		position: relative;
	}
	#container ul ul{
		display: none;
	}

	#container ul li:hover > ul{
		display: block;
	}

	#container ul ul ul{
		margin-left: 150px;
		top: 0px;
		position: absolute;
	}
	button {
		background-color: #0015ff;
		text-align: center;
		font-size: 19px;
		color: white;
		border: 1px solid black;
		height: 50px;
		width: 150px;
	}

	button:hover{
		 background-color: #85C1E9;
	}


	</style>
</head>
<body>

<div class="header">
  <h1>U.S. Natural Disaster Database</h1>
</div>

<div id="container">
	<ul>
		<li>Disasters
			<ul>
				<li>Short-Term
					<ul>
						<form action="NDdb.php" method="post">
							<input type="submit" value="Hurricanes" name="table">
							<input type="submit" value="Hailstorms" name="table">
							<input type="submit" value="Tornadoes" name="table">
						</form>
						<!--
						<button>Hurricanes</button>
						<button>Hailstorms</button>
						<button>Tornadoes</button>
						-->
					</ul>
				</li>
				<li>Long-Term
					<ul>
						<form action="NDdb.php" method="post">
							<input type="submit" value="Droughts" name="table">
							<input type="submit" value="Forest Fires" name="table">
						</form>
						<!--
						<button>Droughts</button>
						<button>Forest Fires</button>
						-->
					</ul>
				</li>
				<li>Water
					<ul>
						<form action="NDdb.php" method="post">
							<input type="submit" value="Landslides" name="table">
							<input type="submit" value="Floods" name="table">
						</form>
						<!--<button>Landslides</button>
						<button>Floods</button>-->
					</ul>
				</li>

				<form action="NDdb.php" method="post">
					<input type="submit" value="Earthquakes" name="table">
				</form>
				<!--<button>Earthquakes</button>-->
			</ul>
		</li>

		<form action="NDdb.php" method="post">
			<input type="submit" value="Relief_Agencies" name="table">
			<input type="submit" value="Locations" name="table">
		</form>
		<!--
		<button>Relief Agencies</button>
		<button>Locations</button>
		-->
	</ul>
	<div id="home_button">
		<button onclick="location.href='login.php'">Logout</button>
	</div>
</div>

<?php 
	//LOGIN CHECK CODE
	session_start();
	if (!isset($_SESSION['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
	}
	echo $_SESSION['username'];
	if ($connection=@mysqli_connect('localhost', $_SESSION['username'], $_SESSION['password'], 'NaturalDisasterDB')){
	//if ($connection=@mysqli_connect('localhost', 'nhudson1', 'nhudson1', 'nhudson1DB')){
		print'<p>Successfully connected</p>';
	}
	else {
		print'<p>Failed to connect to SQL server</p>';
	}
	
	//QUERY TO SHOW TABLE
	$tableName = $_POST['table'];
	echo "Showing data for $tableName";
	$sql = "SELECT * FROM $tableName";
	//$sql = "SELECT name, number, major FROM LabExampleTable";
	$result = $connection->query($sql);
	DisplayTable($result);
	
	$connection->close();


	function DisplayTable($data){
		$output = "<table>";
		foreach($data as $key => $var) {
			//$output .= '<tr>';
			if($key===0) {
				$output .= '<tr>';
				foreach($var as $col => $val) {
					$output .= "<td><strong>" . $col . '</strong></td>';
				}
				$output .= '</tr>';
				foreach($var as $col => $val) {
					$output .= '<td>' . $val . '</td>';
				}
				$output .= '</tr>';
			}
			else {
				$output .= '<tr>';
				foreach($var as $col => $val) {
					$output .= '<td>' . $val . '</td>';
				}
				$output .= '</tr>';
			}
		}
		$output .= '</table>';
		echo $output;
	}
?> 
<img src="https://images.pexels.com/photos/76969/cold-front-warm-front-hurricane-felix-76969.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Hurricane" width="300" height="200" align="left">

<img src="https://images.pexels.com/photos/51951/forest-fire-fire-smoke-conservation-51951.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="ForestFire" width="300" height="200" align="left" style="margin:300px -300px">

<img src="https://images.unsplash.com/photo-1545276070-ec815f01c6ec?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Flood" width="300" height="200" align="right">

<img src="https://images.unsplash.com/photo-1581059729226-c493d3086748?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1640&q=80" alt="Tornado" width="300" height="200" align="right" style="margin:300px -300px">
<script src="index.js"></script>
</body>
</html>

      
