<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Catatan;
use Carbon\Carbon;
use PDF;

class CatatanController extends Controller
{
    public function index(Request $request)
    {
    	$key = $request->search;
        $id_user = Auth::id();
    	$catatans = Catatan::where('id_user', $id_user)->where('tanggal', 'like','%'.$key.'%')->paginate(10);

    	return view('catatan.index', compact('catatans'));
    }

    public function show()
    {
        $waktu = Carbon::now();
        $catatans = Catatan::all();

        $data = public_path('img/pedulidirinobg.png');
 
        $pdf = PDF::loadview('catatan.catatan_pdf', compact('catatans', 'waktu', 'data'));
        return $pdf->download('Catatan Perjalanan.pdf');
    }

    public function create()
    {
        return view('catatan.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'id_user' => ['required'],
    		'tanggal' => ['date', 'required'],
    		'waktu' => ['required'],
    		'lokasi' => ['string', 'required'],
    		'suhu' => ['string', 'required'],
    	]);

    	$input = $request->all();

    	Catatan::create($input);

    	return redirect('/catatan')->with('message', 'Perjalanan anda berhasil dicatat');
    }

    public function edit(Catatan $catatan)
    {
        return view('catatan.edit', compact('catatan'));
    }

    public function update()
    {
        return redirect('/catatan')->with('message', 'Perjalanan anda berhasil dicatat');
    }

    public function destroy(Catatan $catatan)
    {
        $catatan->delete();

        return redirect('/catatan')->with('message', 'Perjalanan anda berhasil dihapus');
    }
}
