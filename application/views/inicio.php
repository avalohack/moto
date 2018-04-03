<!DOCTYPE html>
<html>
<head>
	<title>Partes</title>
	<link rel="stylesheet" type="text/css" href="vendor/css/css.css">
</head>
<body>



<div id="tabla"></div>

	<script>
			var obj, dbParam, xmlhttp, myObj, x, txt = "";
			obj = { "table":"customers","id":"id" };
			dbParam = JSON.stringify(obj);
			xmlhttp = new XMLHttpRequest();
			alert(xmlhttp);
			xmlhttp.onreadystatechange = function()
				 {
				    if (this.readyState == 4 && this.status == 200) 
					    {
					        myObj = JSON.parse(this.responseText);
					        txt += "<table border='1'>"
					        for (x in myObj)
						    {
						            txt += "<tr><td>" + myObj[x].name + "</td></tr>";
						    }
				        txt += "</table>"        
				        document.getElementById("tabla").innerHTML = txt;
				   		 }
				};
			xmlhttp.open("POST", "index.php/inicio/moto_inicio", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send("x=" + dbParam);
	</script>

</body>
</html>


<!--
!DOCTYPE html>
<html>
<head>
	
</head>
<body>

	
<div id="head"></div>
<div id="tabla">
	<table cellpadding="0" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Pieza</th>
				<th>buscada</th>
				<th>Le sirve </th>
				<th>Recomendaciones</th>
				<th>Colaborador</th>	
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>corona 18 bobinas</td>
				<td>duke 200 ktm</td>
				<td>gn 125 suzuki</td>
				<td>se le retira la bobina captora, en la duke 2015 confirmado que funciona</td>
				<td>avalo</td>
			</tr>
			<tr>
				<td>corona 18 bobinas</td>
				<td>duke 200 ktm</td>
				<td>gn 125 suzuki</td>
				<td>se le retira la bobina captora, en la duke 2015 confirmado que funciona</td>
				<td>avalo</td>
			</tr>
			<tr>
				<td>corona 18 bobinas</td>
				<td>duke 200 ktm</td>
				<td>gn 125 suzuki</td>
				<td>se le retira la bobina captora, en la duke 2015 confirmado que funciona</td>
				<td>avalo</td>
			</tr>
			<tr>
				<td>corona 18 bobinas</td>
				<td>duke 200 ktm</td>
				<td>gn 125 suzuki</td>
				<td>se le retira la bobina captora, en la duke 2015 confirmado que funciona</td>
				<td>avalo</td>
			</tr>
			<tr>
				<td>corona 18 bobinas</td>
				<td>duke 200 ktm</td>
				<td>gn 125 suzuki</td>
				<td>se le retira la bobina captora, en la duke 2015 confirmado que funciona</td>
				<td>avalo</td>
			</tr>
		</tbody>
	</table>	
</div>
	

</body>
</html>