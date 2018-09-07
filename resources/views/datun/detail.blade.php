@extends('layouts.template')

@section('title', 'Perkara Perdata dan TUN')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Perkara</h1>
    </div>
    <table id="customers">
      <tr>
        <td>Penggugat</td>
        <td>: {{ $datun->penggugat }}</td>
      </tr>
      <tr>
        <td>Tergugat</td>
        <td>: {{ $datun->tergugat }}</td>
      </tr>
      <tr>
        <td>No. SKK</td>
        <td>: {{ $datun->no_skk }}</td>
      </tr>
      <tr>
        <td>Tanggal SKK</td>
        <td>: {{ $datun->tgl_skk }}</td>
      </tr>
      <tr>
        <td>Jenis Perkara</td>
        <td>: {{ $datun->jenis_perkara }}</td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>: {{ $datun->ket }}</td>
      </tr>
    </table>
    <br><br>


@endsection
