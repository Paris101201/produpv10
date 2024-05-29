<?php
$host 	= 'localhost';
$nom 	= 'root';
$pass 	= '';
$db 	= 'logincrud2';

$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>
require_once ('index.php');
<?php
session_start();
include('conexion.php');
if(isset($_SESSION['usuarioingresando']))
{
header('location: productos_tabla.php');
}
?>

<html>
<!--Busca por VaidrollTeam para más proyectos. -->
<head>
<title>VaidrollTeam</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="FormCajaLogin">

<div class="FormLogin">

<div class="botondeintercambiar">
<div id="btnvai"></div>
<button type="button" class="botoncambiarcaja" onclick="loginvai()" id="vaibtnlogin">Login</button>
<button type="button" class="botoncambiarcaja" onclick="registrarvai()" id="vaibtnregistrar">Registrar</button>
</div>

<!-- formulario login -->
<form method="POST" id="frmlogin" class="grupo-entradas" action="usuario_login.php">
<h1>Iniciar sesión</h1>

<div class="TextoCajas">• Ingresar correo</div>
<input type="email" name="txtcorreo" class="CajaTexto" autocomplete="off" required>

<div class="TextoCajas">• Ingresar password</div>
<input type="password"  name="txtpassword" class="CajaTexto" autocomplete="off" required>

<div>
<input type="submit" value="Iniciar sesión" class="BtnLogin" name="btningresar" >
</div>

</form>

<!-- formulario registrar -->
<form method="post" id="frmregistrar" class="grupo-entradas" action="usuario_registrar.php">
<h1>Crear nueva cuenta</h1>

<div class="TextoCajas">• Ingresar nombre</div>
<input type="text" name="txtnombre1" class="CajaTexto" autocomplete="off" required>

<div class="TextoCajas">• Ingresar correo</div>
<input type="email" name="txtcorreo1" class="CajaTexto" autocomplete="off" required>

<div class="TextoCajas">• Ingresar password</div>
<input type="password"  name="txtpassword1" class="CajaTexto" autocomplete="off" required>
 
<div>
<input type="submit" value="Crea nueva cuenta" class="BtnRegistrar" name="btnregistrar">
</div>

</form>
</div>
</div>
 
</body>
<script src="boton_formulario.js"></script>
</html>
usuario_login.php
<?php
session_start();
include('conexion.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];

$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$correo."' and pass = '".$pass."'");
$nr = mysqli_num_rows($buscandousu);

if($nr == 1)
{
$_SESSION['usuarioingresando']=$correo;
header("Location: productos_tabla.php");
}
else if ($nr == 0) 
{
echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}
?>
usuario_registrar.php
<?php
include('conexion.php');

$nombre = $_POST["txtnombre1"];
$correo = $_POST["txtcorreo1"];
$pass 	= $_POST["txtpassword1"];


$insertarusu = mysqli_query($conn,"INSERT INTO usuarios(nom,correo,pass) values ('$nombre','$correo','$pass')");
	
if(!$insertarusu)
{
echo "<script>alert('Correo duplicado, intenta con otro correo');window.location='index.php';</script>";	 
}
else
{
echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.php' </script>";
}

?>
requir  barra_lateral.php
<?php
session_start();
include('conexion.php');
if(isset($_SESSION['usuarioingresando']))
{
$usuarioingresado = $_SESSION['usuarioingresando'];
$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$usuarioingresado."'");
$mostrar=mysqli_fetch_array($buscandousu);
	
}else
{
	header('location: index.php');
}

?>

<html>
<head>
<title>VaidrollTeam</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="BarraLateral">

<ul>
<li><a href="productos_tabla.php" >• Productos</a></li>
<li><a href="categoria_tabla.php" >• Categoría</a></li>
<li><a href="cerrar_sesion.php" >• Cerrar sesión</a></li>
</ul>
<hr>
</div>
</body>
</html>
productos_tabla.php
<?php
include('conexion.php');
include("barra_lateral.php");
?>
<html>
<title>VaidrollTeam</title>
<body>
<div class="ContenedorPrincipal">	
<?php
 
$filasmax = 7;
 
