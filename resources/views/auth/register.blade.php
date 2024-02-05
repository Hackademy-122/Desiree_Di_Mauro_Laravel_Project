<x-layout>


    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <h1 class="text-center display-1">Ciao, Registrati</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mb-3">
              
                <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" class="form-control" id="inputEmail">
                              
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="text" class="form-control" id="inputText">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-10">
                                 <input name="password" type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Conferma password</label>
                            <div class="col-sm-10">
                                <input name="password_confirmation" type="password" class="form-control" id="inputText">
                            </div>
                        </div>
                        <div class="col-auto mt-4">
                            <button id="button3" type="submit" class="btn btn-dark mb-3">Registrati</button>
                    </div>
               </form> 
            </div>
    </div>
    </div>
    
    
</x-layout>
