<x-layout>

    <div class="container-fluid  d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5">

                <h1 class="text-center display-1">Modifica categoria,{{$category->name}}</h1>

            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mb-3">

                <form method="POST" action="{{route('category_update', $category)}}">
                    @method('put')
                    @csrf
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Nome categoria</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="inputName"
                                aria-describedby="nameHelp" value="{{$category->name}}">
                        </div>
                    </div>
                  
                    <div class="col-auto mt-4">
                        <button id="button4" type="submit" class="btn btn-dark mb-3">Modifica categoria</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>
