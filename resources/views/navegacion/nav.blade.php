<nav class="navbar navbar-expand-lg navbar-dark color">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
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
                    <a class="nav-link active" aria-current="page" href="{{route('dat')}}"><b>Nosotros</b></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{route('financiera')}}"><b>Informacion Financiera</b></a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>