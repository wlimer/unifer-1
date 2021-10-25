<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/styles_login.css">
    <link href="bstra/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head> 
<div class="h2">  </div>      
<body >


   <div class="login">
   
	<h1>Login</h1>
    <form  action="servicios/login.php" method="POST"  name="form1" onsubmit="return vlidar1()">
    	<input type="text" placeholder="correo eletronico" id="correo1" name="emausu" required="required" />
        <input type="password"  placeholder="contraseña"  id="contraseña3" name="pasusu" required="required" />
        <button type="submit" id="Ingresar" class="btn btn-primary btn-block btn-large">Ingresar</button>
    </form>
   
 </div>
       

    
       
   
    <script src="js/script.js"></script>
</body>

</html>