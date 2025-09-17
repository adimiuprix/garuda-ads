<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        $categories = Category::with(['products.plans'])->get();

        return view('member.dashboard', [
            'title' => 'Dashboard Member',
            'username' => $user->username,
            'categories' => $categories,
        ]);
    }

    public function product(Request $request, $product)
    {
        $d_prod = Product::where('slug', $product)->firstOrFail();

        return view('member.product', [
            'title' => 'Detail Product',
            'product_name' => $d_prod->name,
            'description' => $d_prod->description,
            'plans' => $d_prod->plans,
        ]);
    }

    public function profile()
    {
        $user = Auth::user();

        return view('member.profile', [
            'title' => 'Profile Member',
            'username' => $user->username,
            'email' => $user->email,
            'time_created' => $user->created_at,
        ]);
    }

    public function upgrade()
    {
        $user = Auth::user();

        $plans = Plan::with('benefits')->get();
        $activePlanId = $user->plan_id;

        return view('member.upgrade', [
            'title' => 'Upgrade Member',
            'username' => $user->username,
            'email' => $user->email,
            'plans' => $plans,
            'active_plan' => $activePlanId,
        ]);
    }
}
