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
						<!--<form action="NDdb.php" method="post">
							<input type="submit" value="Hurricanes" name="table">
							<input type="submit" value="Hailstorms" name="table">
							<input type="submit" value="Tornadoes" name="table">
						</form>-->
					
						<button id='Hurricanes' onclick="SetTable('Hurricanes')">Hurricanes</button>
						<button id='Hailstorms' onclick="SetTable('Hailstorms')">Hailstorms</button>
						<button id='Tornadoes' onclick="SetTable('Tornadoes')">Tornadoes</button>
						
					</ul>
				</li>
				<li>Long-Term
					<ul>
						<!--<form action="NDdb.php" method="post">
							<input type="submit" value="Droughts" name="table">
							<input type="submit" value="Forest Fires" name="table">
						</form>-->
						
						<button id='Droughts' onclick="SetTable('Droughts')">Droughts</button>
						<button id='Forest Fires' onclick="SetTable('Forest Fires')">Forest Fires</button>
						
					</ul>
				</li>
				<li>Water
					<ul>
						<!--<form action="NDdb.php" method="post">
							<input type="submit" value="Landslides" name="table">
							<input type="submit" value="Floods" name="table">
						</form>-->
						<button id='Landslides' onclick="SetTable('Landslides')">Landslides</button>
						<button id='Floods' onclick="SetTable('Floods')">Floods</button>
					</ul>
				</li>
				<!--
				<form action="NDdb.php" method="post">
					<input type="submit" value="Earthquakes" name="table">
				</form>-->
				<button id='Earthquakes' onclick="SetTable('Earthquakes')">Earthquakes</button>
			</ul>
		</li>
		<!--
		<form action="NDdb.php" method="post">
			<input type="submit" value="Agencies" name="table">
			<input type="submit" value="Tornadoes" name="table">
		</form>-->
		<!--
		<button id='Relief Agencies' onclick="SetTable('Relief Agencies')">Relief Agencies</button>
		<button id='Locations' onclick="SetTable('Locations')">Locations</button>
		-->
	</ul>
	<div id="home_button">
		<button onclick="location.href='login.php'">Logout</button>
	</div>
</div>
<div id="form">
	<h2 id="formheader">Select Database</h2>
	<form name="insertform" action="" method="get">
	<label for="att1" id="label1" style="display:none">First Attribute:</label>
	<input type="text" id="att1" name="att1" style="display:none"><br><br>
	<label for="att2" id="label2" style="display:none">Second Attribute:</label>
	<input type="text" id="att2" name="att2" style="display:none"><br><br>
	<label for="att3" id="label3" style="display:none">Third Attribute:</label>
	<input type="text" id="att3" name="att3" style="display:none"><br><br>
	<label for="att4" id="label4" style="display:none">Fourth Attribute:</label>
        <input type="text" id="att4" name="att4" style="display:none"><br><br>
	<label for="att5" id="label5" style="display:none">Fifth Attribute:</label>
        <input type="text" id="att5" name="att5" style="display:none"><br><br>	
	<label for="att6" id="label6" style="display:none">Sixth Attribute:</label>
	<input type="checkbox" id="check1" name="check1" style="display:none" value="" onclick="Display('att6')">
	<input type="text" id="att6" name="att6" style="display:none"><br><br>	
        <label for="att7" id="label7" style="display:none">Seventh Attribute:</label>
	<input type="checkbox" id="check2" name="check2" style="display:none" value="" onclick="Display('att7')">
        <input type="text" id="att7" name="att7" style="display:none"><br><br>	
        <label for="att8" id="label8" style="display:none">Eighth Attribute:</label>                             
	<input type="checkbox" id="check3" name="check3" style="display:none" value="" onclick="Display('att8')">
	<input type="text" id="att8" name="att8" style="display:none"><br><br>
	<label for="att9" id="label9" style="display:none">Ninth Attribute:</label>                             
        <input type="checkbox" id="check4" name="check4" style="display:none" value="" onclick="Display('att9')">
	<input type="text" id="att9" name="att9" style="display:none"><br><br>                                   
	<label for="att10" id="label10" style="display:none">Ninth Attribute:</label>                             
        <input type="checkbox" id="check5" name="check5" style="display:none" value="" onclick="Display('att10')">
	<input type="text" id="att10" name="att10" style="display:none"><br><br>
	</form>
	<button onclick="Insert()">Insert</button>				   
