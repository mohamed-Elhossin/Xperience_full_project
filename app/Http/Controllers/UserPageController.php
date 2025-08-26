<?php

namespace App\Http\Controllers;

use App\Models\UserPage;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'user.pages.index'
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view(
            'user.pages.contact'
        );
    }
}
