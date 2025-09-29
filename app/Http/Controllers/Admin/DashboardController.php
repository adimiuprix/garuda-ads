<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $tot_user = User::count();

        return view('admin.dashboard', [
            'tot_user' => $tot_user
        ]);
    }

}