if (isset($_GET['pag'])) 
	{
        $pagina = $_GET['pag'];
    } else 
	{
        $pagina = 1;
    }
 
 if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];

$sqlusu = mysqli_query($conn, "SELECT pro.id,pro.nombre,descripcion,precio,cat.nombre as categoria 
FROM productos pro, categoria_productos cat where pro.categoria_id=cat.id and descripcion like '".$buscar."%'");

}
else
{
$sqlusu = mysqli_query($conn, "SELECT pro.id,pro.nombre,descripcion,precio,cat.nombre as categoria 
FROM productos pro, categoria_productos cat where pro.categoria_id=cat.id ORDER BY pro.id ASC LIMIT " . (($pagina - 1) * $filasmax)  . "," . $filasmax);
}
 
    $resultadoMaximo = mysqli_query($conn, "SELECT count(*) as num_productos FROM productos");
 
    $maxusutabla = mysqli_fetch_assoc($resultadoMaximo)['num_productos'];
	
    ?>
	<div class="ContenedorTabla">
	<form method="POST">
	<h1>Lista de productos</h1>

	<div class="ContBuscar">
	<div style="float: left;">
	<a href="productos_tabla.php" class="BotonesTeam">Inicio</a>
	<input class="BotonesTeam" type="submit" value="Buscar" name="btnbuscar">
	<input class="CajaTextoBuscar" type="text" name="txtbuscar"  placeholder="Ingresar descripción del producto" autocomplete="off" >
	</div>
	<div style="float:right;">
	<?php echo "<a class='BotonesTeam5' href=\"productos_registrar.php?pag=$pagina\">Agregar producto</a>";?>
	</div>
	</div>
			</form>
    <table>
			<tr>
			<th>Id</th>
			<th>Nombre</th>
            <th>Descripción</th>
			<th>Precio</th>
			<th>Categoria</th>
			<th>Acción</th>
			</tr>
 
        <?php
 
        while ($mostrar = mysqli_fetch_assoc($sqlusu)) 
		{
			
            echo "<tr>";
            echo "<td>".$mostrar['id']."</td>";
			echo "<td>".$mostrar['nombre']."</td>";
			echo "<td>".$mostrar['descripcion']."</td>";
			echo "<td>".$mostrar['precio']."</td>";
			echo "<td>".$mostrar['categoria']."</td>";
            echo "<td style='width:24%'>
			<a class='BotonesTeam1' href=\"productos_ver.php?id=$mostrar[id]&pag=$pagina\">&#x1F50D;</a> 
			<a class='BotonesTeam2' href=\"productos_modificar.php?id=$mostrar[id]&pag=$pagina\">&#128397;</a> 
			<a class='BotonesTeam3' href=\"productos_eliminar.php?id=$mostrar[id]&pag=$pagina\" onClick=\"return confirm('¿Estás seguro de eliminar el producto $mostrar[nombre]?')\">&#10006;</a>
			</td>";  
			
        }
 
        ?>
    </table>
	<div style='text-align:right'>
	<br>
	<?php echo "Total de productos: ".$maxusutabla;?>
	</div>
	</div>
<div style='text-align:right'>
<br>
</div>
<div style="text-align:center">
<?php
if (isset($_GET['pag'])) {
if ($_GET['pag'] > 1) {
 ?>
<a class="BotonesTeam4" href="productos_tabla.php?pag=<?php echo $_GET['pag'] - 1; ?>">Anterior</a>
<?php
} 
else 
{
?>
<a class="BotonesTeam4" href="#" style="pointer-events: none">Anterior</a>
<?php
}
?>
 
 <?php
} 
else 
{
?>
<a class="BotonesTeam4" href="#" style="pointer-events: none">Anterior</a>
<?php
}
 
if (isset($_GET['pag'])) {
if ((($pagina) * $filasmax) < $maxusutabla) {
?>
<a class="BotonesTeam4" href="productos_tabla.php?pag=<?php echo $_GET['pag'] + 1; ?>">Siguiente</a>
<?php
} else {
?>
<a class="BotonesTeam4" href="#" style="pointer-events: none">Siguiente</a>
<?php
}
?>
<?php
} else {
?>
<a class="BotonesTeam4" href="productos_tabla.php?pag=2">Siguiente</a>
<?php
}
?>
</div>
</div>
</body>
</html>
productos_ver.php
<?php 
include("conexion.php");
include("productos_tabla.php");
$pagina = $_GET['pag'];
$id = $_GET['id'];

$querybuscar = mysqli_query($conn, "SELECT pro.id,pro.nombre,descripcion,precio,cat.nombre as categoria 
FROM productos pro, categoria_productos cat where pro.categoria_id=cat.id and pro.id = '$id'");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
	$proid 	= $mostrar['id'];
	$pronom	= $mostrar['nombre'];
	$prodes	= $mostrar['descripcion'];
	$propre	= $mostrar['precio'];
	$procat	= $mostrar['categoria'];
}
?>
<html>
<body>
<div class="caja_popup2">
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2">Ver producto</th></tr>
<tr> 
<td><b>Id:</b></td>
<td><?php echo $proid;?></td>
</tr>		
<tr> 
<td><b>Nombre: </b></td>
<td><?php echo $pronom;?></td>
</tr>
<tr> 
<td><b>Descripción: </b></td>
<td><?php echo $prodes;?></td>
</tr>
<tr> 
<td><b>Precio: </b></td>
<td><?php echo $propre;?></td>
</tr>
<tr> 
<td><b>Categoría: </b></td>
<td><?php echo $procat;?></td>
</tr>

<tr>
				
<td colspan="2">
<?php echo "<a class='BotonesTeam' href=\"productos_tabla.php?pag=$pagina\">Regresar</a>";?>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
productos_registrar.php
<?php 
include("conexion.php");
include("productos_tabla.php");
$pagina = $_GET['pag'];
?>
<html>
<body>
<div class="caja_popup2">
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2">Agregar producto</th></tr>	
<tr> 
<td><b>Nombre: </b></td>
<td><input type="text" name="txtnom" autocomplete="off" class="CajaTexto"></td>
</tr>
<tr> 
<td><b>Descripción: </b></td>
<td><input type="text" name="txtdes" autocomplete="off" class="CajaTexto"></td>
</tr>
<tr> 
<td><b>Precio: </b></td>
<td><input type="number" name="txtpre" autocomplete="off" class="CajaTexto" step="any"></td>
</tr>
<tr> 
<td><b>Categoría: </b></td>
<td>
<select name="txtcat" class='CajaTexto'>
<?php
		
$qrcategoria = mysqli_query($conn, "SELECT * FROM categoria_productos ");
while($mostrarcat = mysqli_fetch_array($qrcategoria)) 
{ 
echo '<option value="'.$mostrarcat['id'].'">' .$mostrarcat['nombre']. '</option>';
}
?>  
</select>
</td>
</tr>

<tr>
				
<td colspan="2" >
<?php echo "<a class='BotonesTeam' href=\"productos_tabla.php?pag=$pagina\">Cancelar</a>";?>&nbsp;
<input class='BotonesTeam' type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar este producto');">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php
	
if(isset($_POST['btnregistrar']))
{   
	$pronom 	= $_POST['txtnom'];
        $prodes 	= $_POST['txtdes'];
	$propre 	= $_POST['txtpre'];
	$procat 	= $_POST['txtcat'];
   
	mysqli_query($conn, "INSERT INTO productos(nombre,descripcion,precio,categoria_id) VALUES('$pronom','$prodes','$propre','$procat')");
	
	echo "<script> alert('Producto registrado con exito: $pronom'); window.location='productos_tabla.php' </script>";
}
?>
productos_modificar.php
<?php 
include("conexion.php");
include("productos_tabla.php");

$pagina = $_GET['pag'];
$id = $_GET['id'];

$querybuscar = mysqli_query($conn, "SELECT * FROM productos WHERE id = '$id'");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{	
	$proid 		= $mostrar['id'];
	$pronom 	= $mostrar['nombre'];
	$prodes 	= $mostrar['descripcion'];
	$propre 	= $mostrar['precio'];
	$procat 	= $mostrar['categoria_id'];
}
?>
<html>
<body>
<div class="caja_popup2">
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2">Modificar producto</th></tr>	
<tr> 
<td><b>Id: </b></td>
<td><input class="CajaTexto" type="number" name="txtid" value="<?php echo $proid;?>" readonly></td>
</tr>
<tr> 
<td><b>Nombre: </b></td>
<td><input class="CajaTexto" type="text" name="txtnom" value="<?php echo $pronom;?>" required></td>
</tr>
<tr> 
<td><b>Descripción: </b></td>
<td><input class="CajaTexto" type="text" name="txtdes" value="<?php echo $prodes;?>" required></td>
</tr>
<tr> 
<td><b>Precio: </b></td>
<td><input class="CajaTexto" type="number" step="any" name="txtpre" value="<?php echo $propre;?>" required ></td>
</tr>
<tr> 
<td><b>Categoría: </b></td>
<td>
<select name="txtcat" class='CajaTexto'>

<?php	
$qrproductos = mysqli_query($conn, "SELECT * FROM categoria_productos ");
while($mostrarcat = mysqli_fetch_array($qrproductos)) 
{ 
if($mostrarcat['id']==$procat)
{
echo '<option selected="selected" value="'.$mostrarcat['id'].'">' .$mostrarcat['nombre']. '</option>';
}
else
{
echo '<option value="'.$mostrarcat['id'].'">' .$mostrarcat['nombre']. '</option>';
}
}		
?> 

</select>
</td>
</tr>
<tr>
<td colspan="2" >
<?php echo "<a class='BotonesTeam' href=\"productos_tabla.php?pag=$pagina\">Cancelar</a>";?>&nbsp;
<input class='BotonesTeam' type="submit" name="btnregistrar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar este producto');">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>

<?php
	
if(isset($_POST['btnregistrar']))
{    
	$proid1 	= $_POST['txtid'];
	$pronom1 	= $_POST['txtnom'];
	$prodes1	= $_POST['txtdes'];
	$propre1 	= $_POST['txtpre'];
	$procat1 	= $_POST['txtcat'];
      
$querymodificar = mysqli_query($conn, "UPDATE productos SET nombre='$pronom1',descripcion='$prodes1',precio='$propre1',categoria_id='$procat1' WHERE id = '$proid1'");
echo "<script>window.location= 'productos_tabla.php?pag=$pagina' </script>";
    
}
?>
productos_eliminar.php
<?php
include("conexion.php");
include("barra_lateral.php");
$usuarioingresado = $_SESSION['usuarioingresando'];
$pagina = $_GET['pag'];
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM productos WHERE id='$id'");
header("Location:productos_tabla.php?pag=$pagina");

?>
categoria_tabla.php
<?php
include('conexion.php');
include("barra_lateral.php");
?>
<html>
<title>VaidrollTeam</title>
<body>
<div class="ContenedorPrincipal">	
<?php
 
$filasmax = 7;
 
    if (isset($_GET['pag'])) 
	{
        $pagina = $_GET['pag'];
    } else 
	{
        $pagina = 1;
    }
 
 if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];

 $sqlcat = mysqli_query($conn, "SELECT * FROM categoria_productos where nombre = '".$buscar."'");

}
else
{
 $sqlcat = mysqli_query($conn, "SELECT * FROM categoria_productos ORDER BY id ASC LIMIT " . (($pagina - 1) * $filasmax)  . "," . $filasmax);
}
 
    $resultadoMaximo = mysqli_query($conn, "SELECT count(*) as num_categorias FROM categoria_productos");
 
    $maxusutabla = mysqli_fetch_assoc($resultadoMaximo)['num_categorias'];
	
    ?>
	<div class="ContenedorTabla" >
	<form method="POST">
	<h1>Lista de categorías de productos</h1>
	<div class="ContBuscar">
	<div style="float: left;">
	<a href="categoria_tabla.php" class="BotonesTeam">Inicio</a>
	<input class="BotonesTeam" type="submit" value="Buscar" name="btnbuscar">
	<input class="CajaTextoBuscar" type="text" name="txtbuscar"  placeholder="Ingresar categoría" autocomplete="off" >
	</div>
	<div style="float:right">
	<?php echo "<a class='BotonesTeam5' href=\"categoria_registrar.php?pag=$pagina\">Agregar categoría</a>";?>
	</div>
	</div>
