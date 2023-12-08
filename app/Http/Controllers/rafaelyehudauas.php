<?php

namespace App\Http\Controllers;

use App\Models\rafaelyehuda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\CodeCleaner\FunctionContextPass;

class rafaelyehudauas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = rafaelyehuda::all();
        return view('UAS/index')-> with('data' ,$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('UAS/InputData');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Session::flash('Nama',$request->Nama);
       Session::flash('NIM',$request->NIM);
       Session::flash('Jurusan',$request->Jurusan);
       Session::flash('Semester',$request->Semester);
       Session::flash('NomorTelepon',$request->NomorTelepon);
        $request->validate([
            'Nama'=> 'required',
            'NIM' => 'required|numeric',
            'Jurusan'=> 'required',
            'Semester'=> 'required',
            'NomorTelepon'=> 'required|numeric'
        ],[
            'Nama.required'=> 'Nama Tidak Boleh Kosong!',
            'NIM.required'=>'NIM Tidak Boleh Kosong',
            'Jurusan.required'=>'Jurusan Anda tidak Boleh dikosongkan!',
            'Semester.required'=>'Anda Semester Berapa?',
            'NomorTelepon.required'=>'Nomor tidak Boleh dikosongkan!',
        ]);
        $data =[
            'Nama'=> $request->input('Nama'),
            'NIM'=> $request->input('NIM'),
            'Jurusan'=> $request->input('Jurusan'),
            'Semester'=> $request->input('Semester'),
            'NomorTelepon'=> $request->input('NomorTelepon')
        ];
        rafaelyehuda::create($data);
        return redirect('UAS')->with('success','Data Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = rafaelyehuda::where('Nama', $id)->first();
        return view('UAS.Edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nama'=> 'required',
            'NIM' => 'required|numeric',
            'Jurusan'=> 'required',
            'Semester'=> 'required',
            'NomorTelepon'=> 'required|numeric'
        ],[
            'Nama.required'=> 'Nama Tidak Boleh Kosong!',
            'NIM.required'=>'NIM Tidak Boleh Kosong',
            'Jurusan.required'=>'Jurusan Anda tidak Boleh dikosongkan!',
            'Semester.required'=>'Anda Semester Berapa?',
            'NomorTelepon.required'=>'Nomor tidak Boleh dikosongkan!',
        ]);
        $data =[
            'Nama'=> $request->input('Nama'),
            'NIM'=> $request->input('NIM'),
            'Jurusan'=> $request->input('Jurusan'),
            'Semester'=> $request->input('Semester'),
            'NomorTelepon'=> $request->input('NomorTelepon')
        ];
        rafaelyehuda::where('Nama',$id)->update($data);
        return redirect('UAS')->with('success','Data Berhasil diUpdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        rafaelyehuda::where('Nama',$id)->delete();
        return redirect('UAS')->with('success','Data Dihapus!');
    }
}
