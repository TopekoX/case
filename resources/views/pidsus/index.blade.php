@extends('layouts.master')

@section('title', 'Perkara Pidana Khusus')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pidsus</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{{ url('/pidsus/input') }}" class="btn btn-success" role="button" data-toggle="tooltip" title="Input Perkara Baru">
                  Input Data
                </a>
              </div>
          </div>
    </div>
      <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>No. Perkara</th>
                <th>Tahap II</th>
                <th>Tersangka/Terdakwa</th>
                <th>Institusi Penyidik</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pidsus as $p)
                <tr>
                  <td>{{ $p->no_reg }}</td>
                  <td>{{ $p->tgl_reg }}</td>
                  <td>{{ $p->nama_terdakwa }}</td>
                  <td>{{ $p->institusi_penyidik }}</td>
                  <td>{{ $p->status }}</td>
                  <td>
                    <a href="{{ url('/pidsus/'. $p->id .'/view') }}">Ubah</a> &nbsp | &nbsp;
                    <a href="{{ url('/pidsus/'. $p->id .'/delete') }}" onclick="return confirm('Yakin hapus data ini?');">Hapus</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <center>
            {!! $pidsus->render() !!}
          </center>
      </div>

@endsection
