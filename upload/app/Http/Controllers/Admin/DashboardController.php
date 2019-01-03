<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        return view('admin.Dashboard.show');
    }

}
