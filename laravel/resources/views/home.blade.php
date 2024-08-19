@extends('layouts.MainLayout')

{{-- judul konten --}}
@section('title', 'Data Siwa')
{{-- isi konten yang akan ditampilkan --}}
@section('content')





 <h1>ini data siswa</h1>
<div class="mt-5">
      <table class="table table-bordered">
        <tr>
            <td>nis</td>
            <td>nama</td>
            <td>jurusan</td>
            <td>eskul</td>
        </tr>


        @foreach ($data as $siswa)



            <tr>
                <td>{{$siswa['nis']}}</td>
                <td>{{$siswa['nama_siswa']}}</td>
                <td>{{$siswa['jurusan']}}</td>
                <td>{{$siswa['eskul']}}</td>
            </tr>


        @endforeach
    </table>

    </div>

    @endsection
