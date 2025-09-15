<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}
