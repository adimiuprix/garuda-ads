<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Product;
use App\Models\Category;
use App\Models\Invoice;
use HiFolks\RandoPhp\Randomize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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
            'user_plan' => Auth::check() ? Auth::user()->plan_id : null,
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
        $user_invoice = Invoice::where('invoice_number', $invoice)->with('plan')->first();

        if (!$user_invoice) {
            return redirect()->route('dashboard')->with('error', 'Invoice tidak ditemukan.');
        }
    
        return view('member.invoice', [
            'title' => 'Invoice Member',
            'username' => $user->username,
            'email' => $user->email,
            'invoice' => $user_invoice,
        ]);
    }

    public function send_invoice($invoce_code){
        $invoice = Invoice::where('invoice_number', $invoce_code)->with('plan')->firstOrFail();

        $phone = "6285226483182";
        $message = "Saya sudah transfer untuk paket {$invoice->plan->plan_name} dengan nomor order {$invoice->invoice_number}.\n".
                   "Mohon di cek 🙏";

        $encodedMessage = urlencode($message);

        $waLink = "https://api.whatsapp.com/send?phone={$phone}&text={$encodedMessage}";

        return redirect()->away($waLink);
    }

    public function withdraw()
    {
        $user = Auth::user();

        return view('member.withdraw', [
            'title' => 'Penarikan Dana',
            'username' => $user->username,
            'email' => $user->email,
        ]);
    }
}
