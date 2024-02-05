<x-layout>


    
    <h1 class="text-center display-1">I tuoi articoli</h1>


    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
@if (session('message2'))
<div class="alert alert-warning">
    {{session('message2')}}
</div>
@endif


<div class="container mt-5">
    <div class="row justify-content-center">

        @foreach ($articles as $article)
            <div class="col-6 col-md-6 mb-5">
                <div class="card p-2 shadow" style="width: 18rem;">
                    <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <p>{{ $article->price }}</p>
                        <p>{{ $article->brand }}</p>

                        <a href="{{ route('article_show', $article) }}" class="btn btn-primary">Dettaglio</a>
                        <a href="{{route('article_edit', $article)}}" class="btn btn-dark m-2">Modifica</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>