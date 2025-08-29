<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ], [
            'name.required' => 'حقل الاسم مطلوب',
            'name.string' => 'حقل الاسم يجب أن يكون نصًا',
            'name.max' => 'الاسم طويل جدًا',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة',
            'email.max' => 'البريد الإلكتروني طويل جدًا',
            'subject.required' => 'حقل الموضوع مطلوب',
            'subject.string' => 'الموضوع يجب أن يكون نصًا',
            'subject.max' => 'الموضوع طويل جدًا',
            'message.required' => 'حقل الرسالة مطلوب',
            'message.string' => 'الرسالة يجب أن تكون نصًا',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', 'تم ارسال رسالتك بنجاح. شكراً لك!');
    }
}
