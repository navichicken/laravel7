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
                <a class="nav-item nav-link" onclick="location.reload()" style="cursor:pointer;"
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

    <div class="container">

        <h4 class="font-media mt-5 mb-0">Lo más visto el último mes</h4>
        <p class="text-form text-muted">Nuestras agendas y calendarios mas recientes </p>

        <div class="d-flex align-items-center mt-4 mb-5">

            <a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev"
                style="position: initial; width: initial;">
                <span class="text-dark" aria-hidden="true"><i class="far fa-arrow-alt-circle-left fa-2x"></i></span>
                <span class="sr-only">Anterior</span>
            </a>

            <div class="carousel slide mx-3" style="max-width: inherit;" data-ride="carousel" id="multi_item">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/agendafloral.jpg"><img src="images/agendafloral.jpg" title="Agenda Floral" class="card-img"
                                                    width="100%" height="100%"</a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Agenda Floral 2020 </p>
                                                </a>

                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">Con esta agenda tus dias seran llenos
                                                 de hermosas flores y sobre todo que conbiinaran excelentemente
                                                 con tu estilo primaveral.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>3</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/calendariona.jpg"><img src="images/calendariona.jpg" title="Calendario Nacional" class="card-img"
                                                    width="150%" height="150%" alt="..."></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Calendario Nacional</p>
                                                </a>

                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">Por que sentirnos identificados con nuestro
                                                    pais es importante, mas si cada dia te lo recuerda tu calendario
                                                    de una hermosa alpaca.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>15</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/agendacolor.jpg"><img src="images/agendacolor.jpg" title="Agenda Colors" class="card-img"
                                                    width="100%" height="100%" alt="..."></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Calendario Colors</p>
                                                </a>

                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">Esta variedad de colores hara la experiencia
                                                    de agendar tus dias mas coloridas y fascinantes.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>50</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/agenda2.jpg"><img src="images/agenda2.jpg" title="Agenda Vintash" class="card-img"
                                                    width="100%" height="100%" alt="..."></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Agenda Vintash</p>
                                                </a>

                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">Es una agenda con diseño unico y viene
                                                    con portadas para cada mes.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>30</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-next" href="#multi_item" role="button" data-slide="next"
                style="position: initial; width: initial;">
                <span class="text-dark" aria-hidden="true"><i class="far fa-arrow-alt-circle-right fa-2x"></i></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>


        <h4 class="font-media mt-5 mb-0">Lo mas usado el ultimo año</h4>
        <p class="text-form text-muted">Nuestras agendas y calendarios mas usados en el ultimo año.</p>

        <div class="d-flex align-items-center mt-4 mb-5">

            <a class="carousel-control-prev" href="#multi_item2" role="button" data-slide="prev"
                style="position: initial; width: initial;">
                <span class="text-dark" aria-hidden="true"><i class="far fa-arrow-alt-circle-left fa-2x"></i></span>
                <span class="sr-only">Anterior</span>
            </a>

            <div class="carousel slide mx-3" style="max-width: inherit;" data-ride="carousel" id="multi_item2">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/agendaharry.jpg"><img src="images/agendaharry.jpg" title="Agenda Harry Potter" class="card-img"
                                                    width="150%" height="150%" alt="..."></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Agenda Harry Potter
                                                        </p>
                                                </a>
                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">Para los amantes de esta gran saga.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>3</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/agendaescolar.jpg"><img src="images/agendaescolar.jpg" title="Agenda Escolar" class="card-img"
                                                    width="100%" height="100%" alt="..."></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Agenda Escolar</p>
                                                </a>

                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">Agenda diseñada para estudiantes de primaria
                                                    y secundaria.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>5</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/agendaunicornio.jpg"><img src="images/agendaunicornio.jpg" title="Agenda Unicornio" class="card-img"
                                                    width="100%" height="100%" alt="..."></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Agenda Unicornio</p>
                                                </a>

                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">¡Nuestra nueva Agenda  con tema de unicornio
                                                    ya está aquí! Cada planificador mensual de Enero a Diciembre contiene
                                                    una descripción general del mes y una sección de notas. El planificador
                                                     semanal incluyen espacios para escribir su agenda diaria, así como una
                                                     lista de prioridades y tareas pendientes.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>3</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 text-left" style="max-width: 100%;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a target="_blank" href="images/calendariona.jpg"><img src="images/calendariona.jpg" title="Calendario Nacional" class="card-img"
                                                    width="150%" height="150%" alt="..."></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="font-size: 0.9rem;">
                                                <a href="#">
                                                    <p class="card-title mb-0"
                                                        style="font-size: 1rem; font-weight: 500;">Calendario Nacional</p>
                                                </a>

                                                <div class="my-1 text-muted">
                                                    <small><i class="far fa-eye mx-1"></i>1.2k</small>
                                                    <small><i class="fas fa-star mx-1"></i>50</small>
                                                    <small><i class="fas fa-list mx-1"></i>5</small>
                                                </div>

                                                <p class="card-text mt-2">Por que sentirnos identificados con nuestro
                                                    pais es importante, mas si cada dia te lo recuerda tu calendario
                                                    de una hermosa alpaca.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Actualizado hace
                                                        <span>15</span> minutos</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-next" href="#multi_item2" role="button" data-slide="next"
                style="position: initial; width: initial;">
                <span class="text-dark" aria-hidden="true"><i class="far fa-arrow-alt-circle-right fa-2x"></i></span>
                <span class="sr-only">Siguiente</span>
            </a>
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


</body>

</html>
