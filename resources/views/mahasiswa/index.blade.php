@extends('datamahasiswa')

@section('konten')
<div class="table-responsive-md">
    <div class="col">
        <table class="table table-actions table-striped table-hover mb-0" data-table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    @if (auth()->user()->role_id == "1")
                    <th>Action</th>
                    @elseif (auth()->user()->role_id == "2")
                    <th>Action</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->nohp }}</td>
                            @if (auth()->user()->role_id == "1")
                            <td>
                                <a href="{{ url('datamahasiswa/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" 
                                    action="{{ url('datamahasiswa/'.$item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            @elseif (auth()->user()->role_id == "2")
                            <td>
                                <a href="{{ url('datamahasiswa/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" 
                                    action="{{ url('datamahasiswa/'.$item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection