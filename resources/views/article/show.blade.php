<x-layout>

    <div class="container-fluid  d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5">


                <h1 class="text-center display-1">Dettaglio Articolo, {{$article->name}} </h1>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-5">
                    <div class="card p-3 shadow" style="width: 15rem;">
                        <img style="width: 200px; height:auto; " src="{{Storage::url($article->img)}}" alt="" class="card-img-top card-img-custom">
                    </div>     
                        <div class="card-body">
                            <h5 class="card-title mt-4">{{ $article->name }}</h5>
                            <p class="card-text mt-3">{{$article->price}}</p>

                            <p>Inserito da:</p>
                            {{-- TRAVERSAMENTO DEI MODELLI --}}
                            @auth
                                @if (Auth::user())
                                    <p>{{$article->user->name}}</p>
                                    @else
                                    Nessun utente collegato
                                @endif
                            @endauth

                            <p>Categorie:</p>

                            @foreach ($article->categories as $category)
                               <p> {{$category->name}} </p>
                            @endforeach
                            
                            
                            

                            <div class="d-flex justify-content-center">
                               <a href="{{route('article_index')}}" class="btn btn-primary m-2">Torna indietro</a> 
                               <a href="{{route('article_edit', $article)}}" class="btn btn-dark m-2">Modifica</a>
                               <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete').submit();" class="btn btn-danger m-2">Elimina</a> 
                               <form id="form-delete" action="{{route('article_delete', $article)}}" method="POST">
                                @method('delete')
                                @csrf
                               </form>
                            </div>
                       
                        </div>
                    </div>
                   
                </div>
        </div>
    </div>
    
    


</x-layout>