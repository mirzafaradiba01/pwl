@extends('layout.template')

@section('content')
    <h4 class="text-center">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h4>
    <h3 class="text-center">KARTU HASIL STUDI (KHS)</h3>

    <p><span class="font-weight-bold">Nama:</span> {{$data->nama}}</p>
    <p><span class="font-weight-bold">NIM:</span> {{$data->nim}}</p>
    <p><span class="font-weight-bold">Kelas:</span> {{$data->kelas->nama_kelas}}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Kode</th>
            <th>MataKuliah</th>
            <th>Semester</th>
            <th>Dosen</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Nilai</th>
        </tr>
        </thead>
        <tbody>
        @if($khs->count() > 0)
            @foreach($khs as $row)
                <tr>
                    <td>{{ $row->matkul->kode }}</td>
                    <td>{{ $row->matkul->nama_mk }}</td>
                    <td>{{ $row->matkul->semester }}</td>
                    <td>{{ $row->matkul->dosen }}</td>
                    <td>{{ $row->matkul->sks }}</td>
                    <td>{{ $row->matkul->jam }}</td>
                    <td>{{ $row->nilai}}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">Data tidak ada</td>
            </tr>
        @endif

        </tbody>
    </table>
@endsection