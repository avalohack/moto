
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
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
 -->



<!DOCTYPE html>
<html>
	<?php include"incluidos/header.php" ?>

<body>
<!-- menu -->
<?php include"incluidos/nav.php" ?> 
<!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-4 text-center  mt-5">Cansado de el negocio de los repuestos!</h1>
          </div>
        </div>
      </div>
    </header>

			<!-- <?php include"incluidos/banner.php" ?> -->

<!-- Page Content -->
<div class="container">
  <!-- row -->
  <div class="row">
        <!-- col -->
        <div class="col-sm-10">
          <!-- inicio datos tabla -->
              <table class="table table-striped table-dark" id='websendeos'>
                <thead>
                    <tr>
                        <th>Parte</th>
                        <th>vehiculo/modelo</th>
                        <th>Le sirve de vehiculo/modelo</th>
                        <!-- <th>Foto</th> -->
                        <th>Recomendacion</th>
                        <!--<th>correo</th>-->
                        <!--<td>Registro</td>-->
                        <th>ranking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //var_dump($motos);
                    foreach ($motos as $key)
                    { ?>
                    <tr>
                        <td> <?php  echo $key["parte"]; ?>    </td>
                        <td> <?php  echo $key["modelo_original"]; ?>   </td>
                        <td> <?php  echo $key["modelo_igual"]; ?>      </td>
                        <!-- <td> <?php   echo $key["img"]; ?>        </td> -->
                        <td> <?php  echo $key["recomendaciones"]; ?>   </td>
                        <!--<td> <?php  echo $key["registro"]; ?>     </td>-->
                        <!--<td> <?php  echo $key["correo"]; ?>       </td>-->
                        <td> <?php  echo $key["ranking"]; ?>   
                            <a href="ranking_up" ><</a>
                            <a href="ranking_down" >></a> 
                        </td>
                    </tr>     
                    <?php
                    }
                    ?>
                </tbody>
              </table>
         <!-- fin datos tabla -->
        </div>
        <!-- /.col -->
        <!-- col -->
          <div class="col-sm-2">
              
              <!-- <a href="#agregar_iten">+</a> -->

                
              <section id="agregar_iten">
                <form action="#" method="POST">
                  <input type="text" name="parte" placeholder="parte">
                  <input type="text" name="vehiculo/modelo" placeholder="vehiculo/modelo">
                  <input type="text" name="Le sirve de vehiculo/modelo" placeholder="Le sirve de vehiculo/modelo">
                  <input type="text" name="Recomendacion" placeholder="Recomendacion">
                  <!-- <button>Guardar</button> -->
                </form>
                <a class="btn btn-primary btn-lg" href="#">Añadir &raquo;</a>
              </section>
              <!-- <h2 class="mt-4">Contact Us</h2>
              <address>
                <strong>Start Bootstrap</strong>
                <br>3481 Melrose Place
                <br>Beverly Hills, CA 90210
                <br>
              </address>
              <address>
                <abbr title="Phone">P:</abbr>
                (123) 456-7890
                <br>
                <abbr title="Email">E:</abbr>
                <a href="mailto:#">name@example.com</a>
              </address> -->
           </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    
</div>
<!-- /.container -->
<!-- pie de la pagina -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Intentando ayudar 2018</p>
  </div>
  <!-- /.container -->
</footer>

<?php include"incluidos/js.php" ?>

<script src="vendor/js/stacktable.js"></script>
<script>     $('#websendeos').stacktable(); </script>

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







<!--   <body> -->

    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <!-- Header with Background Image -->
   <!--  <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3 text-center text-white mt-4">Business Name or Tagline</h1>
          </div>
        </div>
      </div>
    </header> -->

    <!-- Page Content -->
    <!-- <div class="container">

      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">What We Do</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
          </p>
        </div>
        <div class="col-sm-4">
          <h2 class="mt-4">Contact Us</h2>
          <address>
            <strong>Start Bootstrap</strong>
            <br>3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </address>
          <address>
            <abbr title="Phone">P:</abbr>
            (123) 456-7890
            <br>
            <abbr title="Email">E:</abbr>
            <a href="mailto:#">name@example.com</a>
          </address>
        </div>
      </div> -->
      <!-- /.row -->

     <!--  <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div> -->
      <!-- /.row -->

    <!-- </div> -->
    <!-- /.container -->

    <!-- Footer -->
  <!--   <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div> -->
      <!-- /.container -->
<!--     </footer> -->

    <!-- Bootstrap core JavaScript -->
   <!--  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body> -->

  <!-- https://startbootstrap.com/template-overviews/business-frontpage/ -->