<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('about', ['about' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'about_text' => 'required'
        ]);

        About::create([
            'title' => $request->input('title'),
            'about_text' => $request->input('about_text')
        ]);

        return redirect('/about');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  String $title
     * @return \Illuminate\Http\Response
     */
    public function edit($title)
    {
        About::find($title);
        return view('about.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $title)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  String $title
     * @return \Illuminate\Http\Response
     */
    public function destroy($title)
    {
        About::destroy($title);
        return redirect('/');
    }
}
