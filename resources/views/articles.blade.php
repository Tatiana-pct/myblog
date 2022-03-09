@extends('base')

@section('content')
   <div class="jumbotron">
       <h1 class="display-3 text-center">Articles</h1>
       <div class="row">
           <div class="col-10">
               <div class="article row justify-content-center">
                   @foreach($articles as $article)
                       <div class="col-md-6">
                           <div class="card-body">
                               <div class="card my-3"></div>
                               <h5 class="card-title">{{$article->title}}</h5>
                               <p class="card-text">{{$article->subtitle}}</p>

                               <span class="badge rounded-pill bg-primary mb-2">{{$article->category->label}}</span>
                               <br>
                               <a href="{{route('article', $article->slug)}}" class="btn btn-primary">
                                   Lire la suite...
                                   <i class="fas fa-arrow-right "></i>
                               </a>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>
           <div class="col-2 pt-3">
               @foreach( $categories as $category)
                   <div class="form-group">
                       <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="{{$category->id}}"/>
                           <label class="custom-control-label" for="{{$category->id}}">
                               <i class="fas fa-{{$category->icon}}"></i>
                               {{$category->label}}
                           </label>
                       </div>

                   </div>
               @endforeach
           </div>
       </div>
       <div class="d-flex justify-content-center mt-5">
         {{$articles->links('vendor.pagination.custom')}}
       </div>
   </div>

@endsection
