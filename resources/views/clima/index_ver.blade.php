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
                <span class="breadcrumb_"> | Cambio Climático| </span>
                <span class="breadcrumb_ cambioC">Más Informaación</span>
                <div width="300px">
                    <img src="{{asset("images/indicators/LogoCambioClimatico.png")}}" width="100%" height=""  alt="" />
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

            <a href="http://saludata.saludcapital.gov.co/osb/index.php/2019/07/01/protejase-del-sol-lo-que-debe-saber-sobre-la-radiacion-solar/">
            <div height="355">
                <img src="images/cambioClimatico/BannerCClima.png" alt="" width="100%"/>
                </div>
                 </a>
             </div>
            <div class="row" style="text-align:justify;">

                <div class="contenidoSecAmb centradoDiv">

                    <h1 align="right" class="centrado colorCambioC mt20">&nbsp;</h1>

                    <h2 class="seccion fondoCambioC sinSaltoLinea">Cambio climático</h2>

                    <p align="justify">A nivel distrital el Decreto 596 de 2011 de la Alcaldía Mayor de Bogotá, por el cual se adopta la Política Distrital
                    de Salud Ambiental para Bogotá 2011-2023, define como una de sus líneas de intervención las problemáticas asociadas
                    al cambio climático y salud. Así mismo el Decreto 579 de 2015 y el Acuerdo 001 de 2018 de la Alcaldía Mayor de Bogotá,
                    adopta el Plan Distrital de Gestión de Riesgos y Cambio Climático para Bogotá D.C., 2018- 2030 que incorpora dentro
                    de sus objetivos estrategias de adaptación en salud frente al cambio climático. De acuerdo con lo anterior, la Secretaria
                    Distrital de Salud plantea como objetivo general para este tema definir y desarrollar procesos articulados de respuesta
                    interinstitucional e intersectorial en salud ambiental, para la mitigación y adaptación a los fenómenos asociados
                    a la variabilidad y cambio climático que se presentan en Bogotá D.C.</p>

                    <h2 class="colorcambioclimatico bold140p"><b>Índice de Radiación UV</b></h2>

                    <div align="justify">
                    <p class="colorIndicadores">La radiación solar es la energía emitida por el sol, que se difunde en todas las direcciones a través del espacio
                        mediante ondas electromagnéticas, en algunas ocasiones aumenta en gran medida generando algunas implicaciones en
                        salud, por esta razón se implementó el índice de radiación ultravioleta (IUV) el cual muestra la intensidad de
                        la radiación solar ultravioleta incidente sobre la superficie de la tierra que puede causar afecciones en la piel
                        humana. Por su parte, el pronóstico de radiación ultravioleta UV expone la intensidad de la radiación solar ultravioleta UV-B en una escala del 1 al 11+ (1) como se muestra a continuación:
                        <a href="http://saludata.saludcapital.gov.co/osb/?s=IUV" class="colorcambioclimatico"> Ver Infografía
                            <img src="images/cambioClimatico/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/></p>
                            {{-- Ver más --}}
                        </a>

                    </div>
                    <br></br>
                    <h2 class="colorcambioclimatico bold140p"><b>Índice de Vulnerabilidad</b></h2>
                    <p align="justify">
                        <p class="colorIndicadores">
                             Según el documento del IDEAM &ldquo;Análisis de vulnerabilidad y riesgo por cambio climático en Colombia&rdquo;,
                            Bogotá es considerada como una de las ciudades con mayor vulnerabilidad a los efectos del cambio climático debido
                            a las demandas hídricas, la seguridad alimentaria, la gestión de los eventos meteorológicos, la cobertura vegetal
                            urbana y la infraestructura (2). Por esta razón, la SDS realiza el análisis del índice de vulnerabilidad al cambio
                            climático el cual evalúa la sensibilidad humana frente al riesgo de exposición al cambio climático y a fenómenos
                            extremos y a su vez la capacidad de la ciudad para adaptarse a los impactos potenciales del cambio climático o
                            su aprovechamiento (3).
                        <a href="https://drive.google.com/file/d/1qQLcL0pdxRg6FWcKoUIH7WPqhE5Ndog-/view" class="colorcambioclimatico">Ver Infografía
                            <img src="images/cambioClimatico/vermas.png" width="20" height="20" alt="ver más" style="margin-top: -8px;"/>
                        </p>
                        </a>

                        <p align="right" class="colorCambioC">
                    <a href="{{asset("cambio_climatico")}} " class="colorcambioclimatico">Volver</a></p>

                    <p align="justify">
                    <div class="row">
                      <hr class="lineaCambioC mt 80" style="width: 100%;" /></hr>
                  </div>
                  <div id="pie">
                    <div id="pieuno"class="colorcambioclimatico">1. Ballesteros HOB. Información técnica sobre la radiación ultravioleta, el índice uv y su pronóstico. <a href=" http://documentacion.ideam.gov.co/openbiblio/bvirtual/22454/NotatecnicaIUVPaginaWEBfinal.pdf"><u>Disponible aquí</u></a></div>
                            <div id="pieuno"class="colorcambioclimatico">2.Boletin_25.pdf [Internet]. [citado 16 de mayo de 2019]. <a href=" http://documentacion.ideam.gov.co/openbiblio/bvirtual/023738/Boletin_25.pdf"><u>Disponible aquí</u></a></div>

                            <div id="pieuno"class="colorcambioclimatico">3.CAF. Índice de vulnerabilidad y adaptación al cambio climático en la región de América Latina y el Caribe [Internet]. CAF; 2014 [citado 16 de mayo de 2019] <a href=" http://scioteca.caf.com/handle/123456789/517"><u>Disponible aquí</u></div></a>
                        </div>
            </div>
            <p align="justify"></p>
         <div class="row">
           <hr class="lineaCambioC mt 80" style="width: 100%;" /></hr>
            </div></div>
            <div class="row"><hr class="lineaCambioC mt 80" style="width: 100%;" /></hr>
            </div>
            <div class="logos colorCambioC bold140p">
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Documentos e investigaciones</p>
                    <a href="{{asset("cambio_climatico_documentos")}}">
                    <img src="images/cambioClimatico/cambioDOCUMENTOS.jpg" width="85" height="63" alt="Cambio climático docs" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Mapas</p>
                    <a href="{{asset("cambio_climatico_mapas")}}">
                    <img src="images/cambioClimatico/cambioMAPA.jpg" width="85" height="63" alt="Cambio climático mapa" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Normatividad</p>
                    <a href="{{asset("cambio_climatico_normatividad")}}">
                    <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" alt="Cambio climático normas" />
                    </a>
                </div>
                <div class="centrado colorCambioC">
                    <p class="colorCambioC">Indicadores</p>
                    <a href="{{asset("cambio_climatico_indicadores")}}">
                    <img src="images/cambioClimatico/cambioINDICADORES.jpg" width="85" height="63" alt="Cambio climático título" />
                    </a>
                    </p>
                    <p>&nbsp;</p>
                </div>
            </div>




@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
