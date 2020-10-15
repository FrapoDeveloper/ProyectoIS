<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
     initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="icon" type="image/png" href="resource/favicon.png">
    <!--CDN para usar iconos de fontawesome-->
     <script src="https://kit.fontawesome.com/e3cac9ba50.js" crossorigin="anonymous"></script>
    <!--Enlazar con el archivo flexboxgrid-->
    <!--CDN para utilizar bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  

    <link rel="icon" href="resource/profile.png">
    <link rel="stylesheet" href="resource/style.css">
	<title>Login Marknet</title>
</head>
<body>
	<?php include('controller/session_login.php')?>
	<img  src="resource/image.png" style="position:absolute;">
	<div  class="container">
		<div class="img">
			<img src="resource/MarknetLogo.png">
		</div>
		<div  class="login-content">
			<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
				<img src="resource/profile.png">
				<h2 class="title" style="color: #FFFFFF;">Tulape</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div" >
							<input type="text" style="color: #000000;" placeholder="Usuario" class="input" name="f_user" 
							  value="<?php if(isset($_POST['f_send']) 
							  && !empty($_POST['f_user'])){echo $_POST['f_user'];} ?>">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	  <input type="password"  style="color: #000000;"  placeholder="Contraseña" class="input" name="f_password"
						   value="<?php if(isset($_POST['f_send'])
						   && !empty($_POST['f_password'])){echo $_POST['f_password'];} ?>">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login" name="f_send">
				<?php if(!empty($errores)): ?>
				<div class="alert alert-danger" role="alert">
                <?php echo $errores; ?>
           		</div>
			 <?php endif; ?>
			</form>
			
		</div>
		
    </div>
    <script type="text/javascript" src="resource/main.js"></script>
	
</body>
<style>
body{

}

</style>

</html>