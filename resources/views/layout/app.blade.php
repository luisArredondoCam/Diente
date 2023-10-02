<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="StyleSheet" href="{{ url('assets/style.css') }}">
  <link rel="StyleSheet" href="{{ url('assets/style2.css') }}">
  <link rel="StyleSheet" href="{{ url('assets/estilos4.css') }}">
  <link rel="StyleSheet" href="{{ url('assets/cirujanos.css') }}">
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(9, 79, 126);">
    <div class="container-fluid text-center my-container">
      <a class="navbar-brand my-navbar-brand" href="#">
        <img src="{{ url(mostrar_info('logo'))}}" alt="Logo" width="250" height="74">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">{{ mostrar_info('boton_Inicio') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('nosotros') }}">{{ mostrar_info('boton_Nosotros') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('galeria') }}">{{ mostrar_info('boton_Galeria') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ mostrar_info('boton_Cirujanos') }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('shyro')}}">Shyro Garcia Lizana</a></li>
              <li><a class="dropdown-item" href="{{ url('gabriela')}}">Gabriela Socualaya Veli</a></li>
              <li><a class="dropdown-item" href="{{ url('jenny')}}">Jenny Lizana Quispe</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ mostrar_info('boton_Especialidades') }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('endodoncia')}}">Endodoncia</a></li>
              <li><a class="dropdown-item" href="{{ url('ortodoncia')}}">Ortodoncia</a></li>
              <li><a class="dropdown-item" href="{{ url('operatorias')}}">Operatorias</a></li>
              <li><a class="dropdown-item" href="{{ url('protesis_total')}}">Protesis total</a></li>
              <li><a class="dropdown-item" href="{{ url('protesis_parcial')}}">Prótesis Parcial</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ mostrar_info('boton_Servicios') }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('destartraje')}}">Destartraje</a></li>
              <li><a class="dropdown-item" href="{{ url('profilaxis')}}">Profilaxis</a></li>
              <li><a class="dropdown-item" href="{{ url('puentes')}}">Puentes</a></li>
              <li><a class="dropdown-item" href="{{ url('coronas')}}">Coronas</a></li>
              <li><a class="dropdown-item" href="{{ url('cirugias_dentales')}}">Cirugias Dentales</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('separar_cita')}}"
              style="color: rgb(10, 91, 145); border-radius: 20px; padding: 10px 50px; background-color: #ffffff;">
              {{ mostrar_info('boton_Separar_Cita') }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    @yield('content')
    <br>
  <footer>
    <div class="container text-center" style="color: #ffffff;">
      <div class="row">
        <div class="col-md-3 redes-sociales">
          <h4>Redes Sociales:</h4>
          <!-- <a href="https://www.facebook.com/Miprimierdiente/?locale=es_LA"><i class="fa-brands fa-facebook" style="color: #fafafa;"></i></a> -->
          <!-- <a href="https://www.youtube.com/@centroodontologicomiprimer9212"><i class="fa-brands fa-youtube" style="color: #fafafa;"></i></a> -->
          
          @if(mostrar_info('redes_sociales_youtube') != "")
            <a href="{{ mostrar_info('redes_sociales_youtube') }}"><i class="{{ mostrar_icon('redes_sociales_youtube') }}" style="color: #fafafa;"></i></a>
          @endif
          @if(mostrar_info('redes_sociales_facebook') != "")
            <a href="{{ mostrar_info('redes_sociales_facebook') }}"><i class="{{ mostrar_icon('redes_sociales_facebook') }}" style="color: #fafafa;"></i></a>
          @endif
          @if(mostrar_info('redes_sociales_instagram') != "")
            <a href="{{ mostrar_info('redes_sociales_instagram') }}"><i class="{{ mostrar_icon('redes_sociales_instagram') }}" style="color: #fafafa;"></i></a>
          @endif
        </div>
        
        <div class="col-md-6 icon-i">
          <h4>Ubicacion:</h4>
          @if(mostrar_info('direccion') != "")
          <i class="{{mostrar_icon('direccion')}}" style="color: #fafafa;"></i> {{mostrar_info('direccion')}}
          @endif
        </div>
        <div class="col-md-3 icon-i">
          <h4>Contactanos:</h4>
          @if(mostrar_info('numero_de_telefono_1') !="")
          <i class="{{mostrar_icon('numero_de_telefono_1')}}" style="color: #fafafa;"> {{mostrar_info('numero_de_telefono_1')}}</i><br>
          @endif
          
          @if(mostrar_info('numero_de_telefono_2') !="")
          <i class="{{mostrar_icon('numero_de_telefono_2')}}" style="color: #fafafa;"> {{mostrar_info('numero_de_telefono_2')}}</i>
          @endif
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    
  <script src="https://kit.fontawesome.com/33d8d8f590.js" crossorigin="anonymous"></script>
</body>

</html>