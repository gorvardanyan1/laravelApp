<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public  function index()
    {
        $students = Student::all();

        return view('students.index', ["students" => $students]);
    }

    public  function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', ["student" => $student]);
    }
    public  function create()
    {
        return view('students.create');
    }
    public function store()
    {
        $student = new Student();
        $student->firstName = request('firstName');
        $student->lastName = request('lastName');
        $student->bornYear = request('bornYear');
        $student->active = request('active');
        $student->profile = request('profile');
        $student->master = request('master');
        $student->active = "1";

        $student->save();
        return redirect('/')->with("mssg", "Student data Added");
    }
    public function destroy($id)
    {
        $student =Student::findOrFail($id);
        $student->delete();
       return redirect('/')->with("mssg", "Student is Deleted");
    }
}
