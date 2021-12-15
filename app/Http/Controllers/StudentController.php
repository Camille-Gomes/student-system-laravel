<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index', [
            "students" => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create', [
            "student" => new Student()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ine' => 'required|max:11',
            'lastname' => 'required',
            'name' => 'required',
            'birthdate' => 'required',
            'degree' => 'required',
            'mail' => 'required',
            'phone' => 'required|max:10',
            'nationality' => 'required'
        ]);

        if ($request->id !== null) {
            $student = Student::find($request->id) ?? new Student();
        } else {
            $student = new Student();
        }

        $student->ine = $request->ine;
        $student->lastname = $request->lastname;
        $student->name = $request->name;
        $student->birthdate = $request->birthdate;
        $student->degree = $request->degree;
        $student->mail = $request->mail;
        $student->phone = $request->phone;
        $student->nationality = $request->nationality;
        $student->save();

        return redirect()->route('students.index')->with('success', "Vous avez ajouté un nouvel étudiant");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.create', [
            "student" => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);

        return redirect('students')->with('success', "L'étudiant à bien été supprimé");
    }
}

