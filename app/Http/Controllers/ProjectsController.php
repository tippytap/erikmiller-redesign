<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Project;
use Storage;

class ProjectsController extends Controller
{
    public function __construct(){
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.home', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
            'description' => 'required',
            'blurb' => 'required|max:255'
        ]);

        Project::create([
            'title' => str_replace(" ", "-", $request->input('title')),
            'description' => $request->input('description'),
            'link' => $request->input('link'),
            'blurb' => $request->input('blurb'),
            'background' => $request->input('background'),
        ]);

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $title
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $project = Project::find($title);
        return view('projects.show', ['project' => $project]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  String  $title
     * @return \Illuminate\Http\Response
     */
    public function edit($title)
    {
        $project = Project::find($title);
        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $title)
    {
        $project = Project::find($title);
        $project->title = str_replace(" ", "-", $request->input('title'));
        $project->description = htmlentities($request->input('description'));
        $project->link = $request->input('link');
        $project->background = $request->input('background');
        $project->blurb = $request->input('blurb');
        $project->save();
        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  String  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy($title)
    {
        Project::destroy($title);
        return redirect('/projects');
    }
}
