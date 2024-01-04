@extends('index.main_index')

@section('container')
<div class="container  justfy-content-center ">

<main class="form-registration w-100 m-auto">

        <br><br><br><br><br><br>
      <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>

      <form action="/register/save" method="POST">
      <div class="form-floating">
        <input type="text" name="user" class="form-control" id="floatingInput" placeholder="User" autofocus>
        <label for="floatingInput">User ID</label>
      </div>
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name" >
        <label for="floatingInput">name</label>
      </div>
      <div class="form-floating">
        <select name="gender" class="form-control" id="floatingInput" placeholder="Gender" >
        <label for="floatingInput">Gender</label>
        <option value="">--Select Gender--</option>
        <option value="M" name="gender">Male</option>
        <option value="F" name="gender">Female</option>
        </select>
      </div>
      <div class="form-floating">
        <input type="number" name="phone" class="form-control" id="floatingInput" placeholder="+62 81125674891" >
        <label for="floatingInput">Phone Number</label>
      </div>
      <div class="form-floating">
        <input type="text" name="address" class="form-control" id="floatingInput" placeholder="Jl. kepathian No.2 Bandung Jawa Barat" >
        <label for="floatingInput">address</label>
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>


      <button class="btn btn-primary w-100 py-2" type="submit">Login</button>

    </form>
    <small class="d-block text-center">Allredy Register ? <a href="/login">Login Now!</a></small>
    <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2023</p>
  </main>
</div>


  @endsection
