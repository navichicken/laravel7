<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Un Dia Sin Problemas</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="{{route('home')}}" title="Logo de la Pagina"><img src="images/logo_un.png" height="30" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-sm-flex justify-content-between" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a class="nav-item nav-link" href="{{route('home')}}"
               title="Boton Inicio">Inicio</a>
              <a class="nav-item nav-link" href="{{route('biblioteca')}}" title="Boton Mi Biblioteca">Mi Biblioteca</a>
              <div class="nav-item dropdown">
                  <a class="nav-item dropdown nav-link dropdown-toggle"  title="Boton Planes" id="navbarDropdownMenuCategories"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Planes
                  </a>
                  <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdownMenuCategories">
                      <a class="dropdown-item" href="{{route('planes')}}">Basico</a>
                      <a class="dropdown-item" href="{{route('planes')}}">Premium</a>
                  </div>
              </div>
              <a class="nav-item nav-link" href="{{route('about')}}" title="Boton Acerca de">Acerca de</a>

          </div>
          <div class="navbar-nav">
              <div class="nav-item dropdown">
                  <a class="nav-item dropdown nav-link dropdown-toggle" href="#" id="navbarDropdownMenuUser"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="images/logo_seguidor.png" height="30" class="logo-user d-inline-block mr-1">
                      <span>{{ Auth::user()->name }}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow border-0"
                      aria-labelledby="navbarDropdownMenuUser">
                      <a class="dropdown-item" href="{{route('perfil')}}">Mi perfil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item button" data-toggle="modal" data-target=".bd-example-modal-lg"
                          href="#">Nueva Nota</a>
                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item" >

                     <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Cerrar sesión') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </nav>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Nueva Nota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm">
                                                            <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Subir imagen de la nota (test)</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>

                            </div>
                            <div class="col-sm">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Titulo de la nota</label>
                                        <input type="text" class="form-control" id="exampleInputTitle"
                                            placeholder="Ingrese un titulo">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descripción</label>
                                        <textarea class="form-control no-resize" id="exampleFormControlTextarea1"
                                            rows="4" placeholder="Ingrese una descripción"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="input">Fecha</label>
                                        <input type="date" class="form-control" placeholder="Ingrese la fecha">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Nota</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">

        <h4 class="text-center">Mis planes a escoger</h4>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Planes</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active my-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="lista-planes">
                    <div class="card border-0 text-left" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <a href="images/basico.jpg"><img src="images/basico.jpg" title="Plan Basico" class="card-img"
                                        width="100%" height="100%" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="font-size: 0.9rem;">
                                    <a href="#">
                                        <p class="card-title mb-0" style="font-size: 1rem; font-weight: 500;">Plan Basico</p>
                                    </a>

                                    <p class="card-text mt-2">This is a wider card with supporting text
                                        below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.

                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-verplan">
                                            Ver Plan</button>
                                        <button type="button" class="btn btn-primary">
                                            Adquirir Plan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="card border-0 text-left" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <a href="images/premium.jpg"><img src="images/premium.jpg" title="Plan Premium" class="card-img"
                                        width="100%" height="100%" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="font-size: 0.9rem;">
                                    <a href="#">
                                        <p class="card-title mb-0" style="font-size: 1rem; font-weight: 500;">Plan Premium</p>
                                    </a>
                                    <p class="card-text mt-2">This is a wider card with supporting text
                                        below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.

                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-verplan">
                                            Ver Plan</button>
                                        <button type="button" class="btn btn-primary">
                                            Adquirir Plan</button>
                                    </div>
                                </div>
                            </div>
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

    <script src="../js/main.js"></script>

</body>

</html>
