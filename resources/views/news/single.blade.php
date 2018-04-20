@extends('layouts.app')

@section('slider')
  <div class="container pb50">
           <div class="row">
               <div class="col-md-9 mb40">
                   <article>
                     @foreach ($post->image as $image)
                       <img src="{{Storage::disk('public')->url($image->name)}}" alt="" class='img-fluid mb30'>
                     @endforeach
                     {{-- <img src="{{Storage::disk('public')->url($post->$image->name)}}" alt=""  class='img-fluid mb30'> --}}

{{-- <img src='images/bg1.jpg' alt='' class='img-fluid mb30'> --}}

                       <div class="post-content">

                           <h3>{{$post->title}}</h3>

                           <ul class="post-meta list-inline">
                               <li class="list-inline-item">
                                   <i class="fa fa-user-circle-o"></i> <a href="#">{{$post->created_at}}</a>
                               </li>

                           </ul>
                           <div class="card">
                             <div class="card-body">
                              <?php echo $post->content ?>

                             </div>
                           </div>



                           <hr class="mb40">


                       </div>
                   </article><!-- post article-->


               </div>
               <div class="col-md-3 mb40">
                   <div class="mb40">
                       <form>
                           <div class="input-group">
                               <input type="text" class="form-control" placeholder="Buscar..." aria-describedby="basic-addon2">
                               <button class="input-group-addon" id="basic-addon2"><i class="ti-search"></i></button>
                           </div>
                       </form>
                   </div><!--/col-->
                   <div class="mb40">
                       <h4 class="sidebar-title">Categories</h4>
                       <ul class="list-unstyled categories">
                           <li><a href="#">Rent</a></li>

                           <li><a href="#">Top Rating</a></li>
                           <li><a href="#">Trending</a></li>
                           <li><a href="#">Newest Properties</a></li>
                       </ul>
                   </div><!--/col-->
                   <div>
                       <h4 class="sidebar-title">Ultimas Noticias</h4>
                       <ul class="list-unstyled">
                           <li class="media">
                               <img class="d-flex mr-3 img-fluid" width="64" src="images/img1.jpg" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0 mb-1"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                   April 05, 2017
                               </div>
                           </li>
                           <li class="media my-4">
                               <img class="d-flex mr-3 img-fluid" width="64" src="images/img2.jpg" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0 mb-1"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                   Jan 05, 2017
                               </div>
                           </li>
                           <li class="media">
                               <img class="d-flex mr-3 img-fluid" width="64" src="images/img3.jpg" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0 mb-1"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                   March 15, 2017
                               </div>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
@endsection
