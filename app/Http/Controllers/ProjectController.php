<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('dashboard.project.index', ['projects' => Project::latest()->Filter(request(['search']))->
        paginate(9)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required|min:3',
            'prjleader' => 'required|min:3',
            'start_date' => 'required|min:3',
            'end_date' => 'required|min:3',
            'nama_klien' => 'required|min:3',
            'progress' => 'required'
        ]);

        Project::create($validate);
        return redirect('/dashboard/project')->with(['success' => 'berhasil di tambah']);
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
    public function edit(Project $project)
    {
        return view('dashboard.project.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validate = $request->validate([
            'judul' => 'required|min:3',
            'prjleader' => 'required|min:3',
            'start_date' => 'required|min:3',
            'end_date' => 'required|min:3',
            'nama_klien' => 'required|min:3',
            'progress' => 'required'
        ]);

        $project->update($validate);
        return redirect('/dashboard/project')->with(['success' => 'berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/dashboard/project')->with(['success' => 'berhasil di hapus']);
    }
}
