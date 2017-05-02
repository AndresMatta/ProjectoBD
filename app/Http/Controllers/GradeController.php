<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Subject;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::latest()->get();

        return view('grades.index', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = \App\Teacher::latest()->get();

        return view('grades.create', ['teachers' => $teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cod' => 'required|unique:grades',
            'name' => 'required',
            'teacher_id' => 'required'
        ]);

        Grade::create([
            'cod' => request('cod'),
            'name' => request('name'),
            'teacher_id' => request('teacher_id')
        ]);

        return redirect('/grades');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        $subjects = Subject::latest()->get();

        return view('grades.show', [
            'grade' => $grade,
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $this->validate($request, [
            'subject_id' => 'required'
        ]);

        $subject = Subject::find($request->subject_id);

        $subject->grade_id = $grade->id;

        $subject->save(); 

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }

}
