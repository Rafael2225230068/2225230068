<?php

namespace App\Http\Controllers;


use App\Models\DataNamaDosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\CodeCleaner\FunctionContextPass;

class DataNamaDosenn extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function TampilDataDosen()
    {
        //
        $data = DataNamaDosen::orderBy('id','asc')->paginate(10);
        return view('NamaDosen.TampilNamaDosen')-> with('data' ,$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function TambahDataDosen()
    {
        return view('NamaDosen.InputData');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function KirimDataDosen(Request $request)
    {
       Session::flash('NamaDosen',$request->NamaDosen);
       Session::flash('NIDN',$request->NIDN);
       Session::flash('NIP',$request->NIP);
       Session::flash('Jabatan',$request->Jabatan);
       Session::flash('Email',$request->Email);
        $request->validate([
            'NamaDosen'=> 'required',
            'NIDN' => 'required|numeric',
            'NIP'=> 'required|numeric',
            'Jabatan'=> 'required',
            'Email'=> 'required'
        ],[
            'NamaDosen.required'=> 'Nama Tidak Boleh Kosong!',
            'NIDN.required'=>'NIDN Tidak Boleh Kosong',
            'NIP.required'=>'NIP tidak Boleh dikosongkan!',
            'Jabatan.required'=>'Jabatan tidak boleh kosong',
            'Email.required'=>'Email tidak Boleh dikosongkan!',
        ]);
        $data =[
            'NamaDosen'=> $request->input('NamaDosen'),
            'NIDN'=> $request->input('NIDN'),
            'NIP'=> $request->input('NIP'),
            'Jabatan'=> $request->input('Jabatan'),
            'Email'=> $request->input('Email')
        ];
        DataNamaDosen::create($data);
        return redirect('/NamaDosen')->with('success','Data Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function EditDataDosen(string $id)
    {
        $data = DataNamaDosen::where('NamaDosen', $id)->first();
        return view('NamaDosen.EditNamaDosen')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateDataDosen(Request $request, string $id)
    {
        $request->validate([
            'NamaDosen'=> 'required',
            'NIDN' => 'required|numeric',
            'NIP'=> 'required|numeric',
            'Jabatan'=> 'required',
            'Email'=> 'required'
        ],[
            'NamaDosen.required'=> 'Nama Tidak Boleh Kosong!',
            'NIDN.required'=>'NIDN Tidak Boleh Kosong',
            'NIP.required'=>'NIP tidak Boleh dikosongkan!',
            'Jabatan.required'=>'Jabatan tidak boleh dikosongkan!',
            'Email.required'=>'Email tidak Boleh dikosongkan!',
        ]);
        $data =[
            'NamaDosen'=> $request->input('NamaDosen'),
            'NIDN'=> $request->input('NIDN'),
            'NIP'=> $request->input('NIP'),
            'Jabatan'=> $request->input('Jabatan'),
            'Email'=> $request->input('Email')
        ];
        DataNamaDosen::where('NamaDosen',$id)->update($data);
        return redirect('/NamaDosen')->with('success','Data Berhasil diUpdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function DetailDataDosen( $id){
        $data = DataNamaDosen::where('NamaDosen',$id)->first();
        return view('NamaDosen.DetailNamaDosen')->with('data',$data);
    }
    public function HapusDataDosen(string $id)
    {
        DataNamaDosen::where('NamaDosen',$id)->delete();
        return redirect('/NamaDosen')->with('success','Data Sudah Dihapus!');
    }
}
