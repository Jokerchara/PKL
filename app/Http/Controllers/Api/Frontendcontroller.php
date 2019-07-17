<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\artikel;
use App\catagory;
use App\tag;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::orderBy('created_at', 'desc')->take()->get();
        return view('frontend.index', compact('artikel'));
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
        //
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

    public function kategori()
    {
        $catagory = catagory::take(2)->get();
        $response = [
            'success' => true,
            'data' => $catagory,
            'massage' => 'Berhasil di munculkan.'
        ];
        return response()->json($response, 200);
    }
    public function tag()
    {
        $tag = tag::take(3)->get();
        $response = [
            'success' => true,
            'data' => $tag,
            'massage' => 'Berhasil di munculkan.'
        ];
        return response()->json($response, 200);
    }

    public function videoolahraga()
    {
        $artikel = artikel::take(4)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'massage' => 'berhasil.'
        ];
        return response()->json($response, 200);
    }
    public function news()
    {
        $artikel = artikel::take(3)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'massage' => 'berhasil.'
        ];
        return response()->json($response, 200);
    }

    public function footer1()
    {
        $artikel = artikel::take(1)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'massage' => 'berhasil.'
        ];
        return response()->json($response, 200);
    }

    public function videoterakhir()
    {
        $artikel = artikel::take(5)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'massage' => 'berhasil.'
        ];
        return response()->json($response, 200);
    }
}

        //                 'artikel'=>$artikel,
        //                 'tag'=>$tag,
        //                 $tag = tag::all();
        // $artikel = artikel::all();
