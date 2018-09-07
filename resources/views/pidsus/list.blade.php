@extends('layouts.template')

@section('title', 'Perkara Pidana Khusus')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Perkara Pidana Khusus</h1>

    </div>
    <div class="col-md-6">
      <form class="form-horizontal" action="{{ url('/sip/pidsus/find') }}" method="post">
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
                    <a href="{{ url('/sip/pidsus/'. $p->id .'/detail') }}">Detail</a>
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
