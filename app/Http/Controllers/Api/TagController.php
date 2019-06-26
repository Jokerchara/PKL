<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\facades\validator;
use App\tag;

use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = tag::all();
        if (count($tag) < 0) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'tag tidak di temukan'
            ];
            return response()->json($response,404);
        }
        $response = [
                'success' =>true,
                'data' => $tag,
                'massage' =>'Berhasil di munculkan.'
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
            'nama' => 'required',
            'slug' => 'required'
        ]);
        //3. cek validasi
        if ($validator->fails()) {
            $response = [
              'success' =>false,
                'data' => 'validator error',
                'massage' =>$validator->error()
            ];
            return response()->json($response,500);

        }
        //4. buat fungsi untuk menghandle semua inputan ->
        //dimasukan ke table
        $tag = tag::create($input);
       //5.menampilkan response
          $response = [
                'success' =>true,
                'data' => $tag,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
