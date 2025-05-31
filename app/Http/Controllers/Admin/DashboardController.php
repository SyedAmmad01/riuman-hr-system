<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data_array = array(
            'title'   => 'DashBoard',
        );
        $users = User::count();
        $candidates = Candidate::count();
        return view('admin.dashboard', compact('users', 'candidates'));
    }

    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }

    public function add(Request $request)
    {
        return view('admin.user.add');
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        return view('admin.user.edit', ['users' => $users]);
    }

    // public function save(Request $request)
    // {
    //     // dd($request->all());
    //     // Basic validation (without unique rule)
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'password' => 'required|string|min:6',
    //     ]);

    //     // Check if name already exists
    //     $nameExists = User::where('name', $request->name)->exists();

    //     // Check if email already exists
    //     $emailExists = User::where('email', $request->email)->exists();

    //     $errors = [];

    //     if ($nameExists) {
    //         $errors['name'] = 'This name is already registered.';
    //     }

    //     if ($emailExists) {
    //         $errors['email'] = 'This email is already registered.';
    //     }

    //     // If either exists, return with errors
    //     if (!empty($errors)) {
    //         return redirect()->back()
    //             ->withInput()
    //             ->withErrors($errors);
    //     }

    //     // Save user if no duplicates
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = bcrypt($request->password);
    //     $user->plain_password = $request->password;
    //     $user->status = $request->status;
    //     $user->city = $request->city;
    //     $user->office_address = $request->office_address;
    //     $user->role = $request->role;
    //     $user->save();

    //     return redirect()->back()->with('success', 'User Added Successfully');
    // }


    public function save(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            'status' => 'required',
            'city' => 'required',
            'office_address' => 'required',
            'role' => 'required|string|max:255',
        ]);

        // Save user logic
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'status' => $validated['status'],
            'city' => $validated['city'],
            'office_address' => $validated['office_address'],
            'role' => $validated['role'],
        ]);

        return response()->json(['success' => true]);
    }


    // public function update(Request $request)
    // {
    //     $user = User::find($request->id);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = bcrypt($request->password);
    //     $user->plain_password = $request->password;
    //     $user->status = $request->status;
    //     $user->city = $request->city;
    //     $user->office_address = $request->office_address;
    //     $user->role = $request->role;
    //     $user->update();
    //     return redirect()->back()->with('success', 'Users Updated Successfully');
    // }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'password' => 'required|string|min:6',
            'status' => 'required|in:0,1',
            'city' => 'required|in:0,1,2',
            'office_address' => 'required|string|max:255',
            'role' => 'required|string|max:50',
        ]);

        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->plain_password = $request->password;
        $user->status = $request->status;
        $user->city = $request->city;
        $user->office_address = $request->office_address;
        $user->role = $request->role;
        $user->save();

        return response()->json(['success' => true, 'message' => 'User updated successfully.']);
    }

    public function show($id)
    {
        $users = User::find($id);
        return response()->json($users);
    }
    public function delete(Request $request)
    {
        DB::delete('delete from users where id = ?', [$request->id]);
        return redirect()->back()->with('msg', 'Users Deleted Successfully');
    }

    public function status_update($id)
    {
        //get product status with the help of product ID
        $user = DB::table('users')
            ->select('status')
            ->where('id', '=', $id)
            ->first();

        //Check user status
        if ($user->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        //update product status
        $values = array('status' => $status);
        DB::table('users')->where('id', $id)->update($values);

        session()->flash('msg', ' Status has been changed successfully.');
        return redirect()->back();
    }
}
