@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DAFTAR KELUARGA</h3>

            {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div> --}}
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Pekerjaan</th>
                </tr>
      
                @foreach ($keluarga as $no => $k) 
                <tr>
                  <td>{{$k ->no}}</td>
                  <td>{{$k->nama}}</td>
                  <td>{{$k->status}}</td>
                  <td>{{$k->jk}}</td>
                  <td>{{$k->tgl_lahir}}</td>
                  <td>{{$k->agama}}</td>
                  <td>{{$k->pekerjaan}}</td>
                </tr>
                @endforeach
              </table>   
    </div>
    <!-- /.card -->

    </section>
@endsection