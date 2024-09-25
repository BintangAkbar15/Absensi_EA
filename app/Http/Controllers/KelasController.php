<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //showing data to table
        $max_tampil = 4;
        
        if(request("search")){
            $data = Kelas::where('name','like','%'.request("search").'%')->paginate($max_tampil)->withQueryString();
        }
        else{
            $data = Kelas::orderBy('name','asc')->paginate($max_tampil)->withQueryString();
        }
        return view('kelasshow',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //POST data
        $request->validate([
            'kelas' => 'required',
            'bangku_tersisa' => 'required|digits_between:1,2|numeric'
        ],[
            'kelas.required' => 'kelas harus diisi',
            'bangku_tersisa.required'=>'Jumlah siswa harus diisi',
            'bangku_tersisa.numeric'=>'Jumlah siswa harus berupa angka',

        ]);


        $data = [
            'name' => $request->input('kelas'),
            'bangku_tersisa' => $request->input('bangku_tersisa')
        ];

        Kelas::create($data);
        return redirect()->route('kelas.tampil')->with('success',"Berhasil memasukkan data");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Edit data
        $request->validate([
            'task' => 'required|min:3|max:50'
        ],[
            'task.required' => 'Task harus diisi',
            'task.min' => 'Task minimal 3 karakter',
            'task.max' => 'Task maximal 3 karakter'
        ]);


        $data = [
            'task' => $request->input('task'),
            'is_done' => $request->input('is_done'),
        ];

        Kelas::where('task', $id)->update($data);
        return redirect()->route('Kelas')->with('success',"Berhasil mengedit data");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete data
        Kelas::where('id',$id)->delete();
        return redirect()->route('Kelas')->with('success',"Berhasil menghapus data");
    }
}
