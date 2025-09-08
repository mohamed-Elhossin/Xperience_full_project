<?php

namespace App\Http\Controllers;

use App\Models\Pay_course;
use Illuminate\Http\Request;

class PayCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Pay_course::all();
        return view('user.pages.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pay_course $pay_course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pay_course $pay_course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pay_course $pay_course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pay_course $pay_course)
    {
        //
    }
}
