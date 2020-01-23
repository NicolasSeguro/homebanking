<!DOCTYPE html>
<html lang="en">

<head>
  @stack('scripts')
  <title>Balance</title>
</head>

<body>
@include('layout.header')
  <div id="service" class="Services-out-home  d-flex justify-content-center mb-5">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
      <div class="Services-box">
        <i><img src="{{ URL::asset('images/service1.png') }}" alt="#" /></i>
        <h3>Balance</h3>
        <p>Mira como vienen tus cuentas y organiza tus movimientos</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="alert alert-primary" role="alert" style="margin-left: 5px;">
        <strong>Saldo ${{ $salary }}</strong>
    </div>
    <table class="table text-center table-hover">
        <thead>
            <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Importe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($balances as $item)
            <tr>
                <th scope="row">{{ date('d-m-Y', strtotime($item->fecha))  }}</th>
                <td>{{ $item->desc }}</td>
                <td>{{ $item->importe }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  @include('layout.footer')
</body>

</html>