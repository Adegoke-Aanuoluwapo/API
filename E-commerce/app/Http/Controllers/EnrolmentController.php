<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Batch;
class EnrolmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $batch = Batch::pluck('name', 'id');
        $student = Student::pluck('name', 'id');
        return view('enrollments/create', compact('batch', 'student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $enrollment = Enrollment::find($id);
        return view('enrollments.show')->with('enrollment', $enrollment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $enrollment= Enrollment::find($id);
        return view('enrollments.edit') -> with ('enrollment' ,$enrollment);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $enrollment =Enrollment::find($id);
        $input = $request->all();
        $enrollment ->update($input);
        return redirect('enrollments')->with('success', 'Registro actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $enrollment = Enrollment::find($id);
        $enrollment->delete();
    }
}
