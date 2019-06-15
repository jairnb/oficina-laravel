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
        
        <div class="carousel-item active" style="height:450px">
            <img src="img/trocapeças.jpg" alt="" class="img-fluid d-block" style="width: 100%;height:450px">
            <div class="carousel-caption d-none d-md-block" style="">
                <h3 style="color:rgb(230, 73, 58);"><strong>Visite nos</strong></h3>
                <strong><p style="color:rgb(230, 73, 58);">Não deixe seu carro na mão de qualquer um</p></strong>
            </div>
        </div>
        
        <div class="carousel-item ">
            <img src="img/1.jpg" alt="" img-fluid d-block style="width: 100%;height:450px">
            <div class="carousel-caption d-none d-md-block">
                <<h3 style="color:rgb(230, 73, 58);"><strong>Preços Competitivos</strong></h3>
                <strong><p style="color:rgb(230, 73, 58);">com o objetivo de proporcionar a sua satisfação</p></strong>
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
<div class="container-fluid" id="serviceSection" style="">
    <div class="col-12 text-center my-5 servico">
        <h1><strong>Serviços</strong></h1>
        <span id="division" class="row"></span>
    </div>
    <div class="container-fluid">
       <div class="row ">
        <div class="col-md-3 servicType" id="amortecedor">
            <a href="" class="linkService"> <img src="img/amortecedor.jpg" class="img-fluid">
                <button class="buttonService"><strong>Amortecedor</strong></button>
            </a>                 
        </div>
        <div class="col-md-3 servicType" id="freios">
            <a href="" class="linkService"> <img src="img/freio.jpg" class="img-fluid">
                <button class="buttonService"><strong>Freios</strong></button>
            </a>
        </div>
        <div class="col-md-3 servicType" id="">
            <a href="" class="linkService"> <img src="img/kit-embreagem.jpg" class="img-fluid">
                <button class="buttonService"><strong>Embreagem</strong></button>
            </a>
        </div>
        <div class="col-md-3 servicType">
            <a href="" class="linkService"> <img src="img/mecanica-automotiva.jpg" class="img-fluid">
                <button class="buttonService"><strong>Manutenção Preventiva</strong></button>
            </a>
        </div>   
    </div>
    
</div>
<div class="container-fluid" id="aboutSection">
    <div class="col-12 text-center my-5 servico">
        <h1><strong>Sobre Nos</strong></h1>
    </div>
    <div class="container-fluid " style="height:100%">
        <div class="row parallax">
            
            <div class="col-md-6">
                <div class="text-center" >
                    <h3><strong>Quem somos</strong></h3>
                </div>
                <div class="row-fluid">
                    <div class="col-md-12">
                        <h3><i class="fa fa-thumb-tack"></i><strong>  Missão</strong></i></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid minus quo ratione atque minima? Voluptatibus voluptatum minima saepe fuga incidunt. </p>
                    </div>
                    <div class="col-md-12">
                        <h3><i class="fa fa-eye "><strong>  Visão</strong></i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos similique repellendus sed, praesentium maxime explicabo voluptatibus ullam aspernatur, ipsum mollitia quibusdam dolorum necessitatibus ratione magni earum tempore! Cumque, aperiam laboriosam. </p>
                    </div>
                    <div class="col-md-12">
                        <h3><i class="fa fa-lightbulb-o"></i></i><strong>  Valores</strong></i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum perspiciatis magnam sequi ut laborum fuga facere velit earum nisi explicabo. Alias laboriosam voluptatem fugit nihil.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <h3><strong>Conheça nossa equipa</strong></h3>
                </div>
                <div class="container-fluid">
                  <div class="row">
                    <div class='col-md-3'>
                    <h4></h4>
                    <p>
                        
                    </p>
                    <img src="img/cara3.jpg" class="img-fluid">
                </div>
                <div class='col-md-3'>
                    <h4></h4>
                    <p>
                        
                    </p>
                    <img src="img/cara2.jpg" class="img-fluid">
                </div>
                <div class='col-md-3'>
                    <h4></h4>
                    <p>
                        
                    </p>
                    <img src="img/cara4.jpg" class="img-fluid">
                 </div> 
                      <div class='col-md-3'>
                    <h4></h4>
                    <p>
                        
                    </p>
                    <img src="img/cara4.jpg" class="img-fluid">
                </div>
                
           </div>
                </div>
            </div>
            
    </div>
                </div>
</div>
</div>
<div class="container-fluid" id="contactSection" style="">
    <div class="col-12 text-center my-5 servico">
        <h1><strong>Contacto</strong></h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <div class="text-center">
                    
                    <h3><strong>Conheça a nossa localização</strong></h3>
                    <p>
                      <span class="fa fa-map-marker fa-2x mr-2"></span> Universidade Jean Peaget de Cabo Verde
                    </p>
                </div>
              <div class="mapouter">
                  <div class="mapouter">
                      <div class="gmap_canvas">
                          <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=jean%20piaget%20cabo%20verde&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                              
                          </iframe>    
                      </div>
                  </div>
                  
              </div>  
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    
                    <h3><strong>Fale Conosco</strong></h3>
                    <p>
                      Tem alguma dúvida, sugestão ou reclamação? 
                      Deixe uma mensagem!
                    </p>
                </div>
                <form action="">
                  <div class="form-group">   
                    <input type="email" class="form-control radius" id="email" placeholder="Email" required="required">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control radius" id="telefone" placeholder="Telefone">
                  </div>
                    <div class="form-group">
                        <textarea class="form-control radius" id="" rows="7" placeholder="Mensagem"></textarea>
                    </div>
                  <div class="form-group form-check">
                    
                  </div>
                    <button type="submit" class="btn contatButton"><strong>Enviar</strong></button>
                </form>
            </div>
        </div>
    </div>
    
</div> 
    
<div>
   <!-- Footer -->
<footer class="page-footer font-small">

<!-- Footer Elements -->
<div class="container">

  <!-- Grid row-->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 pt-5">
      <div class="mb-5 flex-center text-center">

        <!-- Facebook -->
        <a href="#">
          <i class="fa fa-facebook-square fa-3x mr-3 mr-md-5"></i>
        </a>
        <!-- Twitter -->
        <a href="#">
          <i class="fa fa-twitter fa-3x mr-3 mr-md-5"></i>
        </a>
        <!-- Google +-->
        <a href="#">
          <i class="fa fa-instagram fa-3x mr-3 mr-md-5"></i>
        </a>
        <!--Linkedin -->
        
      </div>
    </div>
    <!-- Grid column -->

  </div>
<!-- Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">
    © 2019 Copyright:Piaget
  
</div>
<!-- Copyright -->

</footer>
<!-- Footer --> 
</div>
  

@endsection