</form>
    <table>
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Acción</th>
</tr>
 
<?php
 
while ($mostrar = mysqli_fetch_assoc($sqlcat)) 
		{
			
echo "<tr>";
echo "<td>".$mostrar['id']."</td>";
echo "<td>".$mostrar['nombre']."</td>"; 
echo "<td style='width:24%'>
<a class='BotonesTeam1' href=\"categoria_ver.php?categoria=$mostrar[id]&pag=$pagina\">&#x1F50D;</a> 
<a class='BotonesTeam2' href=\"categoria_modificar.php?categoria=$mostrar[id]&pag=$pagina\">&#128397;</a> 
<a class='BotonesTeam3' href=\"categoria_eliminar.php?categoria=$mostrar[id]&pag=$pagina\" onClick=\"return confirm('¿Estás seguro de eliminar la categoría $mostrar[nombre]?')\">&#10006;</a>
</td>";  
}

?>
</table>
<div style='text-align:right'>
<br>
<?php echo "Total de categorías: ".$maxusutabla;?>
</div>
</div>
<div style='text-align:right'>
<br>
</div>
<div style="text-align:center">
<?php
if (isset($_GET['pag'])) {
if ($_GET['pag'] > 1) {
 ?>
<a class="BotonesTeam4" href="categoria_tabla.php?pag=<?php echo $_GET['pag'] - 1; ?>">Anterior</a>
<?php
} 
else 
{
?>
<a class="BotonesTeam4" href="#" style="pointer-events: none">Anterior</a>
<?php
}
?>
 
 <?php
} 
else 
{
?>
<a class="BotonesTeam4" href="#" style="pointer-events: none">Anterior</a>
<?php
}
 
