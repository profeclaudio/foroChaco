@extends('layouts.app')

@section('slider')
  <div class="footer footer-dark">
  <div class="page-titles-img title-space-lg bg-parallax parallax-overlay mb80" style='background-image: url("images/quienes.jpg")' >
             <div class="container">
                 <div class="row">
                     <div class=" col-md-12">
                       <br><br>
                         <h1 class='text-uppercase'>Quienes somos</h1>
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
                                Gran Chaco Americano
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                          <p>En el III Encuentro Mundial del Gran Chaco Americano, realizado en junio de 2016 en Villamontes, Bolivia, se
                            inició un proceso de articulación trinacional de autoridades públicas y legisladores chaqueños, que luego de
                            3 reuniones de coordinación y planificación (Yacuiba, Salta y Filadelfia) dio lugar a la creación del Foro
                            de Representantes del Chaco, un mecanismo inédito que contribuye a la gobernabilidad transfronteriza de la región.
                          </p>
                          <p>
                          El Foro de Representantes, es un espacio creado para facilitar la gobernanza transfronteriza de la región del Gran Chaco Americano, está conformado por autoridades representativas del nivel sub nacional y local de Argentina, Bolivia y Paraguay. Su creación fue motivada por la creciente constatación de que los complejos desafíos, e igualmente diversas  oportunidades para la región, solo pueden ser encaradas de manera integral, pues temas como los impactos del Cambio Climático o el deterioro ambiental de la cuenca del Pilcomayo rebasan las fronteras e impactan por igual en las poblaciones ribereñas de los tres países.
                        </p>

                         </div>
                    </div>
                </div>

                <div class="card mb10">
                    <div class="card-header accordion-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                               Un Foro de alto valor para la región
                            </a>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                          <p>Una serie de características, ligadas a la visión y naturaleza que el Foro fue asumiendo
                            en su proceso de constitución, hacen de él un espacio de alto valor para la región, destacándose entre otras, las siguientes:
                          </p>
                          <ul>
                            <li>Es un Espacio Inédito para la gestión transfronteriza de un ecosistema de alta importancia como lo es el Gran Chaco Americano;</li>
                            <li>Facilita la Gobernanza al acercar al ciudadano los espacios de decisión pública a nivel local, nacional y regional;</li>
                            <li>Logra Legitimidad a través de mecanismos participativos de interacción con organizaciones sociales, comunidades e instituciones de la sociedad civil;</li>
                            <li>Busca la Complementariedad entre los diferentes actores de la región con la finalidad de movilizar esfuerzos compartidos para la solución de problemas comunes;</li>
                            <li>En base a acuerdos colaborativos logra el Uso eficiente de Recursos en sus intervenciones en favor de la comunidad, bajo el principio de “mucho con poco”;</li>
                          </ul>
                        </div>
                    </div>
                </div>

            </div>
           </div>

          </div>
       </div>
@endsection
