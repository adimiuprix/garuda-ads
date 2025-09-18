<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Product;
use App\Models\Category;
use App\Models\Invoice;
use HiFolks\RandoPhp\Randomize;
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

    public function product($product)
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

    public function upgradeProcess(Request $request)
    {
        $user = Auth::user();
        $plan_id = $request->input('plan_id');
        $randomize = strtoupper(Randomize::chars(10)->alphanumeric()->generate());

        Invoice::create([
            'invoice_number' => $randomize,
            'customer_id' => $user->id,
            'plan_id' => $plan_id,
            'invoice_date' => now(),
            'amount' => Plan::find($plan_id)->price,
            'issue_date' => now(),
            'due_date' => now()->addDays(1),
            'status' => 'pending',
        ]);

        return redirect()->route('invoice', ['invoice_number' => $randomize])->with('success', 'Plan berhasil diupgrade.');
    }

    public function invoice(Request $request)
    {
        $user = Auth::user();
        $invoice = $request->invoice_number;
        $user_invoice = Invoice::where('invoice_number', $invoice)->first();

        if (!$user_invoice || $user_invoice->customer_id !== $user->id) {
            return redirect()->route('dashboard')->with('error', 'Invoice tidak ditemukan.');
        }
    
        return view('member.invoice', [
            'title' => 'Invoice Member',
            'username' => $user->username,
            'email' => $user->email,
            'code_invoice' => $user_invoice->invoice_number,
        ]);
    }
}
