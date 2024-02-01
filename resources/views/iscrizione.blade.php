<x-layout>

<h1 class="text-center display-1">Accedi/Registrati</h1>

<div class="container mt-5">
    <div class="row">
        <div class="col-6 mb-3">
            <form method="POST" action="{{route('user')}}">
                @csrf
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input id="email" type="text" class="form-control" id="inputEmail">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input id="pass" type="password" class="form-control" id="inputPassword">
                </div>
                <div class="col-auto mt-4">
                    <button id="button" type="submit" class="btn btn-dark mb-3">Continua</button>
                </form>
                </div>
              </div>
        </div>
    </div>
</div>



</x-layout>