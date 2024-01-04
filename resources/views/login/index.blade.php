@extends('index.main_index')

@section('container')
<div class="container  justfy-content-center ">
<main class="form-signin w-100 m-auto">

        <br><br><br><br><br><br>
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus>
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>


      <button class="btn btn-primary w-100 py-2" type="submit">Login</button>

    </form>
    <small class="d-block text-center">Not Register ? <a href="/register">Register Now!</a></small>
    <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2023</p>
  </main>
</div>

  @endsection
