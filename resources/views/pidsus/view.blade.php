@extends('layouts.master')

@section('title', 'Perkara Pidana Khusus')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Perkara</h1>
    </div>
    <form class="form-horizontal" action="{{ url('/pidsus/'. $pidsus->id .'/update') }}" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2">No. Reg. Perkara:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="no_reg" value="{{ $pidsus->no_reg }}">
          <span class="error">
            @if ($errors->has('no_reg'))
              {{ $errors->first('no_reg') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Tgl. Tahap II</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="tgl_reg" value="{{ $pidsus->tgl_reg }}">
          <span class="error">
            @if ($errors->has('tgl_reg'))
              {{ $errors->first('tgl_reg') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Jenis Perkara</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="jenis_perkara" value="{{ $pidsus->jenis_perkara }}">
          <span class="error">
            @if ($errors->has('jenis_perkara'))
              {{ $errors->first('jenis_perkara') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Kasus Posisi</label>
        <div class="col-sm-4">
          <textarea class="form-control" rows="5" name="kasus_posisi">{{ $pidsus->kasus_posisi }}</textarea>
          <span class="error">
            @if ($errors->has('kasus_posisi'))
              {{ $errors->first('kasus_posisi') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Surat Dakwaan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="surat_dakwaan" value="{{ $pidsus->surat_dakwaan }}">
          <span class="error">
            @if ($errors->has('surat_dakwaan'))
              {{ $errors->first('surat_dakwaan') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Institusi Penyidik</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="institusi_penyidik" value="{{ $pidsus->institusi_penyidik }}">
          <span class="error">
            @if ($errors->has('institusi_penyidik'))
              {{ $errors->first('institusi_penyidik') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Nama Terdakwa</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="nama_terdakwa" value="{{ $pidsus->nama_terdakwa }}">
          <span class="error">
            @if ($errors->has('nama_terdakwa'))
              {{ $errors->first('nama_terdakwa') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Pasal Yang Dibuktikan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="pasal_yang_dibuktikan" value="{{ $pidsus->pasal_yang_dibuktikan }}">
          <span class="error">
            @if ($errors->has('pasal_yang_dibuktikan'))
              {{ $errors->first('pasal_yang_dibuktikan') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Pasal Yg Didakwakan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="pasal_yang_didakwakan" value="{{ $pidsus->pasal_yang_didakwakan }}">
          <span class="error">
            @if ($errors->has('pasal_yang_didakwakan'))
              {{ $errors->first('pasal_yang_didakwakan') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Amar Putusan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="amar_putusan" value="{{ $pidsus->amar_putusan }}">
          <span class="error">
            @if ($errors->has('amar_putusan'))
              {{ $errors->first('amar_putusan') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Status</label>
        <div class="col-sm-4">
          <select class="form-control" name="status">
            <option value="penuntutan" @if ($pidsus->status == 'penuntutan') selected @endif>Penuntutan</option>
            <option value="kasasi" @if ($pidsus->status == 'kasasi') selected @endif>Kasasi</option>
            <option value="eksekusi" @if ($pidsus->status == 'eksekusi') selected @endif>Eksekusi</option>
         </select>
          <span class="error">
            @if ($errors->has('kategori_perkara'))
              {{ $errors->first('kategori_perkara') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Tgl. Eksekusi</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="tanggal_eksekusi" value="{{ $pidsus->tanggal_eksekusi }}">
          <span class="error">
            @if ($errors->has('tanggal_eksekusi'))
              {{ $errors->first('tanggal_eksekusi') }}
            @endif
          </span>
        </div>
      </div>
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-info">Update</button>
      </div>
    </form>
    <br><br>


@endsection
