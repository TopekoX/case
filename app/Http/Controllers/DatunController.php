<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Datun;

class DatunController extends Controller
{
  public function index()
  {
    $datun = Datun::orderBy('tgl_skk', 'DESC')->paginate(20);

    return view('datun/index', ['datun' => $datun]);
  }

  public function list()
  {
    $datun = Datun::orderBy('tgl_skk', 'DESC')->paginate(20);

    return view('datun/list', ['datun' => $datun]);
  }


  public function view(Request $req, $id)
  {
    $datun = Datun::find($id);
    return view('datun/view', ['datun' => $datun]);
  }

  public function detail(Request $req, $id)
  {
    $datun = Datun::find($id);
    return view('datun/detail', ['datun' => $datun]);
  }

  public function update(Request $req, $id)
  {
    $this->validate($req, [
      'no_skk' => 'required',
      'tgl_skk' => 'required'
    ]);

    Datun::find($id)->update([
      'penggugat' => $req->penggugat,
      'tergugat' => $req->tergugat,
      'no_skk' => $req->no_skk,
      'tgl_skk' => $req->tgl_skk,
      'jenis_perkara' => $req->jenis_perkara,
      'ket' => $req->ket,
    ]);

    $datun = Datun::orderBy('tgl_skk', 'DESC')->paginate(20);

    return view('datun/index', ['datun' => $datun]);
  }

  public function delete($id)
  {
    $perkara = Datun::find($id);
    $perkara->delete();
    $datun = Datun::orderBy('tgl_skk', 'DESC')->paginate(20);
    return view('datun/index', ['datun' => $datun]);
  }

  public function form()
  {
    return view('datun/form');
  }

  public function insert(Request $req)
  {
    $this->validate($req, [
      'no_skk' => 'required',
      'tgl_skk' => 'required'
    ]);

    Datun::create([
      'penggugat' => $req->penggugat,
      'tergugat' => $req->tergugat,
      'no_skk' => $req->no_skk,
      'tgl_skk' => $req->tgl_skk,
      'jenis_perkara' => $req->jenis_perkara,
      'ket' => $req->ket,
    ]);

    $datun = Datun::orderBy('tgl_skk', 'DESC')->paginate(20);

    return view('datun/index', ['datun' => $datun]);
  }

  public function find(Request $req)
  {
    $datun = Datun::where('penggugat', 'like', '%'. $req->cari .'%')
                        ->orWhere('tergugat', 'like', '%'. $req->cari .'%')
                        ->orWhere('tergugat', 'like', '%'. $req->cari .'%')
                        ->orWhere('tgl_skk', 'like', '%'. $req->cari .'%')
                        ->orWhere('jenis_perkara', 'like', '%'. $req->cari .'%')
                        ->orWhere('ket', 'like', '%'. $req->cari .'%')
                        ->paginate(20);

    return view('datun/index', ['datun' => $datun]);
  }

  public function cari(Request $req)
  {
    $datun = Datun::where('penggugat', 'like', '%'. $req->cari .'%')
                        ->orWhere('tergugat', 'like', '%'. $req->cari .'%')
                        ->orWhere('tergugat', 'like', '%'. $req->cari .'%')
                        ->orWhere('tgl_skk', 'like', '%'. $req->cari .'%')
                        ->orWhere('jenis_perkara', 'like', '%'. $req->cari .'%')
                        ->orWhere('ket', 'like', '%'. $req->cari .'%')
                        ->paginate(20);

    return view('datun/list', ['datun' => $datun]);
  }
}
