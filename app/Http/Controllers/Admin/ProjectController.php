<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$types = Type::all();
		$technologies = Technology::all();

        return view('projects.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->all();

		$project = new Project();

		$project->name = $data['name'];
		$project->client = $data['description'];
		$project->type_id = $data['type_id'];
		$project->period = $data['period'];
		$project->description = $data['description'];

		$project->save();

		$project->technologies()->attach($data['technology_ids']);

		return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
		$technologies = Technology::all();

        return view('projects.edit', compact('project', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->all();

		$project = Project::find($id);

		$project->name = $data['name'];
		$project->client = $data['description'];
		$project->period = $data['period'];
		$project->description = $data['description'];

		$project->save();

		if ($request->has('technology_ids')) {
			$project->technologies()->sync($data['technology_ids']);
		} else {
			$project->technologies()->detach();
		}

		return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
		$project->technologies()->detach();

        $project->delete();
        return redirect()->route('projects.index');
    }
}
