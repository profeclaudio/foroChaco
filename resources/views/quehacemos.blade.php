@extends('layouts.app')

@section('slider')
  <div class="footer footer-dark">
  <div class="page-titles-img title-space-lg bg-parallax parallax-overlay mb80" style='background-image: url("images/hacemos.jpg")' >
             <div class="container">
                 <div class="row">
                     <div class=" col-md-12">
                       <br><br>
                         <h1 class='text-uppercase'>Que hacemos</h1>
                     </div>
                 </div>
             </div>
              </div>
  </div><!--page title end-->
  <div class="container mb40">
          <div class="row">
               <div class="col-md-12 mb40">
               <div id="accordion" class="mb70" role="tablist" aria-multiselectable="true">
                <div class="card mb10">
                    <div class="card-header accordion-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Que hacemos
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                          <p>Desde su creación el Foro de Representantes del Chaco inició una dinámica de trabajo de impacto y colaboración entre distintas instancias públicas y organizaciones comunales y de la sociedad civil, que se plasmó en acuerdos transfronterizos para que a través de la Oficina Técnica Nacional del río Pilcomayo de Bolivia, se realice intervenciones en la cuenca del río Pilcomayo, que afectado por la colmatación perdió su continuidad, ocasionando la interrupción del ciclo de vida de las especies piscícolas y desbordes en la época de lluvias. Esta intervención técnica, producto de un acuerdo colaborativo, mitigo riesgos de inundaciones en 2016 y posibilitó la pesca artesanal a comunidades indígenas ribereñas luego de cinco años sin este factor clave de su sobrevivencia. Los cambios climáticos que está experimentando la región e intervenciones que afectan al ecosistema, hacen que este esquema de cooperación cobre valor y aporte a una mayor resiliencia frente a complejos desafíos futuros.
                          </p>
                          <p>
                            Igualmente, el Foro de Representantes del Chaco tramitó su incorporación a la Confederación Parlamentaria de las Américas (COPA) e hizo una presentación de la problemática de la región ante la XV Asamblea General con la participación de la sociedad civil chaqueña a través de Redes Chaco.
                         </p>
                         <p>
                           Asimismo, se logró la incorporación del Foro en el ZICOSUR (Zona de Integración del Centro Oeste Sudamericano) como actor representativo de la región e interlocutor válido ante este importante organismo de integración.                         </p>
                        <p>
                          Los acuerdos colaborativos desplegados por el Foro buscan:
                       </p>
                       <ul>
                         <li>Generar visiones compartidas respecto al desarrollo en general de la región, pero también en la gestión de problemas puntuales que afectan a la calidad de vida de su población. </li>
                         <li>Establecer mecanismos permanentes de interacción con la ciudadanía a fin de canalizar participativamente demandas e inquietudes. </li>
                         <li>Facilitar soluciones oportunas y consistentes, en el marco de sus posibilidades y competencias, a las demandas identificadas.</li>
                         <li>Facilitar políticas públicas de carácter local, nacional y trinacional que favorezcan el desarrollo sostenible de la región.</li>
                         <li>Acercar a la región innovaciones tecnológicas y sociales que dinamicen y fomenten actividades productivas y sociales en beneficio del desarrollo sostenible y los sectores sociales más vulnerables de la región.</li>
                       </ul>

                         </div>
                    </div>
                </div>

          

            </div>
           </div>

          </div>
       </div>
@endsection