if (isset($_GET['pag'])) {
if ((($pagina) * $filasmax) < $maxusutabla) {
?>
<a class="BotonesTeam4" href="categoria_tabla.php?pag=<?php echo $_GET['pag'] + 1; ?>">Siguiente</a>
<?php
} else {
?>
<a class="BotonesTeam4" href="#" style="pointer-events: none">Siguiente</a>
<?php
}
?>
<?php
} else {
?>
<a class="BotonesTeam4" href="categoria_tabla.php?pag=2">Siguiente</a>
<?php
}
?>
</div>
</div>
</body>
</html>
categoria_ver.php
<?php 
include("conexion.php");
include("categoria_tabla.php");
$pagina = $_GET['pag'];
$id 	= $_GET['categoria'];

$querybuscar = mysqli_query($conn, "SELECT * FROM categoria_productos WHERE id = '$id'");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
	$catid	= $mostrar['id'];
	$catnom = $mostrar['nombre'];
}
?>
<html>
<body>
<div class="caja_popup2">
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2">Ver categoría</th></tr>
<tr> 
<td><b>Id:</b></td>
<td><?php echo $catid;?></td>
</tr>
			
<tr> 
<td><b>Nombre: </b></td>
<td><?php echo $catnom;?></td>
</tr>
<tr>
				
