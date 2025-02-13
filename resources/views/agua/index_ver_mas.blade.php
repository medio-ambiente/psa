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
                <span class="breadcrumb_"> | Agua y Saneamiento| </span>
                <span class="breadcrumb_ agua">Más Información</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoAguaSaneamiento.png")}}" width="100%" height=""  alt="" />
                </div>
                </div>
            <div class="col-4">
              <div class="row ">
            <div class="col-12 date-time-title">
                    <span>Bogotá hoy</span>
                    </div>
                    </div>

                <div class="row">
                    <div class="col-12 date-time" id="reloj">
                        Fecha y hora
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

            <a href="https://drive.google.com/file/d/1wIbvN4xKkDNTMttbx_ylvJMPQs5xbZZr/view">
            <div height="355">
                <img src="images/agua/BannerAgua.png" alt="" width="100%"/>
                </div>
                 </a>

                <div class="contenidoSecAmb centradoDiv">
                    <p align="justify">La línea de calidad de agua y saneamiento básico comprende el conjunto de acciones técnicas y sociales que buscan alcanzar
                      niveles crecientes de salubridad, en los diferentes establecimientos identificados y que son objeto de intervención
                      de forma regular o intensificada. Comprende el manejo sanitario del agua para consumo, las aguas residuales y excretas,
                      los residuos sólidos y el comportamiento higiénico que reduce los riesgos para la salud y previene la contaminación.
                      Tiene por finalidad el control de factores de riesgo, promoción y mejoramiento de condiciones de vida de la población
                      tanto en el área urbana y rural.</p>

                    <h2 class="colorAgua mt 40"><b>Objetivo General</b></h2>
                        <p style="text-align: justify;">Disminuir los factores de riesgo relacionados con el abastecimiento de agua, manejo de residuos sólidos y disposición de vertimientos mediante la identificación e intervención de condiciones higiénico-sanitarias en los diferentes espacios
                      abordados por la línea y que afectan la salud de los habitantes y visitantes de la Ciudad, para potencializar factores
                      protectores, promover entornos ambientalmente saludables y garantizar la seguridad sanitaria.</br>
                    </p>
                    <h2 class="colorAgua mt 40"><b>Objetivos Específicos</b></h2>
                        <p>Desarrollar estrategias que faciliten el acceso y manejo del agua apta para consumo humano para todos los habitantes del Distrito Capital, incluidos los habitantes rurales y de asentamientos informales.</br>

                        <p class="colorIndicadores">Fortalecer los instrumentos existentes que buscan garantizar la calidad del agua apta para consumo humano, su sostenibilidad en el tiempo y la promoción de buenas prácticas de uso, manejo y disposición del agua en el Distrito Capital.</br>
                          <p class="colorIndicadores">Promoción de buenas prácticas de uso, manejo y disposición del agua en el Distrito Capital.</p>
                          <p class="colorIndicadores">Promover la gestión integral del recurso hídrico en Bogotá D.C. y la protección de la funcionalidad de los ecosistemas estratégicos distritales y regionales, para garantizar la disponibilidad de agua para consumo humano.</p>
                        <div align="justify">
                        <p class="colorIndicadores">Fomentar el uso racional y seguro del agua para actividades recreativas.</br>
                        <p class="colorIndicadores">Optimizar la gestión integral de los residuos sólidos en el Distrito Capital.</br>
                        <p class="colorIndicadores">Desarrollar estrategias orientadas a mejorar las condiciones higiénicas y sanitarias en viviendas y establecimientos abiertos al público.</br>
                        <p class="colorIndicadores">Fortalecer los procesos de gestión de la salud ambiental para la calidad del agua y el saneamiento básico en Bogotá D.C.</br>
                      </p>
                    <h2 class="colorAgua mt 40"><b>Ejes Tematicos</b></h2>

                    <p>
                    <p align="justify">Abastecimiento de agua potable en condiciones apropiadas.</br>
                                      Control de eventos mórbidos y mortales asociados a la calidad del agua y saneamiento básico. </br>
                                      Gestión ambiental del recurso hídrico y los servicios hidrológicos. </br>
                                      Prevención y control de riegos en agua para uso recreativo. </br>
                                      Manejo integral de residuos sólidos. </br>
                                      Mejoramiento de condiciones higiénicas y sanitarias en viviendas y establecimientos abiertos al público. </br>
                                      Gestión de la salud ambiental para la calidad del agua y el saneamiento básico.</br>
                                    </p>
                  <div>
                    <p class="verMas colorAgua">
                        <a href="{{asset("agua_saneamiento_basico")}}">Volver</a>
                    </p>
               </div>
                    <h2 class="colorAgua mt40"></h2>
                </div
            <div class="row">
                <hr class="lineaAgua mt80" style="width: 100%;" />
            </div>
            </div>

           <!--  <div class="row"> -->
             <div class="logos coloragua bold140p">
                <div class="centrado colorAgua">
                    <p class="colorAgua">Documentos e investigaciones</p>
                    <a href="{{asset("agua_saneamiento_documentos")}}">
                    <img src="images/agua/aguaDOCUMENTOS.png" width="85" height="63" alt="Agua docs"/>
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Mapas</p>
                    <a href="{{asset("agua_saneamiento_mapas")}}">
                    <img src="images/agua/IMG_AGUA_MAPA.jpg" width="85" height="63" alt="Agua mapa" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Normatividad</p>
                    <a href="{{asset("agua_saneamiento_normatividad")}}">
                    <img src="images/agua/IMG_AGUA_NORMATIVIDAD.png" width="85" height="63" alt="Agua título" />
                </div>
                <div class="centrado colorAgua">
                    <p class="colorAgua">Indicadores</p>
                    <a href="{{asset("agua_saneamiento_indicadores")}}">
                    <img src="images/agua/IMG_AGUA_TITULO.jpg" width="85" height="63" alt="Agua título" />
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
