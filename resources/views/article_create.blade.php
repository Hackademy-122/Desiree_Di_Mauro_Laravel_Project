<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <h1 class="text-center display-1">I nostri articoli</h1>
            </div>
        </div>
    </div>




    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mb-3">
                <form method="POST" action="{{ route('article_store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nome aticolo</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-3 col-form-label">Prezzo</label>
                        <div class="col-sm-10">
                            <input name="price" type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-3 col-form-label">Marca</label>
                        <div class="col-sm-10">
                            <input name="brand" type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine prodotto:</label>
                        <div class="col-sm-10">
                            <input name="img" type="file" class="form-control" id="inputText">
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


    <div class="container mt-5">
        <div class="row justify-content-center">

            @foreach ($articles as $article)
                <div class="col-12 col-md-6 mb-5">
                    <div class="card p-5 shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <p>{{ $article->price }}</p>
                            <p>{{ $article->brand }}</p>

                            <a href="{{ route('article_create') }}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
