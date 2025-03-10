<?php

// app/Http/Controllers/Admin/AboutController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about');
    }
}
