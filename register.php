﻿<!DOCTYPE html>
<html>
<?php
	include ("head.php");	
  ?>
  
	<body class="body2" >
	

  
	<div class="hero-unit">
	<div class="row">
    <div class="span8">
	<table class="table table-bordered table-striped">
        <colgroup>
          <col class="span1">
          <col class="span7">
        </colgroup>
        <thead>
          <tr>
            <th></th>
            <th>Ventajas de registrarte</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <code>Noticias</code>
            </td>
            <td>
              Noticias del desarrollo de nuestro proyecto
            </td>
          </tr>
          <tr>
            <td>
              <code>Perfil</code>
            </td>
            <td>
            Tendras tu propio perfil con tus partituras y la de las personas que sigues
            </td>
          </tr>
          <tr>
            <td>
              <code>Almacenamiento </code>
            </td>
            <td>
            Podras almacenar tus partituras en tu perfil
            </td>
          </tr>
          <tr>
            <td>
              <code>Registrte con</code>
            </td>
            <td><div  style="text-align: center; padding:5px;">
            <a class="btn" href="" style="background-color:red; color:white;">Google+</a>
			<a class="btn" href="" style="background-color:blue; color:white;">Facebook</a>
			<a class="btn" href="" style="background-color:lightblue; color:white;">Twitter</a>
			</div>
            </td>
          </tr>
      
      
         
        </tbody>
      </table>
     
    </div>
    <div class="span4">
		
			  <div class="control-group" style="text-align:right;">
            <label class="control-label" for="appendedInputButton" >Add Nickname</label>
            <div class="controls">
              <div class="input-append">
			  <button class="btn" type="button" style="background-color:blue; color:white;">Check name</button>
                <input id ="name" class="span2" id="appendedInputButton" size="16" type="text">
              </div>
            </div>
          </div>
		  
		  <div class="control-group" style="text-align:right;">
            <label class="control-label" style = "display:inline;">Email</label>
              <input id ="email" class="input-medium" type="text" placeholder="@gmail  @hotmail ...."><br/>
			  <label class="control-label" style = "display:inline;">Password</label>
              <input id ="password" class="input-medium" type="text" placeholder="number && letters ....">
         
          </div>
		  
		
		<div style=" text-align:center;">  
	<button id = "registro" class="btn btn-success"  style="width:100;">registrarme</button>

	<div id ="result"></div>
	</div>
    </div>
  </div>
   </div>
  
		
		
		

		  
		
  
 

	</body>
	
	<?php
	include ("footer.php");
  ?>
</html>