<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CollegeController extends Controller
{

    public function index(): view
    {
        $colleges = College::with(['faculties' => function ($q) {
            $q->withCount('studyPrograms');
        }])->withCount('faculties')->get();
        return view('pages.mbkm-center.college.index', compact('colleges'));
    }


    public function create(): view
    {
        return view('pages.mbkm-center.college.create');
    }


    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
