@extends('base')
@section('content')
    <div class="container">
     
     
        <h1 class="text-center my-5">Articles</h1>
        <div class="d-flex justify-content-center">
          <a href="{{route('articles.create')}}" class="btn btn-info my-3"><i class="fas fa-plus ml-2"></i>Ajouter un nouvel article</a>
        </div>
        <table class="table table-hover">
            <thead>
              <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Créé le</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
              <tr class="">
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->dateFormatted()}}</td>
                <td class="d-flex">
                  <a href="{{route('articles.edit',$article->id)}}" class="btn btn-warning mx-3">Editer</a>
                  <button type="button" class="btn btn-danger " onclick="document.getElementById('model-open-{{$article->id}}').style.display='block'">Supprimer</button>
                   <form action="{{route('articles.destroy',$article->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="modal" id="model-open-{{$article->id}}">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">La suppression d'un élément est définitive</h5>
                            <button type="button" class="btn-close"  onclick="document.getElementById('model-open-{{$article->id}}').style.display='block'"data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true"></span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Etes-vous sûr de vouloir supprimer cet article</p>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Oui</button>
                            <button type="button" class="btn btn-secondary"  onclick="document.getElementById('model-open-{{$article->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  
                  </form>
                 
                  
                </td>
              </tr>
                  
              @endforeach
              
            </tbody>
          </table>
          <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.pagination.custom')}}
        <div>
    </div>
@endsection