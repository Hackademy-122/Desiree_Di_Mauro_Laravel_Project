<x-layout>

    <div class="container-fluid  d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5">


                <h1 class="text-center display-1">Dettaglio categoria, {{$category->name}} </h1>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-5">
                    <div class="card p-5 shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                        <a href="{{route('category_index')}}" class="btn btn-primary">Torna indietro</a>
                        </div>
                    </div>
                   
                </div>
        </div>
    </div>
    
    


</x-layout>
