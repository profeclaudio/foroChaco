@extends('layouts.app')

@section('slider')
  <div class="page-titles-img title-space-lg parallax-overlay bg-parallax" data-jarallax='{"speed": 0.4}' style='background-image: url("images/bg9.jpg");background-position:top center;'>
     <div class="container">
         <div class="row">
             <div class=" col-md-12">
                 <h1 class="text-uppercase">Contactenos</h1>

             </div>
         </div>
     </div>
 </div><!--page title end-->
 <div class="container pt90 pb50">
     <div class="row">
         <div class="col-md-6 mb40">

             <h4 class="text-uppercase">Dirección</h4>
             <p>
                  <br>
             </p>
             <br>
             <h4 class="text-uppercase">Horario</h4>
             <p>
                </p>
             <br>
             <h4 class="text-uppercase">Email</h4>
             <p>
                 <a href="#">contacto@gmail.com</a></p>
             <br>
             <h4 class="text-uppercase">Teléfono</h4>
             <p>
                 <a href="#">+54387</a></p>
             <br>
             <h4 class="text-uppercase">Redes Sociales</h4>
             <div class="clearfix pt10">
                 <a href="#" class="social-icon si-border si-facebook">
                     <i class="fa fa-facebook"></i>
                     <i class="fa fa-facebook"></i>
                 </a>
                 <a href="#" class="social-icon si-border si-twitter">
                     <i class="fa fa-twitter"></i>
                     <i class="fa fa-twitter"></i>
                 </a>
                 <a href="#" class="social-icon si-border si-g-plus">
                     <i class="fa fa-google-plus"></i>
                     <i class="fa fa-google-plus"></i>
                 </a>
                 <a href="#" class="social-icon si-border si-skype">
                     <i class="fa fa-skype"></i>
                     <i class="fa fa-skype"></i>
                 </a>
                 <a href="#" class="social-icon si-border si-linkedin">
                     <i class="fa fa-linkedin"></i>
                     <i class="fa fa-linkedin"></i>
                 </a>
             </div>
         </div>
         <div class="col-md-6 mb40">
             <h2>Escribenos</h2>
             <p>
                 Te invitamos a completar el formulario que se encuentra abajo para que pronto nos pongas en contacto contigo.
             </p>
            <div class="smart-wrap">
     <div class="smart-forms smart-container">


         <form method="post" action="smart-form/contact/php/smartprocess.php" id="smart-form">
             <div class="form-body">

                 <div class="section">
                     <label class="field prepend-icon">
                         <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Ingresa tu nombre">
                         <span class="field-icon"><i class="fa fa-user"></i></span>
                     </label>
                 </div><!-- end section -->

                 <div class="section">
                     <label class="field prepend-icon">
                         <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Correo electrónico">
                         <span class="field-icon"><i class="fa fa-envelope"></i></span>
                     </label>
                 </div><!-- end section -->

                 <div class="section">
                     <label class="field prepend-icon">
                         <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Ingrese asunto">
                         <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                     </label>
                 </div><!-- end section -->

                 <div class="section">
                     <label class="field prepend-icon">
                         <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Mensaje"></textarea>
                         <span class="field-icon"><i class="fa fa-comments"></i></span>
                         <span class="input-hint"> <strong>tip:</strong> Por favor ingrese entren 80 - 300 caracteres.</span>
                     </label>
                 </div><!-- end section -->

                 <div class="section">
                     <div class="smart-widget sm-left sml-120">
                         <label class="field">
                             <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                         </label>
                         <label class="button captcode">
                             <img src="smart-form/contact/php/captcha/captcha.php?<?php echo time();?>" id="captchax" alt="captcha">
                             <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                         </label>
                     </div><!-- end .smart-widget section -->
                 </div><!-- end section -->

                <div class="result"></div><!-- end .result  section -->

             </div><!-- end .form-body section -->
             <div class="form-footer">
                 <button type="submit" data-btntext-sending="Sending..." class="button btn btn-primary">Enviar</button>
                 <button type="reset" class="button"> Limpiar </button>
             </div><!-- end .form-footer section -->
         </form>
     </div><!-- end .smart-forms section -->
 </div><!-- end .smart-wrap section -->
         </div>
     </div>
 </div>
@endsection
