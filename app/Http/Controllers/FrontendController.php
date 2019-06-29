<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tag;
use App\kategori;
use App\artikel;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = artikel::orderBy('created_at', 'desc')->take(4)->get();
        // dd($artikel);
        return view('frontend.index',compact('artikel'));
    }

    public function blog()
    {
        $artikel = artikel::orderBy('created_at','desc')->panigate();
        $kategori= kategori::all();
        $tag= tag::all();
        return view('frontend.blog',compact('artikel','tag','kategori'));
    }

    public function singleblog(artikel $artikel)
    {
        $kategori= kategori::all();
        $tag= tag::all();
        return view('frontend.single-blog',compact('artikel','tag','kategori'));
    }

    public function blogtag(tag $tag)
    {
        $artikel = $tag->artikel()->latest()->panigate(5);
        $kategori= kategori::all();
        $tag= tag::all();
        return view('frontend.blog',compact('artikel','tag', 'kategori'));
    }
    public function blogkategori(kategori $kategori)
    {
        $artikel = $kategori->artikel()->latest()->panigate(5);
        $kategori= kategori::all();
        $tag= tag::all();
        return view('frontend.blog', compact('artikel','tag','kategori'));
    }

    public function videoolahraga()
    {

    }
}
