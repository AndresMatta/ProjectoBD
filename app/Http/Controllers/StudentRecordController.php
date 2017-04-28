<?php

namespace App\Http\Controllers;

use App\StudentRecord;
use Illuminate\Http\Request;

class StudentRecordController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  integer
     * @return \Illuminate\Http\Response
     */
    public function show($subjectId)
    {
        $records = StudentRecord::where('subject_id', $subjectId)->latest()->get();

        $subject = \App\Subject::where('id', $subjectId)->first();

        return view('subjects.show', [
            'records' => $records,
            'subject' => $subject
        ]);
    }

    /**
     * Display the specific recor for the student.
     *
     * @param  integer
     * @return \Illuminate\Http\Response
     */
    public function record($subjectId, $studentId)
    {
        $record = StudentRecord::where('subject_id', $subjectId)
                               ->where('student_id', $studentId)
                               ->first();

        return view('students.record', [
            'record' => $record
        ]);
    }
}
