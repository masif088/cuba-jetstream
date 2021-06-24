<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Faculty;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(): view
    {
        $faculties = Faculty::whereCollegeId(auth()->user()->college->id)->withCount('studyPrograms')->get();
        return view('pages.mbkm-college.faculty.index', compact('faculties'));
    }


    public function create(): view
    {
        return view('pages.mbkm-college.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