<td colspan="2">
<?php echo "<a class='BotonesTeam' href=\"categoria_tabla.php?pag=$pagina\">Regresar</a>";?>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
categoria_registrar.php
<?php 
include('conexion.php');
include("categoria_tabla.php");

$pagina = $_GET['pag'];
?>
<html>
<head>    
<title>VaidrollTeam</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2"> 
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2" >Agregar categoría</th></tr>
<tr> 
<td>Nombre</td>
<td><input type="text" name="txtnom" autocomplete="off" class="CajaTexto"></td>
</tr>
<tr> 	
<td colspan="2" >
<?php echo "<a class='BotonesTeam' href=\"categoria_tabla.php?pag=$pagina\">Cancelar</a>";?>&nbsp;
<input class='BotonesTeam' type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar esta categoría?');">
</td>
</tr>
</table>
</form>
 </div>
</body>
</html>
<?php

if(isset($_POST['btnregistrar']))
{   
	$vainom 	= $_POST['txtnom'];

	$queryadd	= mysqli_query($conn, "INSERT INTO categoria_productos(nombre) VALUES('$vainom')");
	
 	if(!$queryadd)
	{
		 echo "<script>alert('Id duplicado, intenta otra vez');</script>";
		 
	}else
	{
		echo "<script>window.location= 'categoria_tabla.php?pag=1' </script>";
	}
}
?>
categoria_modificar.php
<?php 
include('conexion.php');
include("categoria_tabla.php");

