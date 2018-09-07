@extends('layouts.master')

@section('title', 'Perkara Perdata dan Tata Usaha Negara')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Perkara</h1>
    </div>
    <form class="form-horizontal" action="{{ url('/datun/input') }}" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2">Penggugat</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="penggugat" value="{{ old('penggugat') }}">
          <span class="error">
            @if ($errors->has('penggugat'))
              {{ $errors->first('penggugat') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Tergugat</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="tergugat" value="{{ old('tergugat') }}">
          <span class="error">
            @if ($errors->has('tergugat'))
              {{ $errors->first('tergugat') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">No. SKK</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="no_skk" value="{{ old('no_skk') }}">
          <span class="error">
            @if ($errors->has('no_skk'))
              {{ $errors->first('no_skk') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Tanggal SKK</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="tgl_skk" value="{{ old('tgl_skk') }}">
          <span class="error">
            @if ($errors->has('tgl_skk'))
              {{ $errors->first('tgl_skk') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Jenis Perkara</label>
        <div class="col-sm-4">
          <select class="form-control" name="jenis_perkara">
            <option value="TUN">TUN</option>
            <option value="PERDATA" selected>PERDATA</option>
            <option value="PPH">PPH</option>
          </select>
          <span class="error">
            @if ($errors->has('jenis_perkara'))
              {{ $errors->first('jenis_perkara') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Keterangan</label>
        <div class="col-sm-4">
          <textarea class="form-control" rows="5" name="ket">{{ old('ket') }}</textarea>
          <span class="error">
            @if ($errors->has('ket'))
              {{ $errors->first('ket') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {{csrf_field()}}
        <button type="submit" class="btn btn-info">Simpan</button>
      </div>
    </form>
    <br><br>

@endsection
