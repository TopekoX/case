@extends('layouts.template')

@section('title', 'Perkara Pidana Umum')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Perkara</h1>
    </div>
    <table id="customers">
      <tr>
        <td>No. Reg. Perkara</td>
        <td>: {{ $pidum->no_reg }}</td>
      </tr>
      <tr>
        <td>Tgl. Tahap II</td>
        <td>: {{ $pidum->tgl_reg }}</td>
      </tr>
      <tr>
        <td>Jenis Perkara</td>
        <td>: {{ $pidum->jenis_perkara }}</td>
      </tr>
      <tr>
        <td>Kasus Posisi</td>
        <td>: {{ $pidum->kasus_posisi }}</td>
      </tr>
      <tr>
        <td>Surat Dakwaan</td>
        <td>: {{ $pidum->surat_dakwaan }}</td>
      </tr>
      <tr>
        <td>Institusi Penyidik</td>
        <td>: {{ $pidum->institusi_penyidik }}</td>
      </tr>
      <tr>
        <td>Nama Terdakwa</td>
        <td>: {{ $pidum->nama_terdakwa }}</td>
      </tr>
      <tr>
        <td>Pasal Yang Dibuktikan</td>
        <td>: {{ $pidum->pasal_yang_dibuktikan }}</td>
      </tr>
      <tr>
        <td>Pasal Yang Didakwakan</td>
        <td>: {{ $pidum->pasal_yang_didakwakan }}</td>
      </tr>
      <tr>
        <td>Amar Putusan</td>
        <td>: {{ $pidum->amar_putusan }}</td>
      </tr>
      <tr>
        <td>Status</td>
        <td>: {{ $pidum->status }}</td>
      </tr>
      <tr>
        <td>Tanggal Eksekusi</td>
        <td>: {{ $pidum->tanggal_eksekusi }}</td>
      </tr>
    </table>
    <br><br>


@endsection
