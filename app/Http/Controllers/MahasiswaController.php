<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use App\Models\KelasModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::with('kelas')->get();
        return view('mahasiswa.mahasiswa')
            ->with('mhs', $mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return  view('mahasiswa.create_mahasiswa')
        // ->with('url_form',url('/mahasiswa'));

        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa', ['kelas' => $kelas])
        ->with('url_form',url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'kelas_id' => 'required',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ]);

        MahasiswaModel::insert($request->except(['_token']));

        //$data = MahasiswaModel::create($request->except(['_token']));
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::where('id',$id)->get();
        return view('mahasiswa.detail_mahasiswa', ['Mahasiswa' => $mahasiswa[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::where('id',$id)->get();
        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa', ['kelas' => $kelas])
                    ->with('mhs',$mahasiswa[0])
                    ->with('url_form',url('/mahasiswa/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'nim'=> 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama'=> 'required|string|max:50',
            'kelas_id' => 'required',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',

        ]);

        Mahasiswamodel::where('id', '=', $id)->update($request->except(['_token','_method']));
        return redirect('mahasiswa')
            ->with('success','Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswamodel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
        ->with ('success', 'Mahasiswa Berhasil Dihapus');
    }
}
