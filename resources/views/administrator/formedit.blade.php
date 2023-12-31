@extends('layout.main')

@section('content')


                <h3>From Edit Administrator</h3>
                <div class="card">

                    <div class="card-header">
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('administrator') }}'">
                        <i class="fas fa-sign-out-alt"></i> Kembali
                    </button>
                    </div>
                    <div class="card-body">
                        @if (session('msg'))
                      <div class="alert alert-info" role="alert">
                        Edit Complete{{ session('msg') }}
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
                        <form method="POST" name="administratoradd" action="{{ url('administrator/'.$id) }}">
                            @csrf
                            @method('PUT')

                                <div class="row mb-3">
                                  <label for="levelUser" class="col-sm-2 col-form-label">Level Admin</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm @error('levelUser') is-invalid @enderror" id="levelUser" name="levelUser" autofocus required value="{{ $levelUser) }}">
                                        @error('levelUser')

                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>

                                        @enderror

                                </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="keterangan" class="col-sm-2 col-form-label">Deskripsi Level</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm @error('levelUser') is-invalid @enderror" id="keterangan" name="keterangan" autofocus required value="{{ $keterangan }}">
                                        @error('levelUser')

                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>

                                        @enderror

                                </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>


                        </form>
                    </div>
                </div>

@endsection
