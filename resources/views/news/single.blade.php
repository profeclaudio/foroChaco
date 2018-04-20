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
                       <h4 class="sidebar-title">Categorias</h4>
                       <ul class="list-unstyled categories">
                         @forelse ($categories as $category)
                           <li><a href="#">{{$category->description}}</a></li>
                         @empty

                         @endforelse

                       </ul>
                   </div><!--/col-->
                   <div>
                       <h4 class="sidebar-title">Ultimas Noticias</h4>
                       <ul class="list-unstyled">
                         @forelse ($publications as $publication)
                           <li class="media">
                             @foreach ($publication->image as $image)
                               <img src="{{Storage::disk('public')->url($image->name)}}" alt="Generic placeholder image" class="d-flex mr-3 img-fluid" width="64">
                             @endforeach
                               <div class="media-body">
                                   <h5 class="mt-0 mb-1"><a href="#">{{substr($publication->title,0,25)."..."}}</a></h5>
                                   {{$publication->created_at}}
                               </div>
                           </li>
                         @empty

                         @endforelse

                      
                       </ul>
                   </div>
               </div>
           </div>
       </div>
@endsection
