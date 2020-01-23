<!DOCTYPE html>
<html lang="en">

<head>
  @stack('scripts')
  <title>Pago de servicios</title>
</head>

<body>
@include('layout.header')
<div id="service" class="Services-out-home  d-flex justify-content-center mb-5">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
      <div class="Services-box">
        <i><img src="{{ URL::asset('images/service2.png') }}" alt="#" /></i>
        <h3>Pago de servicios</h3>
        <p>Paga todo lo que necesites desde cualquier lugar</p>
      </div>
    </div>
  </div>
<div class="alert {{ Session::get('alertClass') }}" role="alert">
        {{ Session::get('payMsg') }}
    </div>


    <div class="row">
      <div id="myForm" class="col-6 offset-3">
        <form action="{{ route('service.pay') }}" method="post" class="pay animated fadeInUp delay-1s">
          @csrf
          <div class="form-group">
            <label for="serviceName" style="color:white">Nombre del Servicio</label>
              <select name="serviceName" id="serviceName" class="form-control">
                <option selected>Elige un servicio</option>
                @foreach ($services as $service)
                  <option value="{{ $service->nombre }}">{{ $service->nombre }}</option>
                @endforeach
              </select>
          </div>

          <div class="form-group">
            <label for="importe" style="color:white">Importe</label>
            <input type="number" class="form-control" id="importe" name="importe">
          </div>

          <div class="form-group text-right">
            <input type="submit" class="btn btn-primary" value="Pagar Servicio">
          </div>
        </form>
      </div>
    </div>
  <!--Fin formulario de pagos-->
  </div>
  @include('layout.footer')
</body>

</html>