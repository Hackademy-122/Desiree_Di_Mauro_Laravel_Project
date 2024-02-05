<x-layout>

    <div class="container-fluid  d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5">

                <h1 class="text-center display-1">Modifica l' articolo,{{$article->name}}</h1>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mb-3">

                <form method="POST" action="{{route('article_update', $article)}}" enctype="multipart/form-data">

                    @method('put')

                    @csrf

                    <div class="row">
                        <label class="col-sm-4 col-form-label">Nome articolo</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control custom input @error('name') is-invalid @enderror" @error('name') placeholder="{{$message}}" 
                            @enderror value="{{$article->name}}">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Prezzo</label>
                        <div class="col-sm-10">
                            <input name="price" type="numeric" class="form-control custom input @error('price') is-invalid @enderror" @error('price') placeholder="{{$message}}" 
                            @enderror value="{{$article->name}}">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Marca prodotto</label>
                        <div class="col-sm-10">
                            <input name="brand" type="text" class="form-control custom input @error('brand') is-invalid @enderror" @error('brand') placeholder="{{$message}}" 
                            @enderror value="{{$article->name}}">
                        </div>
                    </div>
                    <div class="row">
                        @if ($article->img)
                        <div class="d-flex justify-content-center">
                            <img style="width: 200px; height:auto;" src="{{Storage::url($article->img)}}" alt="">
                        </div>     
                            @else
                            <p class="small">Non ci sono immagini precedenti!</p>
                        @endif
                        <div class="row mt-5">
                            <label class="col-sm-4 col-form-label">Immagine prodotto</label>
                            <div class="col-sm-10">
                                <input name="img" type="file" class="form-control @error('img') is-invalid @enderror">
                                 @error('img') 
                               <div class="alert alert-danger mt-1">{{$message}}</div> 
                                @enderror 
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-auto mt-4">
                        <button id="button4" type="submit" class="btn btn-dark mb-3">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>




