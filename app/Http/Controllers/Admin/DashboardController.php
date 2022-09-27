<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();

        return view('admin.dashboard',compact('categories','users','admins'));
    }
}
