
@extends('layouts.MainLayout')

@section('title', 'siswa')


@section('content')

    <table class="table">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>gender</th>
            <th>nis</th>
            <th>kelas</th>
        </tr>

@foreach ($siswa as $data)


        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->nama_siswa}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->class_id}}</td>

        </tr>



    @endforeach
</table>

@endsection

