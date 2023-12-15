<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataMahasiswaa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilmahasiswa()
    {
        $Mahasiswa = DataMahasiswa::orderBy('NIM','asc')->paginate(15);
        return view('NamaMahasiswa.TampilNamaMahasiswa')-> with('Mahasiswa' ,$Mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Tambahmahasiswa()
    {
        return view('NamaMahasiswa.InputNamaMahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function Kirimdata(Request $request)
    {
        Session::flash('NamaMahasiswa',$request->NamaMahasiswa);
        Session::flash('NIM',$request->NIM);
        Session::flash('Semester',$request->Semester);
        Session::flash('Email',$request->Email);
         $request->validate([
             'NamaMahasiswa'=> 'required',
             'NIM' => 'required|numeric',
             'Semester'=> 'required',
             'Email'=> 'required'
         ],[
             'NamaMahasiswa.required'=> 'Nama Tidak Boleh Kosong!',
             'NIM.required'=>'NIM Tidak Boleh Kosong',
             'Semester.required'=>'Semester tidak boleh kosong',
             'Email.required'=>'Email tidak Boleh dikosongkan!',
         ]);
         $Mahasiswa =[
             'NamaMahasiswa'=> $request->input('NamaMahasiswa'),
             'NIM'=> $request->input('NIM'),
             'Semester'=> $request->input('Semester'),
             'Email'=> $request->input('Email')
         ];
         DataMahasiswa::create($Mahasiswa);
         return redirect('NamaMahasiswa')->with('success','Data Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function DetailMahasiswa(string $id)
    {
        $Mahasiswa = DataMahasiswa::where('NamaMahasiswa',$id)->first();
        return view('NamaMahasiswa.DetailNamaMahasiswa')->with('Mahasiswa',$Mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function EditNamaMahasiswa(string $id)
    {
        $Mahasiswa = DataMahasiswa::where('NamaMahasiswa', $id)->first();
        return view('NamaMahasiswa.EditNamaMahasiswa')->with('Mahasiswa',$Mahasiswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateMahasiswa(Request $request, string $id)
    {
        $request->validate([
            'NamaMahasiswa'=> 'required',
            'NIM' => 'required|numeric',
            'Semester'=> 'required',
            'Email'=> 'required'
        ],[
            'NamaMahasiswa.required'=> 'Nama Tidak Boleh Kosong!',
            'NIM.required'=>'NIM Tidak Boleh Kosong',
            'Semester.required'=>'Semester tidak boleh dikosongkan!',
            'Email.required'=>'Email tidak Boleh dikosongkan!',
        ]);
        $Mahasiswa =[
            'NamaMahasiswa'=> $request->input('NamaMahasiswa'),
            'NIM'=> $request->input('NIM'),
            'Semester'=> $request->input('Semester'),
            'Email'=> $request->input('Email')
        ];
        DataMahasiswa::where('NamaMahasiswa',$id)->update($Mahasiswa);
        return redirect('/NamaMahasiswa')->with('success','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function HapusNamaMahasiswa(string $id)
    {
        DataMahasiswa::where('NamaMahasiswa',$id)->delete();
        return redirect('/NamaMahasiswa')->with('success','Data Sudah Dihapus!');
    }
}
