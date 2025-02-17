<?php

namespace App\Http\Controllers;

use App\Models\MateriMurid;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function markAsCompleted($materiId) {
        $student = auth()->user()->student;
    
        MateriMurid::updateOrCreate(
            ['student_id' => $student->id, 'materi_id' => $materiId],
            ['status_completion' => 'complete']
        );
    
        return back()->with('success', 'Material marked as completed!');
    }
    public function show(){
        $user = auth()->user();
        $appliedClass = $user->student->kelas()->with('materis')->get();

        foreach ($appliedClass as $class) {
            $totalMaterials = $class->materis->count();
            $completedMaterials = MateriMurid::where('student_id', $user->student->id)
                ->whereIn('materi_id', $class->materis->pluck('id'))
                ->where('status_completion', 'complete')
                ->count();
    
            $class->progress = $totalMaterials > 0 
                ? round(($completedMaterials / $totalMaterials) * 100, 2) 
                : 0;
        }

        return view('student.dashboard.profile', compact('user', 'appliedClass'));
    }
}
