@extends('layouts.master')

@section('title', 'Perkara Perdata dan Tata Usaha Negara')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Datun</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="{{ url('/datun/input') }}" class="btn btn-success" role="button" data-toggle="tooltip" title="Input Perkara Baru">
                  Input Data
                </a>
              </div>
          </div>
    </div>
    <div class="col-md-6">
      <form class="form-horizontal" action="{{ url('/datun/find') }}" method="post">
        <span class="pull-right">
          <input type="text" class="form-control input-sm" name="cari" align="right" placeholder="Cari...">
          {{csrf_field()}}
        </span>
      </form>
    </div>
    <br>
      <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Penggugat</th>
                <th>Tergugat</th>
                <th>No dan Tanggal SKK</th>
                <th>Jenis Perkara</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datun as $d)
                <tr>
                  <td>{{ $d->penggugat }}</td>
                  <td>{{ $d->tergugat }}</td>
                  <td>{{ $d->no_skk }} {{ $d->tgl_skk }}</td>
                  <td>{{ $d->jenis_perkara }}</td>
                  <td>
                    <a href="{{ url('/datun/'. $d->id .'/view') }}">Ubah</a> &nbsp | &nbsp;
                    <a href="{{ url('/datun/'. $d->id .'/delete') }}" onclick="return confirm('Yakin hapus data ini?');">Hapus</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <center>
            {!! $datun->render() !!}
          </center>
      </div>

@endsection
