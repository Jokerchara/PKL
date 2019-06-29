<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use Session;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagory = catagory::orderBy('created_at','desc')->get();
        return view('backend.catagory.index', compact('catagory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagory = catagory::all();
        return view ('backend.catagory.create');
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
            'nama_catagory' => 'required|unique:catagories'
        ]);
        $catagory = new catagory();
        $catagory->nama_catagory = $request->nama_catagory;
        $catagory->slug = str_slug($request->nama_catagory, '-');
        $catagory->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $catagory->nama_catagory."</b>"
        ]);
        return redirect()->route('catagory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagory = catagory::findOrfail($id);
        return view('backend.catagory.edit',compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_catagory' => 'required'
        ]);
        $catagory = catagory::findOrfail($id);
        $catagory->nama_catagory = $request->nama_catagory;
        $catagory->slug = str_slug($request->nama_catagory, '-');
        $catagory->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil mengedit<b>"
                         . $catagory->nama_catagory."</b>"
        ]);
        return redirect()->route('catagory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory = catagory::findOrfail($id)->delete();
        // Session::flash("flash_notification",[
        //     "level" => "Success",
        //     "message" => "Berhasil menghapus<b>"
        //                  . $catagory->nama_catagory."</b>"
        // ]);
        return redirect()->route('catagory.index');

    }
}
