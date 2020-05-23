<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Un Dia Sin Problemas</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="{{ asset('css/app2.css') }}" rel="stylesheet">

</head>
<body>
	  <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#" title="Logo de la Pagina"><img src="images/logo_un.png" height="30" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-sm-flex justify-content-end" id="navbarNavAltMarkup"
        style="background-color: #43B1B4;" height="30" alt="">
            <div class="navbar-nav">

                <a class="nav-item nav-link" data-toggle="modal" data-target="#modal-register"
                    href="#" title="Boton Registrate" style="color: white"><b>Registrarse</b></a>

                <div class="modal fade" id="modal-register" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    	<div class="modal-dialog modal-dialog-centered" role="document">
												<!-- <form method="POST" action="{{ route('register') }}">
		                       @csrf -->
													<div class="modal-content border-0">
															<div class="modal-header text-white" style="background-color: #43B1B4;">
																	<h5 class="modal-title" id="exampleModalLongTitle">Registrate en Un dia sin problemas</h5>
																	<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																	</button>
															</div>
															<div class="modal-body">
																<form method="POST" action="{{ route('register') }}">
						                        @csrf

						                        <div class="form-group row">
						                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

						                            <div class="col-md-6">
						                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre"
																						name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

						                                @error('name')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
						                            </div>
						                        </div>

						                        <div class="form-group row">
						                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

						                            <div class="col-md-6">
						                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Correo"name="email" value="{{ old('email') }}" required autocomplete="email">

						                                @error('email')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
						                            </div>
						                        </div>

						                        <div class="form-group row">
						                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

						                            <div class="col-md-6">
						                                <input id="password" type="password" placeholder="Contraseña"
																						 class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

						                                @error('password')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
						                            </div>
						                        </div>

						                        <div class="form-group row">
						                            <label for="password-confirm" class="col-md-4 col-form-label
																				text-md-right">{{ __('Confirmar Contraseña') }}</label>

						                            <div class="col-md-6">
						                                <input id="password-confirm" type="password" placeholder="Contraseña"
																						class="form-control" name="password_confirmation" required autocomplete="new-password">
						                            </div>
						                        </div>

						                        <div class="form-group row mb-0">
						                            <div class="col-md-6 offset-md-4">
						                                <button type="submit" class="btn btn-primary">
						                                    {{ __('Registrar') }}
						                                </button>
						                            </div>
						                        </div>
						                    </form>
															</div>

													</div>
												<!-- </form> -->
                    </div>
                </div>

                <a class="nav-item nav-link" data-toggle="modal" data-target="#modal-login" href="inicio.php" title="Boton Iniciar Sesión"
                style="color: white"><b>Iniciar sesión</b></a>


                <div class="modal fade" id="modal-login" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content border-0">
													<form method="POST" action="{{ route('login') }}">
			                        @csrf
                            <div class="modal-header text-white" style="background-color: #43B1B4;">
                                <h5 class="modal-title" id="exampleModalLongTitle">Inicia sesión en Un dia sin problemas</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmailLogin">Correo electrónico</label>
																				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
																							 name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
																							 @error('email')
							                                     <span class="invalid-feedback" role="alert">
							                                         <strong>{{ $message }}</strong>
							                                     </span>
							                                 @enderror
																				<small id="emailHelp" class="form-text text-muted">No compartiremos su correo
                                            electrónico con nadie.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPasswordLogin">Contraseña</label>
																				<input id="password" type="password" class="form-control @error('password')
																					is-invalid @enderror" name="password" required autocomplete="current-password"
																				 	placeholder="Ingrese su contraseña">
																				@error('password')
																						<span class="invalid-feedback" role="alert">
																								<strong>{{ $message }}</strong>
																						</span>
																				@enderror
                                    </div>
																		<div class="row">
																			<div class="col-md-1">
																			</div>
																			<div class="col-md-5"  >
																					<input class="form-check-input" type="checkbox"
																					name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
																					<label class="form-check-label" for="remember">
																							{{ __('Remember Me') }}
																					</label>
																			</div>
																			<div class="col-md-6">
																				@if (Route::has('password.request'))
																						<a class="btn btn-link" href="{{ route('password.request') }}">
																								{{ __('Forgot Your Password?') }}
																						</a>
																				@endif
																			</div>

																		</div>


                            </div><!-- end.modal body-->
                            <div class="modal-footer">
															<button type="submit" class="btn btn-primary">
																	{{ __('Login') }}
															</button>
                            </div>
													</form>
                        </div>  <!-- end.modal Content-->
                    </div>
                </div>

            </div>

        </div>
    </nav>

    <div class="index-row1">

        <div class="container">

            <div class="row my-3 pt-lg-3 my-lg-0">

                <div class="col-lg my-auto">

                    <h5 class="text-center text-lg-left mb-lg-3 mb-3">

                        <div class="mb-2">Somos una aplicación que te ayudará a organizarte día día...
                        </div>
                        <small class="text-muted">Gracias que nuestra pagina te propone planes que te ayudarán a seleccionar el tipo de agenda para ti.
                        </small>

                        </h3>

                </div>

                <div class="col-lg mt-3 mb-2 my-lg-0">

                    <a target="_blank" href="images/agenda.jpg"><img class="d-block mx-auto" src="images/agenda.jpg" title="Agenda" width="90%"alt="agenda de imagen"></a>

                </div>

            </div>

        </div>

    </div>

    <div class="index-row2">

        <div class="container">

            <div class="row my-lg-5">

                <div class="col-lg-7 order-lg-last my-lg-auto text-lg-left text-center pl-lg-4">

                    <h5 class="mb-3">Tu vida será más fácil.</h5>
                    <p class="my-4">Ya que te brindaremos estas opciones que te ayudarán que la organización sea cada vez más fácil. <a class="color-pag" href="#">Saber más</a> </p>

                    <p class="font-weight-bold">ORGANIZA TUS IDEAS...</p>

                    <ul class="list-group">

                        <li class="list-group-item">

                            <i class="fas fa-book"></i>
                            <p class="d-inline"> Escribiendo tus notas.</p>

                        </li>

                        <li class="list-group-item">

                            <i class="fas fa-calendar"></i>
                            <p class="d-inline"> Consigue organizar tu dia a dia.</p>

                        </li>

                    </ul>

                </div>

                <div class="col-lg order-lg-first my-4 my-lg-0">

                    <a target="_blank" href="images/2.jpg"><img class="d-block mx-auto" src="images/2.jpg" title="Agenda 2" width="100%" alt="libros"></a>

                </div>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
		<script src="{{ asset('js/notas.js') }}" defer></script>
		<script src="{{ asset('js/index.js') }}" defer></script>
		@if( count($errors) > 0 )
		  <script type="text/javascript">
		      $('#modal-login').modal('show');
		  </script>
		@endif

</body>
</html>
