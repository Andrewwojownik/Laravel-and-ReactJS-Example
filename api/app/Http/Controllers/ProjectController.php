<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use App\Models\Project;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    public function index()
    {
        return Project::get()->toJson();
    }

    public function show(int $id)
    {
        return Project::where('id', '=', $id)->firstOrFail()->toJson();
    }

    public function create(ProjectCreateRequest $request)
    {
        $validated = $request->validated();

        $project = new Project();
        $project->name = $validated['name'];
        $project->description = $validated['description'];
        $project->created_by = $validated['created_by'];
        $project->save();

        return response()->json(['id' => $project->id], 201);
    }
}
