<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\backend\admin\StoreAdminRequest;
use App\Http\Requests\backend\admin\UpdateAdminRequest;

class AdminController extends Controller
{

    public function showHomeDashboard(){
        return view('backend.home');
    }

    public function showLoginAdmin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:8|max:30'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return view('backend.home');
        } else {
            return redirect()->route('showLoginAdmin')->with('fail', 'Incorrect credenttials');
        }
    }

    public function all_admins()
    {
        $localeLang = App::getLocale();
        $admins = DB::table('admins')->select('id', $localeLang.'_type', 'status',$localeLang.'_type', $localeLang.'_gender', 'email', $localeLang.'_first_name', 'created_at')->get();
        return view('backend.admins.all_admins', compact('admins', 'localeLang'));
    }
    

    public function create_admin()
    {
        return view('backend.admins.create_admin');
    }

    public function store_admin(StoreAdminRequest $request, $land)
    {
        $data = $request->except('_token', 'ar_password_confirmation', 'password_confirmation');

        if (DB::table('admins')->insert($data)) {
            return redirect()->route('all_admins', app()->getLocale())->with('success', 'Admin created successfully!')->with('delay', 3);
        } else {
            return back()->with('error', 'Error creating admin')->withInput();
        }
    }

    public function delete_admin($lang, $id)
    {
        DB::table('admins')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Successfully Operation!');
    }

    public function edit_admin($land, $id)
    {
        $admin = DB::table('admins')->where('id', $id)->first();
        return view('backend.admins.edit_admin', compact('admin'));
    }

    public function update_admin(UpdateAdminRequest $request, $land, $id){
        $data = $request->except('_token', 'password_confirmation');
        DB::table('admins')->where('id', $id)->update($data);
        return redirect()->route('all_admins', app()->getLocale())->with('success', 'Successfully Operation!');
    }
}