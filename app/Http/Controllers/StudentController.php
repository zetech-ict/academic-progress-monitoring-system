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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'admission' => 'required|max:191',
            'course' => 'required|string',
            'unit1' => 'required',
            'marks1' => 'required|string',
            'unit2' => 'required',
            'marks2' => 'required|string',
            'unit3' => 'required',
            'marks3' => 'required|string',
            'unit4' => 'required',
            'marks4' => 'required|string',
            'unit5' => 'required',
            'marks5' => 'required|string',
            'comment' => 'required|string',
        ]);

        $data = $request->only([
           'admission',
           'course',
           'unit1',
           'marks1',
            'unit2',
            'marks2',
            'unit3',
            'marks3',
            'unit4',
            'marks4',
            'unit5',
            'marks5',
           'comment',
        ]);

        $student = Student::create($data);

        if($request->hasFile('image')) {
            $student->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect()->route('dashboard')->with(['status' =>"Student details have been updated"]);

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
    public function edit($id)
    {
        $student = Student::where('id', $id)->first();

        return view('components.dashboard.edit-student', compact('student'));
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
        //
    }
}
