<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
   <i class="fas fa-home"></i>
    <a class="navbar-brand" href="{{route('home')}}">Accueil
   
    </a>
    <button class="navbar-toggler" typeAbutton" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('articles')}}">Articles</a>
        </li>
        
        
       
      </ul>
      
       <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
         @if (Auth::user())
            @if (Auth::user()->role=="ADMIN")
            <li class="nav-item">
              <a href="{{route('articles.index')}}" class="nav-link">Espace admin</a>
            </li>
                
            @endif

         <li class="nav-item ">
           <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Déconnexion</button>
          </form>
           
          @else
          <li class="nav-item active">
            <a href="/login" class="nav-link">Connexion</a>
          </li>
             
         @endif
       
        
        
       
      </ul>
      
      
    </div>
  </div>
</nav>