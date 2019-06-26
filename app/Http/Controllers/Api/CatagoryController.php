<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\catagory;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagory = catagory::all();
        if (count($catagory) <= 0) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'Kategori Tidak Ada'
            ];
            return response()->json($response,404);
        }
        $response = [
                'success' =>true,
                'data' => $catagory,
                'massage' =>'Kategori Berhasil di munculkan.'
            ];
            return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. tampung semua inputan ke $inputan
          $input = $request->all();
        //2. buat validasi di tampung ke $validator
        $validator = Validator::make($input,[
            'nama_catagory' => 'required'
        ]);
        //3. cek validasi
        if ($validator->fails()) {
            $response = [
              'success' =>false,
                'data' => 'validator error',
                'massage' =>$validator->error()
            ];
            return response()->json($response,404);

        }

        $catagory = new catagory;
        $catagory->nama_catagory = $request->nama_catagory;
        $catagory->slug = str_slug($request->nama_catagory,'-');
        $catagory->save();
        //4. buat fungsi untuk menghandle semua inputan ->
        //dimasukan ke table
        $catagory = catagory::create($input);
       //5.menampilkan response
          $response = [
                'success' =>true,
                'data' => $catagory,
                'massage' =>'berhasil.'
            ];
            //6.tampilkan berhasil
            return response() ->json($response,200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catagory = catagory::find($id);
        if (!$catagory) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'Kategori tidak di temukan'
            ];
            return response() ->json($response,404);
        }
        $response = [
                'success' =>true,
                'data' => $catagory,
                'massage' =>$catagory->nama_catagory.' berhasil ditampilkan.'
            ];
            return response() ->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $catagory = catagory::find($id);
          $input = $request->all();
            if (is_null($catagory)) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'siswa tidak di temukan'
            ];
            return response() ->json($response,404);
        }
         $validator = Validator::make($input,[
            'nama_catagory' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
              'success' =>false,
                'data' => 'validator error',
                'massage' =>$validator->error()
            ];
            return response()->json($response,500);

        $catagory->nama_catagory = $input['nama_catagory'];
        $catagory->save();
        $response = [
                'success' =>true,
                'data' => $catagory,
                'massage' =>$catagory->nama_catagory ' berhasil di edit.'
            ];
            return response()->json($response,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory = catagory::find($id);
          if (!$catagory) {
            $response = [
                'success' =>false,
                'data' => 'gagal menghapus',
                'massage' =>'siswa tidak di temukan'
            ];
            return response() ->json($response,404);
        }
           $catagory->delete();
             $response = [
                'success' =>true,
                'data' => $catagory,
                'massage' => $catagory->nama_catagory.' berhasil dihapus.'
            ];
            return response()->json($response,200);
    }
}
