<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pidum;

class PidumController extends Controller
{
    public function index()
    {
      $pidum = Pidum::orderBy('tgl_reg', 'DESC')->paginate(20);

      return view('pidum/index', ['pidum' => $pidum]);
    }

    public function list()
    {
      $pidum = Pidum::orderBy('tgl_reg', 'DESC')->paginate(20);

      return view('pidum/list', ['pidum' => $pidum]);
    }

    public function view(Request $req, $id)
    {
      $pidum = Pidum::find($id);
      return view('pidum/view', ['pidum' => $pidum]);
    }

    public function detail(Request $req, $id)
    {
      $pidum = Pidum::find($id);
      return view('pidum/detail', ['pidum' => $pidum]);
    }

    public function update(Request $req, $id)
    {
      $this->validate($req, [
        'no_reg' => 'required|min:3',
        'tgl_reg' => 'required',
        'institusi_penyidik' => 'required',
        'nama_terdakwa' => 'required',
        'surat_dakwaan' => 'required',
        'status' => 'required'
      ]);

      Pidum::find($id)->update([
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

      $pidum = Pidum::orderBy('tgl_reg', 'DESC')->paginate(20);
      return view('pidum/index', ['pidum' => $pidum]);
    }

    public function delete($id)
    {
      $perkara = Pidum::find($id);
      $perkara->delete();
      $pidum = Pidum::orderBy('tgl_reg', 'DESC')->paginate(20);
      return view('pidum/index', ['pidum' => $pidum]);
    }

    public function form()
    {
      return view('pidum/form');
    }

    public function insert(Request $req)
    {
      $this->validate($req, [
        'no_reg' => 'required|min:3',
        'tgl_reg' => 'required',
        'institusi_penyidik' => 'required',
        'surat_dakwaan' => 'required',
        'nama_terdakwa' => 'required',
        'status' => 'required'
      ]);

      Pidum::create([
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

      $pidum = Pidum::orderBy('tgl_reg', 'DESC')->paginate(20);
      return view('pidum/index', ['pidum' => $pidum]);
    }

    public function find(Request $req)
    {
      $pidum = Pidum::where('no_reg', 'like', '%'. $req->cari .'%')
                          ->orWhere('jenis_perkara', 'like', '%'. $req->cari .'%')
                          ->orWhere('kasus_posisi', 'like', '%'. $req->cari .'%')
                          ->orWhere('surat_dakwaan', 'like', '%'. $req->cari .'%')
                          ->orWhere('institusi_penyidik', 'like', '%'. $req->cari .'%')
                          ->orWhere('nama_terdakwa', 'like', '%'. $req->cari .'%')
                          ->orWhere('pasal_yang_dibuktikan', 'like', '%'. $req->cari .'%')
                          ->orWhere('pasal_yang_didakwakan', 'like', '%'. $req->cari .'%')
                          ->orWhere('amar_putusan', 'like', '%'. $req->cari .'%')
                          ->orWhere('status', 'like', '%'. $req->cari .'%')
                          ->paginate(20);

      return view('pidum/index', ['pidum' => $pidum]);
    }

    public function cari(Request $req)
    {
      $pidum = Pidum::where('no_reg', 'like', '%'. $req->cari .'%')
                          ->orWhere('jenis_perkara', 'like', '%'. $req->cari .'%')
                          ->orWhere('kasus_posisi', 'like', '%'. $req->cari .'%')
                          ->orWhere('surat_dakwaan', 'like', '%'. $req->cari .'%')
                          ->orWhere('institusi_penyidik', 'like', '%'. $req->cari .'%')
                          ->orWhere('nama_terdakwa', 'like', '%'. $req->cari .'%')
                          ->orWhere('pasal_yang_dibuktikan', 'like', '%'. $req->cari .'%')
                          ->orWhere('pasal_yang_didakwakan', 'like', '%'. $req->cari .'%')
                          ->orWhere('amar_putusan', 'like', '%'. $req->cari .'%')
                          ->orWhere('status', 'like', '%'. $req->cari .'%')
                          ->paginate(20);

      return view('pidum/list', ['pidum' => $pidum]);
    }
}
