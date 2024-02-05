<x-layout>

    <div class="container-fluid  d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5">
                
                

                <h1 class="text-center display-1">Tutte le categorie</h1>


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

            </div>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
          <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td> <a href="{{route('category_show', $category)}}" class="btn btn-primary">Dettaglio</a>
            <a href="{{route('category_edit', $category)}}" class="btn btn-dark">Modifica</a>
            <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$category->id}}').submit();">Elimina</a>
            <form id="form-delete-{{$category->id}}" action="{{route('category_delete', $category)}}" method="POST" class="d-none">
                @method('delete')
              @csrf
            </form>
        </td>

          </tr>
          @endforeach
          
        </tbody>
      </table>





    {{-- <div class="container mt-5">
        <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-5">
                    <div class="card p-5 shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <a href="{{route('category_show', $category)}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
        </div>
    </div> --}}
    
    


</x-layout>
