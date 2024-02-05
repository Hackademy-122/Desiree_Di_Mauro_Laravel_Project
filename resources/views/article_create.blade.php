{{-- <x-layout>

   
     <div class="container-fluid header d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5"> 
               <div class="image"></div>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>    
                @endif
                <h1 class="title text-center display-1 text-white">Aggiungi un Articolo</h1>
            </div>
        </div>
    </div>
   




    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mb-3">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form method="POST" action="{{ route('article_store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nome aticolo</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="inputEmail">
                            @error('name')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-3 col-form-label">Prezzo</label>
                        <div class="col-sm-10">
                            <input name="price" type="text" class="form-control  @error('price') is-invalid @enderror" value="{{old('price')}}" id="inputText">
                            @error('price')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-3 col-form-label">Marca</label>
                        <div class="col-sm-10">
                            <input name="brand" type="text" class="form-control  @error('brand') is-invalid @enderror" value="{{old('brand')}}"  id="inputText">
                            @error('brand')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine prodotto:</label>
                        <div class="col-sm-10">
                            <input name="img" type="file" class="form-control  @error('img') is-invalid @enderror" value="{{old('img')}}" id="inputText">
                            @error('img')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-auto mt-4">
                        <button id="button1" type="submit" class="btn btn-dark mb-3">Continua</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>


    

</x-layout> --}}
