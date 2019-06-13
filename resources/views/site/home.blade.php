@extends('app')

@section('main-content')

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" id="homeSection">
    <div class="container">
       <a class="navbar-brand mb-0" href="#">
        <img src="img/logo2.png" alt="" width="120px" height="60px"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSite">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-4">
                <strong><a id=""class="nav-link link" href="" >
                    Home
                </a>
                </strong>
            </li> 
            <li class="nav-item ml-4">
                <strong><a id="service" class="nav-link link" href="#serviceSection">
                    Serviços
                </a>
                </strong>
            </li> 
            <li class="nav-item ml-4">
                <strong><a id="about" class="nav-link link" href="#aboutSection">
                    Sobre Nos
                        </a>
                </strong>
            </li> 
            <li class="nav-item ml-4">
                <strong><a id="contact" class="nav-link link" href="#contactSection">
                    Contato
                    </a>
                </strong>
            </li> 
        </ul>
        <ul class="navbar-nav ml-5">
        <a href="{{url('login')}}" target="_blank"><button class="btn btn-default" id="system_login" >
                <strong> Login</strong>
                </button></a> 
        </ul>
    </div> 
    </div>
    
</nav>
<div id="carouselSite" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        
        <div class="carousel-item active">
            <img src="img/4.jpg" alt="" class="img-fluid d-block" style="width: 100%;height:400px">
            <div class="carousel-caption d-none d-md-block">
                <h3>hhhhhhhhhh</h3>
                <p>sssssssssssssssssssssssssssssssssssssssss</p>
            </div>
        </div>
        
        <div class="carousel-item ">
            <img src="img/2.jpg" alt="" img-fluid d-block style="width: 100%;height:400px">
            <div class="carousel-caption d-none d-md-block">
                <h3>hhhhhrrrrrrrrhhhh</h3>
                <p>ooooooooooooooooooosssssssssssssssssssssss</p>
            </div>
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
    
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Anterior</span>
    </a>
    
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
    
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Proximo</span>
    </a>
</div>
<div class="container-fluid" id="serviceSection" style="height: 800px">
    <div class="col-12 text-center my-5 servico">
        <h1><strong>Serviços</strong></h1>
    </div>
    
</div>
<div class="container-fluid" id="aboutSection" style="height: 800px">
    <div class="col-12 text-center my-5 servico">
        <h1><strong>Sobre Nos</strong></h1>
    </div>
    
</div>
<div class="container-fluid" id="contactSection" style="height: 800px">
    <div class="col-12 text-center my-5 servico">
        <h1><strong>Contacto</strong></h1>
    </div>
    
</div>
<div>
    <div>
        
    </div>
</div>
  

@endsection