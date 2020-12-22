<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    public function index()
    {
        return Project::get()->toJson();
    }
}
