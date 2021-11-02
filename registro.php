<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles_registro.css">
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
       
</head>


<div class="h2">  </div> 
<body>


                                   
                                        <div class="registro">  
        
                                           <h1 align="center"><b> FORMULARIO DE REGISTRO</b> </h1> 
                
                                        <form action="servicios/registro.php" method="POST"  onsubmit="return validar();"> 
                    
               

                                                <Input type="text" placeholder="Nombre Completo" id="nombre" name="nomusu" class="form-control form-control-user">
                                                <br>
                                                <Input type="text" placeholder="Apellido Completo" id="apellido" name="apeusu" class="form-control form-control-user">
                                                <br>
                                                <input type="text" placeholder="celular" id="telefono" name="telusu" class="form-control form-control-user">
                                               <br>
                                           
                                                <Input type="text" placeholder="Correo Electronico" id="correo" name="emausu" class="form-control form-control-user">
                                                <br>
                                                <input type="password" placeholder="Contraseña" id="contraseña" name="pasusu" class="form-control form-control-user">
                                                <br>
                                                <input type="password" placeholder="Confirmar contraseña" id="contraseña2" class="form-control form-control-user">
                                                <br>
                                                <INPUT TYPE="submit" NAME="REGISTRARME" VALUE="REGISTRARME" class="btn btn-success btn-user btn-block">


                                        </form>
                                        </div>

                                        
    
</body>
</html>