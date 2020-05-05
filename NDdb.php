<html>
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

#container ul {
        list-style: none;
        display:table;
        margin:auto;
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

</style>
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
                                        <li>Hurricanes</li>
                                        <li>Hailstorms</li>
                                        <li>Tornadoes</li>
                                </ul>
                        </li>
                        <li>Long-Term
                                <ul>
                                        <li>Droughts</li>
                                        <li>Forest Fires</li>
                                </ul>
                        </li>
                        <li>Water
                                <ul>
                                        <li>Landslides</li>
                                        <li>Floods</li>
                                </ul>
                        </li>
                        <li>Earthquakes</li>
                </ul>
        </li>
        <li>Relief Agencies</li>
        <li>Locations</li>
</ul>

<img src="https://images.pexels.com/photos/76969/cold-front-warm-front-hurricane-felix-76969.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Hurricane" width="300" height="200" align="left">

<img src="https://images.pexels.com/photos/51951/forest-fire-fire-smoke-conservation-51951.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="ForestFire" width="300" height="200" align="left" style="margin:300px -300px">

<img src="https://images.unsplash.com/photo-1545276070-ec815f01c6ec?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="Flood" width="300" height="200" align="right">

<img src="https://images.unsplash.com/photo-1581059729226-c493d3086748?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1640&q=80" alt="Tornado" width="300" height="200" align="right" style="margin:300px -300px">

</body>
</html>

      
