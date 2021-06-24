<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\StudyProgram;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudyProgramController extends Controller
{
    public function index(): view
    {
        $sp = StudyProgram::whereFacultyId(auth()->user()->faculty->id)->get();
        return view('pages.mbkm-faculty.study-program.index', compact('sp'));
    }


    public function create(): view
    {
        return view('pages.mbkm-faculty.study-program.create');
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
