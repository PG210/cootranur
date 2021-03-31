@extends('welcome')
@section('content')
<br>
<div class="alert alert-primary" role="alert">
     <h4 class="text-center">ACTUALIZACION Y PERMAMENCIA REGIMEN ESPECIAL</h4>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body tema">
        <h5 class="card-title">CERTIFICACION ANTECEDENTES JUDICIALES Y CADUCIDAD DE CONTRATOS</h5>
        <p class="card-text"></p>
        <a href="{{url('/archivo/CERTIFICACION ANTECEDENTES JUDICIALES Y CADUCIDAD DE CONTRATOS.pdf')}}"  class="btn btn-primary" download="CERTIFICACION-ANTECEDENTES-JUDICIALES-Y-CADUCIDAD-DE-CONTRATOS">
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
        <a href="{{url('/archivo/CAMARA DE COMERCIO.pdf')}}"  class="btn btn-primary" download="CAMARA-DE-COMERCIO">
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
        <a href="{{url('/archivo/CERTIFICACION CARGOS DIRECTIVOS Y GERENCIALES.pdf')}}"  class="btn btn-primary" download="CERTIFICACION-CARGOS-DIRECTIVOS-Y-GERENCIALES">
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
        <a href="{{url('/archivo/CERTIFICACION DE CUMPLIMIENTO DE REQUISISTOS PARA PERMANECER EN EL REGIMEN TRIBUTARIO ESPECIAL.pdf')}}"  class="btn btn-primary" download="CERTIFICACION-DE-CUMPLIMIENTO-DE-REQUISISTOS-PARA-PERMANECER-EN-EL-REGIMEN-TRIBUTARIO-ESPECIAL">
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
        <a href="{{url('/archivo/CERTIFICACION MEMORIA ECONOMICA.pdf')}}"  class="btn btn-primary" download="CERTIFICACION-MEMORIA-ECONOMICA ">
         Descargar Archivo
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body tema">
        <h5 class="card-title">INFORME DE GERENCIA AÑO 2020</h5>
        <p class="card-text"></p>
        <a href="{{url('/archivo/INFORME DE GERENCIA AÑO 2020.pdf')}}"  class="btn btn-primary" download="INFORME-DE-GERENCIA-AÑO-2020">
         Descargar Archivo
        </a>
      </div>
    </div>
  </div>
</div>
<br>
<style>
 .tema{
     background-color:#FFDC7F;
 }
 .bor{
     background-color:#AAF5E2;
 }
</style>
@stop