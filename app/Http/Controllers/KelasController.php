<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Auth;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::all();
        return view('student.dashboard.classes.index', compact('kelas'));
    }

    public function show($id){
        $kelas = Kelas::findOrFail($id);
        return view('student.dashboard.classes.show', compact('kelas'));
    }

    public function apply(Kelas $kelas){
    $user = Auth::user();

    $student = $user->student;

    if (!$student) {
        $student = Student::create([
            'user_id' => $user->id,
            'kelas_id' => $kelas->id,
            'enrollment_date' => now(),
        ]);

        return redirect()->route('kelas')->with('success', 'Successfully applied to the class!');
    }

    if ($student->kelas_id == $kelas->id) {
        return redirect()->back()->with('info', 'You are already enrolled in this class.');
    }

    $student->update([
        'kelas_id' => $kelas->id,
        'enrollment_date' => now(),
    ]);

    return redirect()->route('kelas')->with('success', 'Successfully applied to the class!');
    }

}
