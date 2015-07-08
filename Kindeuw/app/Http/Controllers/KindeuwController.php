<?php namespace Kindeuw\Http\Controllers;

use Kindeuw\Http\Requests;
use Kindeuw\Http\Controllers\Controller;
use Kindeuw\Kindeuw;
use Request;
use DB;

class KindeuwController extends Controller {

	public function create(){

		return view('Kindeuw.Create');
	}

	public function index(){
		$manekinds = Kindeuw::All();

		return view('Kindeuw.Index', compact('manekinds'));
	}

	public function store(){
		$input = Request::All();
		Kindeuw::create($input);

		return redirect('Kindeuw');
	}

	public function baca($id){
		$show = Kindeuw::find($id);
	
		return view('Kindeuw.Baca', compact('show'));
	}

	public function hapus($id){
		Kindeuw::find($id)->delete();

		return redirect('Kindeuw');
	}

    public  function ubah($id){
        $req = Request::all();
        $hasil = Kindeuw::find($id);
        $hasil->update($req);

        return redirect('Kindeuw');

    }

    public function edit($id){
        $edit = Kindeuw::find($id);

        return view('Kindeuw.Ubah', compact('edit'));
    }
}
