<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\Field;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fields = Field::all();

        return view("user.pages.instructor", compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'phone'     => ['required', 'string', 'max:20'],
            'email'     => ['required', 'email', 'max:255', 'unique:instructors,email'],
            'linkedIn'  => ['required', 'url'],
            'field_id'  => ['required', 'exists:fields,id'],
            'cv'        => ['required', 'file', 'mimes:pdf'],
        ], [
            'name.required'      => 'حقل الاسم مطلوب',
            'name.max'           => 'الاسم طويل جداً',
            'phone.required'     => 'حقل رقم الهاتف مطلوب',
            'phone.max'          => 'رقم الهاتف طويل جداً',
            'email.required'     => 'حقل البريد الإلكتروني مطلوب',
            'email.email'        => 'البريد الإلكتروني غير صحيح',
            'email.unique'       => 'البريد الإلكتروني مستخدم من قبل',
            'linkedIn.required'  => 'حقل لينكدإن مطلوب',
            'linkedIn.url'       => 'رابط لينكدإن غير صحيح',
            'cv.required'        => 'حقل السيرة الذاتية مطلوب',
            'cv.file'            => 'السيرة الذاتية يجب أن تكون ملف',
            'cv.mimes'           => 'يجب أن تكون السيرة الذاتية ملف PDF فقط',
        ]);

        // حفظ ملف الCV وارشفته
        $cvPath = $request->file('cv')->store('cvs', 'public');

        Instructor::create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'linkedIn'  => $request->linkedIn,
            'field_id'  => $request->field_id,
            'cv'        => $cvPath,
        ]);

        return back()->with('success', 'تم إرسال طلبك بنجاح. سنقوم بمراجعة طلبك والتواصل معك قريباً.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
