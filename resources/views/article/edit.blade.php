@extends('base')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Editer cet article article</h1>
        <form action="{{route('articles.update',$article->id)}}" method="POST">
            @method("PUT")
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" value="{{$article->title}}" class="form-control @error('title')is-invalid @enderror" name="title" placeholder="Titre de votre article">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                        
                    @enderror
                </div>

            </div>

        <div class="col-12">
                        <div class="form-group">
                            <label for="">Sous-titre</label>
                            <input type="text" class="form-control"  value="{{$article->subtitle}}" @error('subtitle')is-invalid @enderror" name="subtitle" placeholder="Sous-titre de votre article">
                            <small class="form-text text-muted">Décrivez le contenu de votre article, le thème traité</small>
                            @error('subtitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                                
                            @enderror
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="category">Catégorie</label>
                            <select name="category" class="form-control" id="">
                                @foreach ($categories as $category )
                                <option value="{{$category->id}}" {{$category->id===$article->category->id: 'selected' ? ''}} {{$category}}>{{$category->label}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Titre</label>
                            <textarea name="content" id="tinycme-editor"  class="form-control  @error('content')is-invalid @enderror w-100">{{$article->content}}</textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                                
                            @enderror
                        </div>
                        <script>
                            tinymce.init({
                              selector: '#tinycme-editor'
                            });
                          </script>
        
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <button class="btn btn-primary" type="submit">Modifier l'article</button>
                    </div>
                    


        </form>
        
    </div>
@endsection