$pagina = $_GET['pag'];
$id = $_GET['categoria'];

$querybuscar = mysqli_query($conn, "SELECT * FROM categoria_productos WHERE id = '$id'");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
$catid	= $mostrar['id'];
$catnom = $mostrar['nombre'];
}
?>
<html>
<body>
<div class="caja_popup2">
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2">Modificar categoría</th></tr>
<tr> 
<td>Id</td>
<td><input class="CajaTexto" type="text" name="txtid" value="<?php echo $catid;?>" readonly></td>
</tr>
<tr> 
<td>Nombre</td>
<td><input class="CajaTexto" type="text" name="txtnombre" value="<?php echo $catnom;?>" required></td>

<tr>
				
<td colspan="2">
<?php echo "<a class='BotonesTeam' href=\"categoria_tabla.php?pag=$pagina\">Cancelar</a>";?>&nbsp;
<input class="BotonesTeam" type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar esta categoría?');">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>

<?php
	
if(isset($_POST['btnmodificar']))
{    
$id 		= $_POST['txtid'];
$nombre 	= $_POST['txtnombre'];
      
$querymodificar = mysqli_query($conn, "UPDATE categoria_productos SET nombre='$nombre' WHERE id = '$id'");
echo "<script>window.location= 'categoria_tabla.php?pag=$pagina' </script>";
    
}
?>
categoria_eliminar.php
<?php
include('conexion.php');
include("barra_lateral.php");
$usuarioingresado = $_SESSION['usuarioingresando'];
$pagina = $_GET['pag'];
$id = $_GET['categoria'];

mysqli_query($conn, "DELETE FROM categoria_productos WHERE id='$id'");
header("Location:categoria_tabla.php?pag=$pagina");

?>
cerrar_sesion.php
<?php
session_start();
session_destroy();
header("Location: index.php");
exit;
?>
style.css
/*Busca por VaidrollTeam para más proyectos.*/
body 
{ 
background: #f2f2f2;
font-family: Arial, sans-serif;
margin:0;
padding:0;
display: flex;
flex-direction: column;	
}
h1
{
color:black;
}
	/*Login*/
.FormCajaLogin
{
width: 100%;
height: 100%;
display: grid;
background: url(fondo.jpg) no-repeat center center fixed; 

}
.grupo-entradas{
position: absolute;
display: grid;
width: 100%;
transition: .5s;

}
.FormLogin
{
background-color: #f2f2f2;
margin: 3em auto auto auto;
border-radius: 6px;
color:#000;
border:0.1em solid black;
width: 400px;
height: 600px;
position: relative;
padding: 2px;
overflow: hidden;  

}

.TextoCajas
{

font-weight: bold;
margin-top:4%;
margin-bottom:4%;
color:#000;
text-align:left;
}

.CajaTexto{
width: 80%;
padding: 10px;
font-size:1em;
border-radius:5px;
border:1px solid black;
color:black;
}

.BtnRegistrar
{
width: 80%;
text-decoration:none;
padding: 10px 30px;
cursor: pointer;
border: 0;
border-radius: 10px;
border:1px solid black;
font-size:18px;
color:white;
background-color: green;
font-weight: bold;
margin-bottom:5%;
margin-top:7%;
}

.BtnLogin
{
width: 80%;
text-decoration:none;
padding: 10px 30px;
cursor: pointer;
border: 0;
border-radius: 10px;
border:1px solid black;
font-size:18px;
color:white;
background-color: #1B68DF;
font-weight: bold;
margin-top:7%;
margin-bottom:5%;
}

