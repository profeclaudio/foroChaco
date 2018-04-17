@extends('layouts.app')

@section('slider')
  <div class="footer footer-dark">
  <div class="page-titles-img title-space-lg bg-parallax parallax-overlay mb80" style='background-image: url("images/autoridades.jpg")' >
             <div class="container">
                 <div class="row">
                     <div class=" col-md-12">
                       <br><br>
                         <h1 class='text-uppercase'>Autoridades</h1>
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
                              Argentina:
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                          <ul>
                            <li>Presidente: Senador Mashur Lapad</li>
                            <li>  Secretario: Guillermo Lopez Mirau.</li>
                          </ul>

                         </div>
                    </div>
                </div>

                <div class="card mb10">
                    <div class="card-header accordion-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                               Bolivia:
                            </a>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                          <ul>
                            <li>Pablo Canedo Daroca, Encargado de Negocio en la Embajada de EEUU.</li>
                            <li>Jose Quecaña, Ejecutivo Regional Gobierno Autónomo del Gran Chaco</li>
                            <li>   Robert Ruiz, Jefe Regional de Villa Montes.</li>
                          </ul>

                        </div>
                    </div>
                </div>

                <div class="card mb10">
                    <div class="card-header accordion-header" role="tab" id="headingThree">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Paraguay:
                            </a>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body">
                          <ul>
                            <li>Edwin Pauls, Gobernador del Departamento de Boquerón.</li>
                          </ul>                        
                        </div>
                    </div>
                </div>

            </div>
           </div>

          </div>
       </div>
@endsection
