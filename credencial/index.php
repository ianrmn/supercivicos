<html>
<head>
<title>SUPERCIVICOS</title>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>

<link href='css/style.css' rel='stylesheet' type='text/css'>

</head>
<body>
	
<div id="contentSuper">
	<div class="left">
		<h1><div class="logo"></div></h1>
		<h2>¡Porque los buenos siempre somos m&aacute;s!"</h2>
		<br /><br />
		<p>El objetivo del Ej&eacute;rcito Superc&iacute;vico es crear una red de personas conscientes del entorno en el que viven, que est&aacute;n hartos de la corrupci&oacute;n y que adem&aacute;s quieren vivir en una mejor ciudad.</p>
		<br />
		<p><b>Requisitos:</b><br/>
			1. Agrega tu nombre y apellido.<br/>
			2. Selecciona tu rango.<br/>
			3. Agrega el URL donde se encuentre tu fotograf&iacute;a.<br/>
			4. Una vez con los datos agregados, presiona "Crear" y se mostrar&aacute; tu credencial.<br />
			5. Listo, podr&aacute;s imprimir tu credencial.
		</p>
		<br />
		<p><b>Recomendaciones:</b><br/>
			1. Tu imagen deber&aacute; medir en pixeles 360px de alto por 300px de ancho.<br/>
			2. Ser en formato JPG.<br/>
			3. Preferentemente en fondo blanco.<br/>
		</p>
	</div>
	<div class="right">
		<form method="post" action="cardImage.php" enctype="multipart/form-data"> 
		<table id="tble_form">
		  <tr>
		    <td>Nombre</td>
		    <td>:</td>
		    <td><input class="inpt" id="name" name="name" type="text" value="<?php echo $name ?>" required placeholder="Ej. Comandante Hern&aacute;ndez" size="30" />
		  </tr>
		  <tr>
		    <td>Rango</td>
		    <td>:</td>
		    <td>
		        <select id="title" name="title" >
		          <option value="Cabo">Cabo</option>
		          <option value="Cabo Segundo">Cabo Segundo</option>
		          <option value="Soldado">Soldado</option>
		          <option value="Soldado Segundo">Soldado Segundo</option>
		          <option value="Sargento">Sargento</option>
		          <option value="Capit&aacute;n de Brigada">Capit&aacute;n de Brigada</option>
		          <option value="Teniente Coronel">Teniente Coronel</option>
		          <option value="General de Divisi&oacute;n">General de Divisi&oacute;n</option>
		        </select>
		    </td>
		  </tr>
		  <tr>
		    <td>Foto</td>
		    <td>:</td>
		    <td>
			    <label class="myLabel">
			    	<input id="upimg" name="upimg" type="file" value="upimg" />
			    	<span>Subir foto</span>
			    </label>
			 <td><!-- <input style="width: 250px;" type="text" name="foto" required placeholder="Ej. www.dominio.com/mi-imagen.jpg" /> --></td>
		  </tr>
		  <tr>
		</table>
		  <div style="clear: both; width: 350px; padding-top: 14px; text-align: right;" class="stn">
		    <div><input class="btnSend" type="submit" value="Crear" /></div>
		  </div>
		</form>		
	</div>
</div>

</body>
</html>