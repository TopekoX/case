@extends('layouts.template')

@section('title', 'Perkara Perdata dan TUN')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Perkara Perdata dan TUN</h1>

    </div>
    <div class="col-md-6">
      <form class="form-horizontal" action="{{ url('/sip/datun/find') }}" method="post">
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
                <th></th>Ubah
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
                    <a href="{{ url('/sip/datun/'. $d->id .'/detail') }}">Detail</a>
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
