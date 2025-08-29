<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20'],
            'country' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'college' => ['required', 'string', 'max:255'],
            'university' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ], [
            'name.required' => 'حقل الاسم مطلوب',
            'name.string' => 'حقل الاسم يجب أن يكون نصًا',
            'name.max' => 'حقل الاسم كبير جدًا',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة',
            'email.unique' => 'البريد الإلكتروني مستخدم مسبقًا',
            'phone.required' => 'حقل رقم الهاتف مطلوب',
            'phone.string' => 'حقل رقم الهاتف يجب أن يكون نصًا',
            'phone.max' => 'رقم الهاتف طويل جدًا',
            'country.required' => 'حقل الدولة مطلوب',
            'city.required' => 'حقل المدينة مطلوب',
            'college.required' => 'حقل الكلية مطلوب',
            'university.required' => 'حقل الجامعة مطلوب',
            'password.required' => 'حقل كلمة المرور مطلوب',
            'password.confirmed' => 'كلمة المرور غير متطابقة',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'college' => $request->college,
            'university' => $request->university,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));


        return redirect(route('login'))->with('success', 'تم إنشاء الحساب بنجاح');
    }
}