</div>
<script>
function SetTable(table){
	switch(table) {
	case 'Hurricanes':
		document.getElementById('label1').innerHTML = "Name:";
		if(document.getElementById('label1').style.display!='block'){
			Display('label1');                                    
			Display('att1');                                      
                }
		document.getElementById('label2').innerHTML = "Start Date:";
		if(document.getElementById('label2').style.display!='block'){
			Display('label2');                                    
			Display('att2');                                      
		}
		document.getElementById('label3').innerHTML = "Start Location:";
		if(document.getElementById('label3').style.display!='block'){
			Display('label3');                                    
			Display('att3');                                      
		}
		document.getElementById('label4').style.display='none';
		document.getElementById('att4').style.display='none';
		document.getElementById('label5').style.display='none';
		document.getElementById('att5').style.display='none';
		if(document.getElementById('label6').style.display!='block'){
			Display('label6');                               
			Display('check1');                               
		}
		document.getElementById('label7').innerHTML = "Total Damage:";
		if(document.getElementById('label7').style.display!='block'){
			Display('label7');                                
			Display('check2');                                
		}
		document.getElementById('label8').innerHTML = "Total Casualties:";	
		if(document.getElementById('label8').style.display!='block'){
			Display('label8');                                 
			Display('check3');                                 
		}
		document.getElementById('label9').innerHTML = "Wind Speed:";  
		if(document.getElementById('label9').style.display!='block'){
			Display('label9');                                  
			Display('check4');                                  
		}
		document.getElementById('label10').style.display='none';
		document.getElementById('check5').style.display='none';
		document.getElementById('att10').style.display='none';
		break;                                                               
	case 'Hailstorms':
		document.getElementById('label1').innerHTML = "Start Date:";
		if(document.getElementById('label1').style.display!='block'){
        		Display('label1');
			Display('att1');
		}
		document.getElementById('label2').innerHTML = "Start Location:";
		if(document.getElementById('label2').style.display!='block'){
                	Display('label2');
			Display('att2');  
		} 
                document.getElementById('label3').style.display='none';
                document.getElementById('att3').style.display='none';
		document.getElementById('label4').style.display='none';
                document.getElementById('att4').style.display='none';
                document.getElementById('label5').style.display='none';
                document.getElementById('att5').style.display='none';
		document.getElementById('label6').innerHTML = "Ball Size:";
		if(document.getElementById('label6').style.display!='block'){
        		Display('label6');                                    
			Display('check1');                                
                }
		document.getElementById('label7').innerHTML = "Total Damage:";
		if(document.getElementById('label7').style.display!='block'){
        		Display('label7');                                    
			Display('check2');                                    
		}
		document.getElementById('label8').innerHTML = "Total Casualties:";  
		if(document.getElementById('label8').style.display!='block'){
        		Display('label8');                                    
			Display('check3');                                    
		}
		document.getElementById('label9').innerHTML = "Wind Speed:";  
                if(document.getElementById('label9').style.display!='block'){
                 	Display('label9');                                  
                 	Display('check4');                                  
		}
		document.getElementById('label10').style.display='none';
                document.getElementById('check5').style.display='none';
                document.getElementById('att10').style.display='none';
		break;
	case 'Tornadoes':
        	document.getElementById('label1').innerHTML = "Start Date:";
        	if(document.getElementById('label1').style.display!='block'){
        		Display('label1');
        		Display('att1');
        	}
        	document.getElementById('label2').innerHTML = "Start Location:";
        	if(document.getElementById('label2').style.display!='block'){
                	Display('label2');
        		Display('att2');  
        	} 
                document.getElementById('label3').style.display='none';
                document.getElementById('att3').style.display='none';
        	document.getElementById('label4').style.display='none';
                document.getElementById('att4').style.display='none';
                document.getElementById('label5').style.display='none';
                document.getElementById('att5').style.display='none';
        	document.getElementById('label6').innerHTML = "Class:";
        	if(document.getElementById('label6').style.display!='block'){
        		Display('label6');                                    
        		Display('check1');                                
                }
        	document.getElementById('label7').innerHTML = "Total Damage:";
        	if(document.getElementById('label7').style.display!='block'){
        		Display('label7');                                    
        		Display('check2');                                    
        	}
        	document.getElementById('label8').innerHTML = "Total Casualties:";  
        	if(document.getElementById('label8').style.display!='block'){
        		Display('label8');                                    
        		Display('check3');                                    
		}
		document.getElementById('label9').innerHTML = "Wind Speed:";  
                if(document.getElementById('label9').style.display!='block'){
                 	Display('label9');                                  
                 	Display('check4');                                  
		}
		document.getElementById('label10').style.display='none';
                document.getElementById('check5').style.display='none';
                document.getElementById('att10').style.display='none';
		break;                                                                
	case 'Droughts':
        	document.getElementById('label1').innerHTML = "Start Date:";
        	if(document.getElementById('label1').style.display!='block'){
        		Display('label1');
        		Display('att1');
        	}
        	document.getElementById('label2').innerHTML = "Start Location:";
        	if(document.getElementById('label2').style.display!='block'){
                	Display('label2');
        		Display('att2');  
        	} 
                document.getElementById('label3').style.display='none';
                document.getElementById('att3').style.display='none';
        	document.getElementById('label4').style.display='none';
                document.getElementById('att4').style.display='none';
                document.getElementById('label5').style.display='none';
                document.getElementById('att5').style.display='none';
        	document.getElementById('label6').innerHTML = "End Date:";
        	if(document.getElementById('label6').style.display!='block'){
        		Display('label6');                                    
        		Display('check1');                                
                }
        	document.getElementById('label7').innerHTML = "Total Damage:";
        	if(document.getElementById('label7').style.display!='block'){
        		Display('label7');                                    
        		Display('check2');                                    
        	}
        	document.getElementById('label8').innerHTML = "Total Casualties:";  
        	if(document.getElementById('label8').style.display!='block'){
        		Display('label8');                                    
        		Display('check3');                                    
        	}
        	document.getElementById('label9').innerHTML = "Category:";  
                if(document.getElementById('label9').style.display!='block'){
                 	Display('label9');                                  
                 	Display('check4');                                  
		}
		document.getElementById('label10').style.display='none';
                document.getElementById('check5').style.display='none';
                document.getElementById('att10').style.display='none';
        	break;                                                               
	case 'Forest Fires':
        	document.getElementById('label1').innerHTML = "Start Date:";
        	if(document.getElementById('label1').style.display!='block'){
        		Display('label1');
        		Display('att1');
        	}
        	document.getElementById('label2').innerHTML = "Start Location:";
        	if(document.getElementById('label2').style.display!='block'){
                	Display('label2');
        		Display('att2');  
        	} 
                document.getElementById('label3').style.display='none';
                document.getElementById('att3').style.display='none';
        	document.getElementById('label4').style.display='none';
                document.getElementById('att4').style.display='none';
                document.getElementById('label5').style.display='none';
                document.getElementById('att5').style.display='none';
        	document.getElementById('label6').innerHTML = "End Date:";
        	if(document.getElementById('label6').style.display!='block'){
        		Display('label6');                                    
        		Display('check1');                                
                }
        	document.getElementById('label7').innerHTML = "Total Damage:";
        	if(document.getElementById('label7').style.display!='block'){
        		Display('label7');                                    
        		Display('check2');                                    
        	}
        	document.getElementById('label8').innerHTML = "Total Casualties:";  
        	if(document.getElementById('label8').style.display!='block'){
        		Display('label8');                                    
        		Display('check3');                                    
        	}
        	document.getElementById('label9').innerHTML = "Intensity:";  
                if(document.getElementById('label9').style.display!='block'){
                 	Display('label9');                                  
                 	Display('check4');                                  
		}
		document.getElementById('label10').innerHTML = "Severity:";  		
                if(document.getElementById('label10').style.display!='block'){
                 	Display('label10');                                  
			Display('check5');
			if(document.getElementById('check5').checked==true){
				Display('att10');
			}			
		}		                                           
		break;       								
	case 'Landslides':
		document.getElementById('label1').innerHTML = "Start Date:";
        	if(document.getElementById('label1').style.display!='block'){
        		Display('label1');
        		Display('att1');
        	}
        	document.getElementById('label2').innerHTML = "Start Location:";
        	if(document.getElementById('label2').style.display!='block'){
                	Display('label2');
        		Display('att2');  
        	} 
                document.getElementById('label3').style.display='none';
                document.getElementById('att3').style.display='none';
        	document.getElementById('label4').style.display='none';
                document.getElementById('att4').style.display='none';
                document.getElementById('label5').style.display='none';
                document.getElementById('att5').style.display='none';
        	document.getElementById('label6').innerHTML = "Volume Displaced:";
        	if(document.getElementById('label6').style.display!='block'){
        		Display('label6');                                    
        		Display('check1');                                
                }
        	document.getElementById('label7').innerHTML = "Total Damage:";
        	if(document.getElementById('label7').style.display!='block'){
        		Display('label7');                                    
        		Display('check2');                                    
        	}
        	document.getElementById('label8').innerHTML = "Total Casualties:";  
        	if(document.getElementById('label8').style.display!='block'){
        		Display('label8');                                    
        		Display('check3');                                    
        	}
        	document.getElementById('label9').innerHTML = "Rainfall:";  
                if(document.getElementById('label9').style.display!='block'){
                 	Display('label9');                                  
                 	Display('check4');                                  
        	}
		document.getElementById('label10').style.display='none';         	
                document.getElementById('check5').style.display='none';
                document.getElementById('att10').style.display='none';
		break;                                                           
	case 'Floods':
        	document.getElementById('label1').innerHTML = "Start Date:";
        	if(document.getElementById('label1').style.display!='block'){
        		Display('label1');
        		Display('att1');
        	}
        	document.getElementById('label2').innerHTML = "Start Location:";
        	if(document.getElementById('label2').style.display!='block'){
                	Display('label2');
        		Display('att2');  
        	} 
                document.getElementById('label3').style.display='none';
                document.getElementById('att3').style.display='none';
        	document.getElementById('label4').style.display='none';
                document.getElementById('att4').style.display='none';
                document.getElementById('label5').style.display='none';
                document.getElementById('att5').style.display='none';
        	document.getElementById('label6').innerHTML = "Water Level Change:";
        	if(document.getElementById('label6').style.display!='block'){
        		Display('label6');                                    
        		Display('check1');                                
                }
        	document.getElementById('label7').innerHTML = "Total Damage:";
        	if(document.getElementById('label7').style.display!='block'){
        		Display('label7');                                    
        		Display('check2');                                    
        	}
        	document.getElementById('label8').innerHTML = "Total Casualties:";  
        	if(document.getElementById('label8').style.display!='block'){
        		Display('label8');                                    
        		Display('check3');                                    
        	}
        	document.getElementById('label9').innerHTML = "Rainfall:";  
                if(document.getElementById('label9').style.display!='block'){
                 	Display('label9');                                  
                 	Display('check4');                                  
        	}
        	document.getElementById('label10').innerHTML = "Flood Type:";  	
                if(document.getElementById('label10').style.display!='block'){
                 	Display('label10');                                  
                	Display('check5');
                	if(document.getElementById('check5').checked==true){
                		Display('att10');
                	}			
                }		                                           
		break;                                                              
	case 'Earthquakes':
        	document.getElementById('label1').innerHTML = "Start Date:";
        	if(document.getElementById('label1').style.display!='block'){
        		Display('label1');
        		Display('att1');
        	}
        	document.getElementById('label2').innerHTML = "Start Location:";
        	if(document.getElementById('label2').style.display!='block'){
                	Display('label2');
        		Display('att2');  
        	} 
                document.getElementById('label3').style.display='none';
                document.getElementById('att3').style.display='none';
        	document.getElementById('label4').style.display='none';
                document.getElementById('att4').style.display='none';
                document.getElementById('label5').style.display='none';
                document.getElementById('att5').style.display='none';
        	document.getElementById('label6').innerHTML = "Total Damage:";
        	if(document.getElementById('label6').style.display!='block'){
        		Display('label6');                                    
        		Display('check1');                                
                }
        	document.getElementById('label7').innerHTML = "Total Casualties:";
        	if(document.getElementById('label7').style.display!='block'){
        		Display('label7');                                    
        		Display('check2');                                    
		}
		document.getElementById('label8').style.display='none';              	
		document.getElementById('check3').style.display='none';
		document.getElementById('att8').style.display='none';
                document.getElementById('label9').style.display='none';
		document.getElementById('check4').style.display='none';
		document.getElementById('att9').style.display='none';
                document.getElementById('label10').style.display='none';
                document.getElementById('check5').style.display='none';
                document.getElementById('att10').style.display='none';        
        	break;                                                              
	default:
		break;
	}
	document.getElementById('formheader').innerHTML = table;
	$_SESSION["table"] = table;
}
function Display(id){
	if(document.getElementById(id).style.display!='block'){
		document.getElementById(id).style.display='block';
	}else{
		document.getElementById(id).style.display='none';
	}
}
</script>
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
	if ($connection=@mysqli_connect('localhost', $_SESSION['username'], $_SESSION['password'], 'nhudson1DB')){
	//if ($connection=@mysqli_connect('localhost', 'nhudson1', 'nhudson1', 'nhudson1DB')){
		print'<p>Successfully connected</p>';
	}
	else {
		print'<p>Failed to connect to SQL server</p>';
	}
	function Insert(){
		$tab = $_SESSION['table'];
		switch($tab){
		case 'Hurricanes':
			
			break;
		}
	}
	//QUERY TO SHOW TABLE
	$tableName = $_POST['table'];
	echo "Showing data for $tableName";
	//$sql = "SELECT * FROM $tableName";
	$sql = "SELECT name, number, major FROM LabExampleTable";
	$result = $connection->query($sql);
	DisplayTable($result);
	
	$connection->close();


	function DisplayTable($data){
		$output = '<table>';
		foreach($data as $key => $var) {
		    $output .= '<tr>';
		    foreach($var as $k => $v) {
			if ($key === 0) {
			    $output .= '<td><strong>' . $k . '</strong></td>';
			} else {
			    $output .= '<td>' . $v . '</td>';
			}
		    }
		    $output .= '</tr>';
		}
		$output .= '</table>';
		echo $output;
	}
?>
<script src=index.js"></script>
</body>
</html>
