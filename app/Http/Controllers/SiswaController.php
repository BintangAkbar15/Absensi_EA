<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //showing data to table
        $max_tampil = 4;
        
        if(request("search")){
            $data = Siswa::where('name','like','%'.request("search").'%')->paginate($max_tampil)->withQueryString();
        }
        else{
            $data = Siswa::orderBy('name','asc')->paginate($max_tampil)->withQueryString();
        }
        return view('student',compact('data'));
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
            'nama' => 'required|min:3|max:50',
            'nis' => 'required|min:10'
        ],[
            'nama.required' => 'nama harus diisi',
            'nama.min' => 'nama minimal 3 karakter',
            'nama.max' => 'nama maximal 3 karakter',
            'nis.required'=>'nis harus diisi',
            'nis.min'=>'nis harus berisi 10 karakter',

        ]);


        $data = [
            'nis' => $request->input('nis'),
            'name' => $request->input('nama')
        ];

        Siswa::create($data);
        return redirect()->route('siswa.tampil')->with('success',"Berhasil memasukkan data");
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

        Siswa::where('task', $id)->update($data);
        return redirect()->route('Siswa')->with('success',"Berhasil mengedit data");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete data
        Siswa::where('nis',operator: $id)->delete();
        return redirect()->route('siswa.tampil')->with('success',"Berhasil menghapus data");
    }
}