.botondeintercambiar{
width: 240px;
margin: 35px auto;
position: relative;
box-shadow: 0 0 6px 0.5px black;
border-radius: 30px;
}
.botoncambiarcaja{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
	font-weight: bold;
	font-size:16px;
}
#btnvai{
    top: 0;
    left: 0;
    position: absolute;
    width: 130px;
    height: 100%;
	background-color: #1C62C1;
    border-radius: 30px;
	transition: .5s;
}

#frmlogin{
	bottom:10%;
    left: 50px;
}
#frmregistrar{
    left: 450px;
}

	/*Panel*/
.BarraLateral {
position: fixed;
top: 0;
left: 0;
width: 200px;
height: 100%;
background-color: #0d58aa;
box-sizing: border-box;
text-align:center;
}
.BarraLateral ul {
list-style: none;
padding: 0;
margin-top:10%; 
font-size:18px;			
}

.BarraLateral li 
{
text-align:left;
padding: 12px 10px;
background-color: rgba(0, 0, 0, .5);
color:#d9dbe0;
}

.BarraLateral a 
{
color: white;
text-decoration: none;
}
		
.ContenedorPrincipal 
{
margin-left: 200px;
padding: 20px;
box-sizing: border-box;
text-align:center;
}
		
@media (max-width: 768px) 
	{
.BarraLateral 
{
width: 100%;
height: auto;
position: relative;
}

.ContenedorPrincipal 
{
margin-left: 0;
}			
	}

	/*Tabla*/
table
{
border-collapse: collapse;
width: 100%; 
margin: 0 auto;
background-color: #fff;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color:#000;
}

th
{
background-color: black;
color: white;
}

th, td 
{
padding: 10px;
text-align: center;
border-bottom: 1px solid #dddddd;
}

.ContenedorTabla 
{
margin-left: auto;
margin-right: auto;
max-width:1260px;
width: 100%; 
	
}
.BotonesTeam,.BotonesTeam1,.BotonesTeam2,.BotonesTeam3,.BotonesTeam4,.BotonesTeam5
{	
text-align:center;
display: inline-block;
background:#0258b6;
padding: 6px 10px;
border-radius:6px;
text-decoration: none;
color:white;
border:2px solid black;
cursor:pointer;
font-size: 16px;
}
.BotonesTeam1,.BotonesTeam2,.BotonesTeam3
{
transition: transform 250ms;
width:8%;
background:green;
}
.BotonesTeam2
{
background:#185ca7;
}
.BotonesTeam3
{
background:#cf055f;
}
.BotonesTeam4
{
background:#11757A;
}
.BotonesTeam5
{
transition: transform 250ms;
background:#B63C12;
}
.BotonesTeam1:hover,.BotonesTeam2:hover,.BotonesTeam3:hover,.BotonesTeam5:hover
{
transform: translateY(-10px);
}
.ContBuscar
{
overflow: hidden;
padding-top:1%;
}
.CajaTextoBuscar
{
width: 300px;
padding: 10px;
font-size:1em;
border-radius:5px;
border:1px solid black;
color:black;
}


	/*CajaPopUp*/
.contenedor_popup 
{
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%,-50%);
width:400px; 
transition: all 0.2s;
background-color:white;
}

.caja_popup2 
{
display: block;
position: absolute;
padding:0;
background-color:rgba(0, 0, 0, 0.5); 
width:100%;
height:100%;
}
boton_formulario.js
var x = document.getElementById("frmlogin");
var y = document.getElementById("frmregistrar");
var z = document.getElementById("btnvai");
var textcolor1=document.getElementById("vaibtnlogin");
var textcolor2=document.getElementById("vaibtnregistrar");
textcolor1.style.color="white";
textcolor2.style.color="black";

function registrarvai()
{
x.style.left = "-400px";
y.style.left = "50px";
z.style.left = "110px";
textcolor1.style.color="black";
textcolor2.style.color="white";
}
function loginvai()
{
x.style.left = "50px";
y.style.left = "450px";
z.style.left = "0";
textcolor1.style.color="white";
textcolor2.style.color="black";