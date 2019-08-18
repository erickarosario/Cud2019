@extends('layouts.admin')
@section('content')<br>

			<form class="contact100-form validate-form" enctype="multipart/form-data" method="GET" action="/info">
				@csrf
				<span class="contact100-form-title">
					ADMINISTRADOR DE INFORMACION
				</span>

				<label class="label-input100" for="email"><h3>TITULO</h3></label>
				<div class="wrap-input100 validate-input" >
					<input class="input100" type="text"  placeholder="ingresar titulo" name="titulo">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for=""><h3>IMAGENES O VIDEOS</h3></label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<input  type="file" name="imagen" >
				
				</div>
			
					<label class="label-input100" ><h3>FECHA </h3></label>
				<div class="wrap-input100">
					<input  class="input100" type="date"  placeholder="insertar fecha" name="fecha">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" ><h3>DESCRIPCION</h3></label>
				<div class="wrap-input100 validate-input" >
					<textarea  class="input100"  placeholder="ingrese descripcion" name="descripcion"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						REGISTRAR DATOS
					</button>
				</div>
			</form>


@endsection