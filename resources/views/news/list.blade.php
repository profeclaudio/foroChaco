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
                            <a href="{{route('noticia',$publication->id)}}">{{str_limit($publication->title,60)}}</a>
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
                                <p>{{substr($publication->content,3,160)."..."}}</p>
            
                            <a href="{{route('noticia',$publication->id)}}" class="btn btn-outline-secondary">Leer más</a>
                        </div>
                    </article><!--article-->
                @empty
                    
                @endforelse
            
          
            <nav aria-label="Page navigation example" class="mb70">
                <ul class="pagination pagination justify-content-end">
                    <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
  
@endsection
