@extends('layout')
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/indicator.css")}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/secAmbiente.css")}}" />
@endsection
@section('contenido')


<div class="wrapper">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-8">
            <br clear="left"><img src="images/aire/iconoHome.png" width="42" height="38" alt="Ir al home" />
                <span class="breadcrumb_"> |Hábitat, Espacio Público y Movilidad| </span>
                <span class="breadcrumb_ espacio">Más Informacón</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoEsoacioyMovilidad.png")}}" width="100%" height=""  alt="" />
                </div>
            </div>

            <div class="col-4">
                <div class="row">
                    <div class="col-12 date-time-title">
                    <span>Bogotá hoy</span>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-12 date-time"id="reloj">
                        <div class="col-12 date-time" id="reloj">
                        Fecha y hora
                    </div>
                </div>
              </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <a href="http://www.ambientebogota.gov.co/calidad-del-aire">
                            <img src="{{asset("images/news/calidadaire.svg")}}" alt="calidad aire" class="img-calidad-aire">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
                            <img src="{{asset("images/news/indiceuv.svg")}}" alt="indice uv" class="img-indice-uv">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="http://www.ideam.gov.co/">
                            <img  src="{{asset("images/news/climaactual.svg")}}" alt="clima actual" class="img-clima-actual">
                        </a>
                    </div>
                </div>
            </div>

    </div>

        <div class="row">
                <a href="https://twitter.com/AmbienteBogota"  class="redes pl-1 pt-2" style="margin-top: 90px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/Twitter.svg")}}" alt="" style="height: 80%">
                </a>
                <a href="https://www.facebook.com/AmbienteBogota/"class="redes pl-2 pt-2" style="margin-top: 150px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/IconoFacebook.svg")}}" alt="" style="height: 95%">
                </a>
                <a href="https://www.youtube.com/channel/UCjboPXY4C2F3rnqP7k4_9cQ"class="redes pl-1 pt-2" style="margin-top: 210px; margin-left:0px;">
                    <img  src="{{asset("images/redessociales/IconoYouTube.svg")}}" alt="" style="height: 70%">
                </a>
            <a href="http://autorregulacion.saludcapital.gov.co/salonesbelleza">
            <div height="355">
                <img src="images/espacio/bannerEspacioPublico3.png" alt="Slider aire" width="1058px" height="309px" alt="Second slide"/>
            </div>
            </a>
        </div>

<br></br>
            <div class="row" style="text-align:justify;">
                <div class="contenidoSecAmb centradoDiv">

                    <h2 class="colorEspacio bold140p">Objetivo General</h2>
                    <p>Contribuir al mejoramiento de las condiciones de calidad de vida y salud de las personas residentes en el Distrito Capital,
                        a través de la adecuada gestión y uso del espacio físico y el entorno, la prevención de la enfermedad y la promoción
                        de la salud frente a problemáticas ambientales propias del hábitat, el espacio público y la movilidad.</p>

                    <h2 class="colorEspacio bold140p">Ejes Temáticos</h2>
                    <p class="colorEspacio">
                        <strong>Hábitat</strong>
                    </p>

                        <p class="colorIndicadores">Mejoramiento de las condiciones de habitabilidad para una vivienda digna y segura.</p>

                    <p class="colorEspacio">
                        <strong>Espacio Público</strong>
                    </p>

                        <p class="colorIndicadores">Generación, construcción, mantenimiento y optimización del espacio público.</p>
                        <p class="colorIndicadores">Promoción de cultura ciudadana para el buen uso del espacio público y mejoramiento ambiental del entorno.</p>
                        <p class="colorIndicadores">Promoción del uso de espacios para la práctica de la actividad física, deportiva, recreativa y cultural como factor protector de la salud, potenciador del desarrollo humano.</p>

                    <p class="colorEspacio">
                        <strong>Movilidad</strong>
                    </p>

                        <p class="colorIndicadores">Fortalecimiento de la infraestructura, formación, divulgación de la información, control y regulación para la movilidad segura, accesible y activa</p>



                    <p class="verMas colorAgua">
                        <a href="{{asset("espacio_movilidad")}}">Volver</a>
                    </p>
                </div>
            </div>

            <div class="row">
                <hr class="lineaEspacio mt80" style="width: 100%;" />
            </div>

            <div class="logos colorEspacio bold140p">
                <div class="centrado colorEspacio">
                    <p class="colorEspacio">Documentos e Investigaciones</p>
                    <img src="images/espacio/espacioDOCUMENTOS.png" width="85" height="63" alt="Espacio y movilidad docs"
                    />
                </div>
                <div class="centrado colorEspacio">
                    <p class="colorEspacio">Mapas</p>
                    <img src="images/espacio/espacioMAPA.jpg" width="85" height="63" alt="Espacio y movilidad mapa" />
                </div>
                <div class="centrado colorEspacio">
                    <p class="colorEspacio">Normatividad</p>
                    <img src="images/espacio/espacioNORMATIVIDAD.jpg" width="85" height="63" alt="Espacio y movilidad normas"
                    />
                </div>
                <div class="centrado colorEspacio">
                    <p class="colorEspacio">Indicadores</p>
                    <img src="images/espacio/espacio1INDICADORES.jpg" width="85" height="63" alt="Espacio y movilidad título"
                    />
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
