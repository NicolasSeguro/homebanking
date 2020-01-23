<!DOCTYPE html>
<html lang="en">

<head>
  @stack('scripts')
  <title>Inversiones</title>
</head>

<body>
@include('layout.header')
<div id="service" class="Services-out-home  d-flex justify-content-center mb-5">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
      <div class="Services-box">
      <i><img src="{{ URL::asset('images/service3.png') }}" alt="#" /></i>
        <h3>Inversiones</h3>
        <p>Duplica tus ahorros en el mercado financiero</p>
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
          <th scope="col">Empresa</th>
          <th scope="col">Acciones</th>
          <th scope="col">Valor de accion</th>
          <th scope="col">Compra / venta de acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($investments as $inv)
        <tr>
          <td>{{$inv->empresa}}</td>
          <td>{{$inv->acciones}} / {{$inv->total}}</td>
          <td>{{$inv->valor}}</td>
          <td class="text-right">
            <a href="{{ route('investment.buy', ['id' => $inv->id]) }}" class="btn btn-primary">Comprar</a>
            <a href="{{ route('investment.sell', ['id' => $inv->id]) }}" class="btn btn-primary">Vender</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
    
  @include('layout.footer')
</body>

</html>