@extends('layouts.app')

@section('slider')

<div class="page-titles-img title-space-lg bg-parallax parallax-overlay mb70" data-jarallax='{"speed": 0.2}' style='background-image: url("images/bg14.jpg")'>
    <div class="container">
        <div class="row">
            <div class=" col-md-8 ml-auto mr-auto">
                <h1 class='text-uppercase'>Noticias</h1>

            </div>
        </div>
    </div>
</div><!--page title end-->
<div class="container mb30">
    <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
            
                @forelse ($publications as $publication)
                    <article class="article-post mb70">
                        <a class="post-thumb mb30" href="#">
                            @foreach ($publication->image as $image)
                               <img src="{{Storage::disk('public')->url($image->name)}}" alt="" class="img-fluid">
                            @endforeach                            
                            <div class="post-overlay">
                                <span>{{str_limit($publication->title,35)}}</span>
                            </div>
                        </a><!--thumb-->
                        <div class="post-content text-center">
                            <a href="{{route('noticia',$publication->id)}}">{{$publication->title}}</a>
                                <ul class="post-meta list-inline">
                                    {{-- <li class="list-inline-item">
                                        <i class="fa fa-user-circle-o"></i> <a href="#">John Doe</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-calendar-o"></i> <a href="#">29 June 2017</a>
                                    </li> --}}
                                    {{-- <li class="list-inline-item">
                                        <i class="fa fa-tags"></i> <a href="#">Bootstrap4</a>
                                    </li> --}}
                                </ul>                                
                                <p><?php echo substr($publication->content,0,160)."..." ?></p>
                                {{-- <p>{{substr($publication->content,3,160)."..."}}</p> --}}
            
                            <a href="{{route('noticia',$publication->id)}}" class="btn btn-outline-secondary">Leer más</a>
                        </div>
                    </article><!--article-->
                @empty
                    
                @endforelse
            
            {{-- <div class="mt-2 mx-auto shop_pagination_area">
                {{$products->links('pagination::bootstrap-4')}}
            </div>     --}}
          
            <nav aria-label="Page navigation example" class="mb70">
                    {{$publications->links('pagination::bootstrap-4')}}
            </nav>
        </div>
    </div>
</div>
  
@endsection
