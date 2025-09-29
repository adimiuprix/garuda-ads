<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index(){
        $members = User::select('id', 'username', 'email', 'is_active', 'plan_id')->with('plan')->get();

        return view('admin.member.index', [
            'members' => $members
        ]);
    }

    public function edit(Request $request, $id){
        $member = User::with('plan')->findOrFail($id)->makeHidden(['password']);
        $plans = Plan::all();

        if ($request->isMethod('post')) {
            $request->validate([
                'fullname' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users,username,' . $id,
                'email'    => 'required|email|unique:users,email,' . $id,
                'phone'    => 'nullable|string|max:20',
                'status'=> 'required|in:0,1',
                'plan'  => 'nullable|exists:plans,id',
            ]);

            $member = User::findOrFail($id);

            $member->update([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'is_active'=> $request->status,
                'plan_id'  => $request->plan,
            ]);

            return redirect()->route('admin.member.edit', $member->id)->with('success', 'Data member berhasil diperbarui');
        };

        return view('admin.member.edit', [
            'member' => $member,
            'plans' => $plans
        ]);
    }

    public function destroy($id){
        $member = User::find($id);
        if ($member) {
            $member->delete();
            return redirect()->back()->with('success', "Member ID $id berhasil dihapus ✨");
        }
        return redirect()->back()->with('error', "Member ID $id tidak ditemukan 💔");
    }
}
