<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function index(){
        $roadmap = Roadmap::all();
        return view ('student.dashboard.roadmap.index', compact('roadmap'));
    }

    public function show($id){
        $roadmap = Roadmap::findOrFail($id);
        return view ('student.dashboard.roadmap.show', compact('roadmap'));

    }
}
