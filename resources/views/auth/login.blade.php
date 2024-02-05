   <x-layout>

    <div class="container-fluid  d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-5"> 
               
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>    
                @endif 
                <h1 class="text-center display-1">Accedi/Registrati</h1>            
            </div>
        </div>
    </div>

   

   

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mb-3">
                                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" id="email" type="email" class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" id="pass" type="password" class="form-control" id="inputPassword">
                        </div> 
                        <div class="col-auto mt-4 mb-4">
                          <a id="link" href=""><span id="span">Hai dimenticato la password?</span></a>
                          
                        </div>
                        
                        <div class="col-auto mt-5">
                            <button id="button" type="submit" class="btn btn-dark mt-4">Accedi</button>
                        </div>    
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container mt-5">
      <div class="row">
          <div class="col-6 mb-3">
          </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
          <div class="col-6 mb-3">

            <h2>Sono un nuovo cliente</h2>

            <div class="col-auto mt-4">
             <a href="{{route('register')}}"> <button id="button2" type="submit" class="btn btn-dark mt-4">Registrati</button></a>
          </div>    
          </div>
      </div>
    </div>


  
    


</x-layout>

