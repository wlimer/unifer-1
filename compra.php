

<form action="compra.php" method="POST" class="form-control form-control-user">

<label>  producto: </label>
<label>  precio: </label>


<label>  Informacion para el envio: </label>
Direccion:<input type="text" name="direccion">



departamento: <select name="departamento" class="browser-default custom-select mb-4 " id=select1 required>

<option value="" disabled="" selected="">elija una ciudad </option>
<option value="Antioquia" selected=""> Antioquia</option>
<option value="cundinamarca" selected=""> cundinamarca</option>
<option value="valle del cauca" selected=""> valle del cauca</option>

</select> <br>

ciudad: <select  name="ciudad" class="browser-default custom-select mb-4 " id=select1 required>

<option value="" disabled="" selected="">elija una ciudad </option>
<option value="medellin" selected=""> Medellin</option>
<option value="bogota" selected=""> bogota</option>
<option value="cali" selected=""> cali</option>

</select> <br>

metodo de pago: <br>

transferencia: <input type="radio" name="mediopago" value="transferencia">
contra entrega: <input type="radio" name="mediopago" value="entrega">

<br>

<input type="submit"  name="comprar" value="aceptar">

</form>
