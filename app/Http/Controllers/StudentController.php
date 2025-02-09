<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function getStudents()
    {
        $data = new \App\Models\Student;
        echo $data->testfn();
        $students = \App\Models\Student::all();
        return view('students', ['data' => $students]);
    }

    function addStudents(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        if ($student) {
            echo "New Student added";
            return redirect('/students');
        }
        return 'add student called';
    }

    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            echo "Deleted";
            return redirect('students');
        }
    }

    function edit($id)
    {
        $student = Student::find($id);
        return view('edit', ['data' => $student]);
    }
    function editStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        if ($student->save()) {
            return redirect('students');
        } else {
            return "Update Failed";
        }
    }
    function search(Request $request)
    {
        $studentData=Student::where('name','like',"%$request->search%")->get();
        return view('students',['data'=>$studentData,'search'=>$request->search]);
    }
}
