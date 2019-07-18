<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tag;
use App\artikel;
use App\catagory;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = artikel::orderBy('created_at', 'desc')->take(4)->get();
        // dd($artikel);
        return view('frontend.index', compact('artikel'));
    }

    public function blog()
    {
        $artikel = artikel::orderBy('created_at', 'desc')->panigate();
        $catagory = catagory::all();
        $tag = tag::all();
        return view('frontend.blog', compact('artikel', 'tag', 'catagory'));
    }

    public function singleblog(artikel $artikel)
    {
        $catagory = catagory::all();
        $tag = tag::all();
        return view('frontend.single-post', compact('artikel', 'tag', 'catagory'));
    }

    public function blogtag(tag $tag)
    {
        $artikel = $tag->artikel()->latest()->paginate(5);
        $catagory = catagory::all();
        $tag = tag::all();
        return view('frontend.archived', compact('artikel', 'tag', 'catagory'));
    }
    public function blogcatagory(catagory $catagory)
    {
        $artikel = $catagory->artikel()->latest()->panigate(5);
        $catagory = catagory::all();
        $tag = tag::all();
        return view('frontend.blog', compact('artikel', 'tag', 'catagory'));
    }

    public function videoolahraga()
    { }
}
