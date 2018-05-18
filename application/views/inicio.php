
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-container">

 
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Modal Header</h2>
      </header>
      <div class="w3-container">
        <p>Some text..</p>
        <p>Some text..</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
</div>











<!DOCTYPE html>
<html>
<head>
	<title>Partes</title>
	<link rel="stylesheet" type="text/css" href="vendor/css/css.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/stacktable.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/style.css">
</head>
<body>


<?php include"incluidos/header.php" ?>

<?php include"incluidos/banner.php" ?>


<section id='body'>
	<table id='websendeos'>
		<thead>
			<tr>
				<th>Pieza</th>
				<th>Moto / Modelo</th>
				<th>Le sirve de Moto</th>
				<th>Foto</th>
				<th>Recomendacion</th>
				<!--<th>correo</th>-->
				<!--<td>Registro</td>-->
				<th>ranking</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			//	var_dump($motos);
				foreach ($motos as $key)
					{ ?>
						<tr>
							<td> <?php 	echo $key["parte_original"]; ?>    </td>
							<td> <?php 	echo $key["modelo_original"]; ?>   </td>
							<td> <?php 	echo $key["modelo_igual"]; ?>      </td>
							<td> <?php 	echo $key["img"]; ?>   			</td>
							<td> <?php 	echo $key["recomendaciones"]; ?>   </td>
							<!--<td> <?php 	echo $key["registro"]; ?>  		</td>-->
							<!--<td> <?php 	echo $key["correo"]; ?>   		</td>-->
							<td> <?php 	echo $key["ranking"]; ?>   
								<div   id="ranking_up"><a href="" ><</a></div>
								<dir id="ranking_down"><a href="" >></a></dir>	</td>
						</tr>			
			<?php
					}
			?>
		</tbody>
	</table>
</section>
<section id='botones'>
	<a href="#agregar_iten">+</a>
</section>
	
<section id="agregar_iten">
	<form action="#" method="POST">
		<input type="text" name="Pieza" placeholder="Pieza">
		<input type="text" name="Moto / Modelo" placeholder="Moto / Modelo">
		<input type="text" name="Le sirve de Moto" placeholder="Le sirve de Moto">
		<input type="text" name="Foto" placeholder="Foto">
		<input type="text" name="Recomendacion" placeholder="Recomendacion">
		<button>Guardar</button>
	</form>
</section>



<script src="vendor/js/jquery-1.7.min.js"></script>
<script src="vendor/js/stacktable.js"></script>
<script>
     $('#websendeos').stacktable();
</script>

</body>
</html>






<script>/*
			var obj, dbParam, xmlhttp, myObj, x, txt = "";
			obj = {"parte_original":"","modelo_original":"","modelo_igual":"","img":"","recomendaciones":"","correo":"","ranking":""};
			dbParam = JSON.stringify(obj);
			xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function()
				 {
				    if (this.readyState == 4 && this.status == 200) 
					    {
					        myObj = JSON.parse(this.responseText);
					        txt += "<table id='websendeos'>"
					        	   +"<tr>"
							        	   +"<th>Parte</th>"
							        	   +"<th>Moto</th>"
							        	   +"<th>Sirve de</th>"
							        	   +"<th>Foto</th>"
							        	   +"<th>Recomendacion</th>"
							        	   +"<th>correo</th>"
							        	   +"<th>ranking</th>"
					        	   +"</tr>"
					        for (x in myObj)
						    {
						            txt +=   "<tr>"
						            		+"<td>"+ myObj[x].parte_original+"</td>"
						            		+"<td>"+ myObj[x].modelo_original+"</td>"
						            		+"<td>"+ myObj[x].modelo_igual+"</td>"
						            		+"<td>"+ myObj[x].modelo_igual+"</td>"
						            		+"<td>"+ myObj[x].modelo_igual+"</td>"
						            		+"<td>"+ myObj[x].modelo_igual+"</td>"
						            		+"<td>"+ myObj[x].modelo_igual+"</td>"
						            		+"</tr>";
						    }
				        txt += "</table>"        
				        document.getElementById("tabla").innerHTML = txt;
				   		 }
				};
			xmlhttp.open("POST", "index.php/inicio/moto_inicio", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send("x=" + dbParam);*/
	</script>