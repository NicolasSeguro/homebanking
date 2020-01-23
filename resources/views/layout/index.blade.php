<!DOCTYPE html>
<html lang="en">

<head>
    @stack('scripts')
</head>
<!-- body -->

<body class="main-layout">
    @include('layout.header')
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="text-bg">
                        <h1>Digital<br>Banking</h1>
                        <span>¿Que querés hacer hoy?</span>
                        <p>Maneja tu cuenta de una manera simple, mirando tu balance,
                            haciendo transferencias, pagando servicios y armando inversiones!</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-img">
                        <figure><img src="{{ URL::asset('images/img.png') }}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- Hosting -->
    <div id="" class="hosting">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Disfrutá de la mejor experiencia bancaria</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="web_hosting">
                        <figure><img src="{{ URL::asset('images/web.jpg') }}" alt="#" /></figure>
                        <p>No tenemos costos de apertura, ni cobramos comisiones. Las transferencias son gratuitas, ni
                            tenemos costo de mantenimiento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Hosting -->
    <!-- Services  -->
    <div id="service" class="Services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nuestros servicios</h2>
                        <p>¿Que querés hacer hoy?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                    <a href="{{ url('balance') }}">
                      <i><img src="{{ URL::asset('images/service1.png') }}" alt="" /></i>
                      <h3>Balance</h3>
                      <p>Mira como vienen tus cuentas y organiza tus movimientos</p>
                    </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                    <a href="{{ url('service') }}">
                      <i><img src="{{ URL::asset('images/service2.png') }}" alt="" /></i>
                      <h3>Pago de Servicios</h3>
                      <p>Paga todo lo que necesites desde cualquier lugar</p>
                    </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Services-box">
                    <a href="{{ url('investments') }}">
                      <i><img src="{{ URL::asset('images/service3.png') }}" alt="" /></i>
                      <h3>Inversiones</h3>
                      <p>Duplica tus ahorros en el mercado financiero</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Servicess -->

    @include('layout.footer')
</body>

</html>
