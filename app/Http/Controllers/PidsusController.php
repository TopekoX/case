<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pidsus;

class PidsusController extends Controller
{
  public function index()
  {
    $pidsus = Pidsus::latest()->paginate(20);

    return view('pidsus/index', ['pidsus' => $pidsus]);
  }

  public function view(Request $req, $id)
  {
    $pidsus = Pidsus::find($id);
    return view('pidsus/view', ['pidsus' => $pidsus]);
  }

  public function update(Request $req, $id)
  {
    $this->validate($req, [
      'no_reg' => 'required|min:3',
      'tgl_reg' => 'required',
      'institusi_penyidik' => 'required',
      'nama_terdakwa' => 'required',
      'status' => 'required'
    ]);

    Pidsus::find($id)->update([
      'no_reg' => $req->no_reg,
      'tgl_reg' => $req->tgl_reg,
      'jenis_perkara' => $req->jenis_perkara,
      'kasus_posisi' => $req->kasus_posisi,
      'surat_dakwaan' => $req->surat_dakwaan,
      'institusi_penyidik' => $req->institusi_penyidik,
      'nama_terdakwa' => $req->nama_terdakwa,
      'pasal_yang_dibuktikan' => $req->pasal_yang_dibuktikan,
      'pasal_yang_didakwakan' => $req->pasal_yang_didakwakan,
      'amar_putusan' => $req->amar_putusan,
      'status' => $req->status,
      'tanggal_eksekusi' => $req->tanggal_eksekusi
    ]);

    $pidsus = Pidsus::latest()->paginate(20);
    return view('pidsus/index', ['pidsus' => $pidsus]);
  }

  public function delete($id)
  {
    $perkara = Pidsus::find($id);
    $perkara->delete();
    $pidsus = Pidsus::latest()->paginate(20);
    return view('pidsus/index', ['pidsus' => $pidsus]);
  }

  public function form()
  {
    return view('pidsus/form');
  }

  public function insert(Request $req)
  {
    $this->validate($req, [
      'no_reg' => 'required|min:3',
      'tgl_reg' => 'required',
      'institusi_penyidik' => 'required',
      'nama_terdakwa' => 'required',
      'status' => 'required'
    ]);

    Pidsus::create([
      'no_reg' => $req->no_reg,
      'tgl_reg' => $req->tgl_reg,
      'jenis_perkara' => $req->jenis_perkara,
      'kasus_posisi' => $req->kasus_posisi,
      'surat_dakwaan' => $req->surat_dakwaan,
      'institusi_penyidik' => $req->institusi_penyidik,
      'nama_terdakwa' => $req->nama_terdakwa,
      'pasal_yang_dibuktikan' => $req->pasal_yang_dibuktikan,
      'pasal_yang_didakwakan' => $req->pasal_yang_didakwakan,
      'amar_putusan' => $req->amar_putusan,
      'status' => $req->status,
      'tanggal_eksekusi' => $req->tanggal_eksekusi
    ]);

    $pidsus = Pidsus::latest()->paginate(20);
    return view('pidsus/index', ['pidsus' => $pidsus]);
  }

}
