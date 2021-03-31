<nav class="navbar navbar-expand-lg navbar-dark color">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="{{url('img/2.png')}}" class="imagen" alt="cargando imagen...." > 
               <style>
                img.imagen{
                        position: relative;
                        width: 230px; height: 50px;
                        top: 2px; /* ajustar los valores para mover la imagen */
                        left: 0px;
                        margin: 1%;
                        border:1px solid #fff;
                        display: block;
                      }
                  .color{
                      background-color:#FD6C19;
                  }
                </style>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dat')}}"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#"><b>Link</b></a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>