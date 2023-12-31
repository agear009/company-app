@extends('layout.main')

@section('content')

<h3>Administrator</h3>
<div class="card">

    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('/administrator/addAdmin') }}'">
        <i class="fas fa-plus-square"></i> Add New Level User Data
      </button>

      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('/users/addUsers') }}'">
        <i class="fas fa-plus-square"></i> Add New User Data
      </button>
    </div>
    <div class="card-body">

            <table class="table table-sm table-striped table-borderd">
               <thead>
                    <th>No</th>
                    <th>id User</th>
                    <th>Level User</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Create</th>
                    <th>Update</th>
               </thead>
               <tbody>
                {{-- menapilkan database administrator --}}
                    @foreach ( $administrator as $row )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->iduser }}</td>
                            <td>{{ $row->levelUser }}</td>
                            <td>{{ $row->levelUser }}</td>
                            <td>{{ $row->levelUser }}</td>
                            <td>{{ $row->levelUser }}</td>
                            <td>{{ $row->levelUser }}</td>
                        </tr>
                    @endforeach
               </tbody>
            </table>

    </div>
  </div>
  @endsection
