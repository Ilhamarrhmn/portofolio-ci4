<?php

namespace App\Controllers;
use App\Models\Project;

class Home extends BaseController
{
    public function index(): string
    {	
        $projects = new Project();
        $data = $projects->getProjects();
        return view('index', compact('data'));
    }
}
