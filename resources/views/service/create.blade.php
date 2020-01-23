<!DOCTYPE html>
<html lang="en">

<head>
  @stack('scripts')
  <title>Crear servicio</title>
</head>

<body>
@include('layout.header')
<div id="service" class="Services-out-home  d-flex justify-content-center mb-5">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
      <div class="Services-box">
        <i><img src="{{ URL::asset('images/service2.png') }}" alt="#" /></i>
        <h3>Crear servicios</h3>
        <p>Agrega el servicio que necesitas pagar</p>
      </div>
    </div>
  </div>
<div class="row mt-5">
  <div id="myForm" class="col-6 offset-3">
    <form action="{{ route('service.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="nombre">Nombre del Servicio</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
      </div>

      <div class="form-group">
        <label for="numRef">Numero de Referencia</label>
        <input type="text" class="form-control" name="numRef" id="numRef">
      </div>

      <div class="form-group text-right">
        <input type="submit" class="btn btn-primary" value="Crear Servicio">
      </div>
    </form>
  </div>
</div>
@include('layout.footer')
</body>
</html>