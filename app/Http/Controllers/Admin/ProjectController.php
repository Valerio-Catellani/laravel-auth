<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Functions\Helpers as Help;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        foreach ($projects as $project) {
            $project->programming_languages = Help::getFormattedWordsWithComma($project->programming_languages);
            $project->frameworks = Help::getFormattedWordsWithComma($project->frameworks);
        }
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$form_data = $request->validated();
        $form_data = $request->all();
        $form_data["slug"] =  Project::generateSlug($form_data["title"]);
        $new_project = new Project();
        $new_project->fill($form_data);
        $new_project->save();
        return redirect()->route("admin.projects.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', "Project (id:{$project->id}): {$project->title} eliminato con successo");
    }
}
