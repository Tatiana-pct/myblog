@extends('base')

@section('content')
    <div class="container">
        <h1 class="text-center my-5"> Poster un nouvel article </h1>
        <form method="POST" action="{{route('articles.store')}}">
            @csrf
            {{--title--}}
            <div class="col-12">
                <div class="form-group">
                    <label>Titre :</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Titre de votre article">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                </div>
            </div>
            {{-- endtitle--}}

            {{--subtitle--}}
            <div class="col-12">
                <div class="form-group mt-4">
                    <label>Sous-titre :</label>
                    <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" "placeholder="sous titre de votre article">
                    <small class="form-text text-muted"> Décrivez le contenue de votre article, le theme traité</small>
                    @error('subtitle')
                    <br>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            {{--end title--}}

            {{-- select--}}
            <div class="col-12">
                <div class="form-group">
                    <label for="category"> Categories</label>
                    <select name="category"class="form-control">
                        @foreach($categories  as $category)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{--end select--}}

            {{--text area--}}
            <div class="col-12">
                <div class="form-group mt-4">
                    <label>contenu :</label>
                    <textarea id="tinymce-editor" name="content" class="form-control w-100 @error('content') is-invalid @enderror"  ></textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <script>
                    tinymce.init({
                        selector: '#tinymce-editor'
                    });
                </script>

            </div>
            {{--end text area--}}

            {{--submit button--}}
            <div class="d-flex justify-content-center mb-5 mt-4">
                <button type="submit" class="btn btn-primary"> Poster l'article</button>
            </div>
            {{-- end submit button--}}
        </form>

    </div>
@endsection
