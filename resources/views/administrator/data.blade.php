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
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data berhasil disimpan! </strong>{{ session('msg') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

            <table class="table table-sm table-striped table-borderd">
               <thead>
                    <th>No</th>
                    <th>id User</th>
                    <th>Level User</th>
                    <th>Keterangan</th>
                    <th>Dibuat</th>
                    <th>Dieperbaharui</th>
                    <th>Menu</th>
               </thead>
               <tbody>
                {{-- menapilkan database administrator --}}
                    @foreach ( $administrator as $row )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->iduser }}</td>
                            <td>{{ $row->levelUser}}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>{{ $row->updated_at}}</td>
                            <td>
                                <button onclick="window.location='{{ url('administrator/'.$row->id) }}'" type="button" class="btn btn-sm btn-info" title="edit data"><i class="fas fa-edit"></i></button>
                               <form style="display: inline" method="POST" action="{{ url('administrator/'.$row->id) }}" onsubmit="return deleteData('{{ $row->levelUser }}')">

                                    @csrf
                                    @method('DELETE')
                                    <button onclick="window.location='{{ url('administrator/'.$row->id) }}'" type="submit" class="btn btn-sm btn-danger" title="Delete data"><i class="fas fa-trash-alt"></i></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
            </table>

    </div>
  </div>
  <script>

        function deleteData(levelUser){
            pesan = confirm('yakin anda akan menghapus level ${levelUser} ?');
            if (pesan) return true;
            else return false;
        }
  </script>
  @endsection
