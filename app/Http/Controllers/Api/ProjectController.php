<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Message;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
	{
		$projects = Project::with("type", "technologies")->get();

		return response()->json(
			[
				"response" => "success",
				"data" => $projects
			]
		);
	}

	public function show(Project $project)
	{
		$project->load("type", "technologies");

		return response()->json(
			[
				"response" => "success",
				"data" => $project
			]
		);
	}
}
