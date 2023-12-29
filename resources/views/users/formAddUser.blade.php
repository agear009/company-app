@extends('layout.main')

@section('content')


                <h3>From New User</h3>
                <div class="card">

                    <div class="card-header">
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('administrator') }}'">
                        <i class="fas fa-sign-out-alt"></i> Kembali
                    </button>
                    </div>
                    <div class="card-body">
                      @if (session('msg'))
                      <div class="alert alert-info" role="alert">
                        Input Complete{{ session('msg') }}
                      </div>

                      @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                    <li>  {{ $error }}</li>

                                      @endforeach
                                  </ul>

                            </div>

                        @endif

                        <form method="POST" name="Useradd" action="{{ url('/user') }}">
                            @csrf

                                <div class="row mb-3">
                                  <label for="user" class="col-sm-2 col-form-label">User</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" id="user" name="user" required autofocus value="{{ old('user') }}">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Gender" class="col-sm-2 col-form-label">Level User</label>
                                    <div class="col-sm-4">
                                      <select  class="form-control form-control-sm  @error('gender') is-invalid @enderror" id="Gender" name="Gender">

                                            <option value="" selected>--Pilih Salah Satu--</option>
                                                {{-- mengambil data --}}
                                            @foreach ($administrator as $dataadmin)
                                            <option value="{{ $dataadmin->id }}" {{ (old('gender')=='$dataadmin->id') ? 'selected' : ''}}  name="Gender">{{ $dataadmin->levelUser }}</option>
                                            @endforeach

                                      </select>
                                      @error('gender')

                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>

                                  @enderror
                                    </div>
                                  </div>
                                <div class="row mb-3">
                                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                                  <div class="col-sm-4">
                                    <input type="password" class="form-control form-control-sm" id="passwrod" name="password" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name" required  value="{{ old('name') }}">

                                    @error('name')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                                  </div>
                                </div>
                                    <div class="row mb-3">
                                  <label for="Gender" class="col-sm-2 col-form-label">Gender</label>
                                  <div class="col-sm-4">
                                    <select  class="form-control form-control-sm  @error('gender') is-invalid @enderror" id="Gender" name="Gender">

                                          <option value="" selected>--Pilih Salah Satu--</option>
                                          <option value="M" {{ (old('gender')=='M') ? 'selected' : ''}}  name="Gender">Laki - Laki</option>
                                          <option value="F" {{ (old('gender')=='F') ? 'selected' : ''}}  name="Gender">Perempuan</option>

                                    </select>
                                    @error('gender')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone" name="phone" required  value="{{ old('phone') }}">

                                    @error('phone')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                    @enderror

                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="email" class="col-sm-2 col-form-label">Email address</label>
                                  <div class="col-sm-4">
                                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror " id="email" name="email" required value="{{ old('email') }}">

                                    @error('email')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                    @enderror

                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="address" class="col-sm-2 col-form-label">Address</label>
                                  <div class="col-sm-4">
                                    <textarea class="form-control form-control-sm @error('address') is-invalid @enderror" cols="30" id="address" name="address" required  value="{{ old('address') }}">
                                    </textarea>

                                    @error('address')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                    @enderror

                                  </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Save</button>


                        </form>
                    </div>
                </div>

@endsection
