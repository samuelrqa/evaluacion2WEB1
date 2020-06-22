<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Taller 2 Web I - Usuarios PHP/MySql</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		      crossorigin="anonymous">
		<link rel="stylesheet" href="fontawesome/css/all.min.css">
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-4">
					<div class="login-form-container pb-5 p-sm-4 p-xl-4 pb-xl-4 bg-white">
						<h3 class="text-center mt-xl-1 mb-xl-5 pt-sm-5 pt-lg-0">Registro</h3>
						<form class="pb-sm-5 pb-lg-0" action="" method="">
							<div class="form-row">

								<div class="form-group col-xl-6 input-container left-icon">
									<label for="inputName">Nombres</label>
									<i class="icono fas fa-signature"></i>
									<input type="text" class="form-control" id="inputName" name="name"
									       autocomplete="off">
								</div>

								<div class="form-group col-xl-6 input-container left-icon">
									<label for="inputLastName">Apellidos</label>
									<i class="icono fas fa-signature"></i>
									<input type="text" class="form-control" id="inputLastName" name="lastName"
									       autocomplete="off">
								</div>

							</div>

							<div class="form-group input-container left-icon">
								<label for="inputEmail">Correo electrónico</label>
								<i class="icono fas fa-at"></i>
								<input type="email" class="form-control" id="inputEmail" name="email"
								       autocomplete="off">

							</div>

							<div class="form-group input-container left-icon">
								<label for="inputUsuario">Nombre de usuario</label>
								<i class="icono fas fa-user"></i>
								<input type="text" class="form-control" id="inputUsuario" autocomplete="off">
							</div>

							<div class="form-group input-container left-icon">
								<label for="inputPassword">Contraseña</label>
								<i class="icono fas fa-key"></i>
								<input type="password" class="form-control" id="inputPassword" autocomplete="off">
							</div>

							<div class="form-group input-container left-icon">
								<label for="inputConfirmar">Confirmar contraseña</label>
								<i class="icono fas fa-key"></i>
								<input type="password" class="form-control" id="inputConfirmar" autocomplete="off">
							</div>

							<label class="checkbox mb-4">
								<input type="checkbox" name="aceptar" value="aceptar"> Acepto T&C
							</label>

							<button class="btn btn-block mt-xl-5" type="submit" id="enviar">Registrarse</button>
						</form>
					</div> <!--login-form-container-->
				</div> <!--col-12 col-lg-4-->

				<div class="col-12 col-lg-8">
					<h2 class="text-center text-white mt-4 mb-4 pt-sm-5 pt-lg-0">Administración de Usuarios</h2>
					<div class="users-man mt-5">
						<form>
							<div class="form-row justify-content-center">
								<div class="form-group col-9 col-lg-6 mx-3 mb-2 input-container left-icon">
									<label for="inputName">Buscar usuario</label>
									<i class="icono fas fa-search" id="search-icon"></i>
									<input type="text" class="form-control" id="inputSearch" name="name"
									       placeholder="Nombre o apellido del usuario" autocomplete="off">
									<small>Para listar todos los usuarios registrados deje el campo vacío</small>
								</div>

								<div class="form-group">
									<button class="btn mt-4" type="submit" id="buscar">Buscar</button>
								</div>
							</div>
						</form>
						<!--<div>
							<table class="tabla">
								<thead>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>Usuario</th>
									<th>Contraseña</th>
								</thead>
							</table>
						</div>-->
					</div>

					<div class="users-man mt-5">
						<form>
							<div class="form-row justify-content-center">
								<div class="form-group col-9 col-lg-6 mx-3 mb-2 input-container left-icon">
									<label for="inputName">Eliminar usuario</label>
									<i class="icono fas fa-user-minus" id="delete-icon"></i>
									<input type="text" class="form-control" id="inputDelete" name="name"
									       placeholder="Nombre o apellido del usuario" autocomplete="off">
								</div>

								<div class="form-group">
									<button class="btn mt-4" type="submit" id="eliminar">Eliminar</button>
								</div>
							</div>
						</form>
					</div>

					<div class="registered-users">
						<h3 class="text-center mt-4 mb-4">Listar usuarios</h3>
						<table class="tabla">
							<thead>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Correo electrónico</th>
								<th>Usuario</th>
							</thead>
							<tbody>
								<tr>
									<td>Samuel Ricardo</td>
									<td>Quintero Agudelo</td>
									<td>squinteroagudelo18@gmail.com</td>
									<td>squintero18</td>
								</tr>
								<tr>
									<td>Samuel Ricardo</td>
									<td>Quintero Agudelo</td>
									<td>squinteroagudelo18@gmail.com</td>
									<td>squintero18</td>
								</tr>
								<tr>
									<td>Samuel Ricardo</td>
									<td>Quintero Agudelo</td>
									<td>squinteroagudelo18@gmail.com</td>
									<td>squintero18</td>
								</tr>
								<tr>
									<td>Samuel Ricardo</td>
									<td>Quintero Agudelo</td>
									<td>squinteroagudelo18@gmail.com</td>
									<td>squintero18</td>
								</tr>
								<tr>
									<td>Samuel Ricardo</td>
									<td>Quintero Agudelo</td>
									<td>squinteroagudelo18@gmail.com</td>
									<td>squintero18</td>
								</tr>
								<tr>
									<td>Samuel Ricardo</td>
									<td>Quintero Agudelo</td>
									<td>squinteroagudelo18@gmail.com</td>
									<td>squintero18</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div> <!--col-12 col-lg-8-->

			</div> <!--row-->
		</div> <!--container-fluid-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		        crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		        crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
		        crossorigin="anonymous"></script>
	</body>
</html>