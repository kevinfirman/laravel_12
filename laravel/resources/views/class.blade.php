@extends('layouts.MainLayout')

@section('title', 'kelas')


@section('content')

    <table class="table">
        <tr>
            <th>no</th>
            <th>id</th>
            <th>Kelas</th>
        </tr>

@foreach ($kelas as $data)


        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->class}}</td>
        </tr>



    @endforeach
</table>

@endsection
