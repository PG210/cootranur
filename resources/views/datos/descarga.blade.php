@extends('principal')
@section('content')
<br>
<div class="alert alert-dark" role="alert">
     <h4 class="text-center">ACTUALIZACION Y PERMAMENCIA REGIMEN ESPECIAL</h4>
</div>

    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            INFORME 2021
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body tema">
                  <h5 class="card-title">CERTIFICACION ANTECEDENTES JUDICIALES Y CADUCIDAD DE CONTRATOS</h5>
                  <p class="card-text"></p>
                  <a href="{{url('/archivo/CERTIFICACION ANTECEDENTES JUDICIALES Y CADUCIDAD DE CONTRATOS.pdf')}}"  class="btn btn-success" download="CERTIFICACION-ANTECEDENTES-JUDICIALES-Y-CADUCIDAD-DE-CONTRATOS">
                  Descargar Archivo
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body tema">
                  <h5 class="card-title">CAMARA DE COMERCIO</h5>
                  <p class="card-text"></p>
                  <br>
                  <a href="{{url('/archivo/CAMARA DE COMERCIO.pdf')}}"  class="btn btn-success" download="CAMARA-DE-COMERCIO">
                  Descargar Archivo
                  </a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body tema">
                  <h5 class="card-title">CERTIFICACION CARGOS DIRECTIVOS Y GERENCIALES</h5>
                  <p class="card-text"></p>
                  <br>
                  <a href="{{url('/archivo/CERTIFICACION CARGOS DIRECTIVOS Y GERENCIALES.pdf')}}"  class="btn btn-success" download="CERTIFICACION-CARGOS-DIRECTIVOS-Y-GERENCIALES">
                  Descargar Archivo
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body tema">
                  <h5 class="card-title">CERTIFICACION DE CUMPLIMIENTO DE REQUISISTOS PARA PERMANECER EN EL REGIMEN TRIBUTARIO ESPECIAL</h5>
                  <p class="card-text"></p>
                  <a href="{{url('/archivo/CERTIFICACION DE CUMPLIMIENTO DE REQUISISTOS PARA PERMANECER EN EL REGIMEN TRIBUTARIO ESPECIAL.pdf')}}"  class="btn btn-success" download="CERTIFICACION-DE-CUMPLIMIENTO-DE-REQUISISTOS-PARA-PERMANECER-EN-EL-REGIMEN-TRIBUTARIO-ESPECIAL">
                  Descargar Archivo
                  </a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body tema">
                  <h5 class="card-title">CERTIFICACION MEMORIA ECONOMICA </h5>
                  <p class="card-text"></p>
                  <a href="{{url('/archivo/CERTIFICACION MEMORIA ECONOMICA.pdf')}}"  class="btn btn-success" download="CERTIFICACION-MEMORIA-ECONOMICA ">
                  Descargar Archivo
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body tema">
                  <h5 class="card-title">INFORME DE GERENCIA A??O 2020</h5>
                  <p class="card-text"></p>
                  <a href="{{url('/archivo/INFORME DE GERENCIA A??O 2020.pdf')}}"  class="btn btn-success" download="INFORME-DE-GERENCIA-A??O-2020">
                  Descargar Archivo
                  </a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <style>
          .tema{
              background-color:#DCE0F9;
          }
          .bor{
              background-color:#AAF5E2;
          }
          </style>
          
          </div>
      </div>
       <!-- Styles 
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            A??O 2021
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
        </div>
      </div>
      -->
      
    </div>
  </div>

@stop