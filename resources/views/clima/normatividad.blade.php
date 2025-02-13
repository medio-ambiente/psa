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
                <span class="breadcrumb_ cambioC">Normatividad</span>
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
                    <br></br>

                    <h2 align="left" class="colorCambioC">
                    <img src="images/cambioClimatico/cambioNORMATIVIDAD.jpg" width="85" height="63" align="absbottom"/><b>Normatividad</b></h2>
                    <p>
                        <h2 align="center" class="colorCambioC" data-toggle="collapse" href="#collapseTransversal" role="button" aria-expanded="false" aria-controls="collapseTransversal" style="cursor: pointer; ">
                            Regulación Transversal
                        </h2>
                    </p>
                    <div class="collapse show" id="collapseTransversal">
                        <div align="center">
                          <table width="222" border="0">
                            <tbody>
                              <tr width="100%">
                                <td width="182">
                                  <div align="center" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1lPFKm6jVqnnWCjG03CMpcboeWHPcv1_P " class="colorIndicadores">Conpes 3550 de 2008</a>
                                    </div>
                                  <div align="center" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=17b0wng_kRi58UqlSEQUrRwoPxc9JkdFJ" class="colorIndicadores">Acuerdo 391 de 2009</a>
                                    </div>
                                  <div align="center" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1wev53GBJYd-ikkUO8avECrQKx_Hw3_YX" class="colorIndicadores">Conpes 3700 de 2011</a>
                                    </div>
                                  <div align="center" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1znstvNoa3HG3WiUCz-9ldxddDq94WCev" class="colorIndicadores">Decreto 596 de 2011</a>
                                    </div>
                                  <div align="center" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1YkTvYQsnab6T8JKnfExvVwb0ymyuNxrK" class="colorIndicadores">Decreto 566 de 2014</a>
                                    </div>
                                  <div align="center" class="colorIndicadores">
                                    <a href="https://drive.google.com/open?id=1k5xaLtDV1yUJ2O7ZIEtK1Q_-f1xl_3J5" class="colorIndicadores">Decreto 579 de 2015</a>
                                    </div>
                                </td>
                                </tr>
                              </tbody>
                            </table>
                      </div>
                    </div>

                    <br>
                    <p>
                        <h2 align="center"class="colorCambioC" data-toggle="collapse" href="#collapseEspecifico" role="button" aria-expanded="false" aria-controls="collapseEspecifico" style="cursor: pointer;">
                            Regulación Especifica
                        </h2>
                    </p>
                    <div class="collapse show" id="collapseEspecifico">
                        <div align="center">
                          <table width="43%" border="0">
                            <tbody>
                              <tr width="100%">
                                <td width="49%">
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=18B3xvf0Y3EkkdMiw4WDQaJ5QzWF5mey7" class="colorIndicadores">Ley 99 de 1993</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=14Co7TLz2pY8GaoFrveBkpSHvrcddXOGW" class="colorIndicadores">Ley 164 de 1994</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1E_QoUsYp-BLYc1JXOrSWYVPsbNehRr-_" class="colorIndicadores">Ley 629 de 2000</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1R1I4ujPg2CwQP4l3VBle6NH1ZUef3cPw" class="colorIndicadores">Conpes 3242 de 2003</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1L_2drmXAOLFNZ-wQc21qmzeggojVq7CL" class="colorIndicadores">Resolución 1652 de 2007</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1wcQJ7_szXMMzDORoiu62s5kDw8d_j08U" class="colorIndicadores">Resolución 551 de 2009</a>
                                    </div>
                                </td>
                                <td width="51%">
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1glORizFvG73PXPsRulcVtMuykOUPMi-V" class="colorIndicadores">Resolución 552 de 2009</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1EXultRbYGzJcJHFnSXXHhKINgVb8wbKA" class="colorIndicadores">Acuerdo 367 de 2009</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1AAQ62rXAKaVpBxEV5BNISOVwUSsQaHJj" class="colorIndicadores">Acuerdo 372 de 2009</a>
                                    </div>
                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1iy8jD54Odqc6Lknbz-hbq9R-pkWpS-Wx" class="colorIndicadores">Acuerdo 418 de 2009</a>
                                    </div>

                                  <div align="center">
                                    <a href="https://drive.google.com/open?id=1lJqCCndFGGQF97qLGlEf2DVuWPr8PImf" class="colorIndicadores">Resolución 2734 de 2010</a>
                                    </div>
                                </td>
                                </tr>
                              </tbody>
                            </table>
                      </div>
                    </div>
                </div>

            </div>

          <div class="row">
                <hr class="lineaCambioC mt80" style="width: 100%;" />
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

        </div>
        </div>

@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
