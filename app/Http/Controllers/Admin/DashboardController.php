<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(){
        $data_array = array(
            'title'   => 'DashBoard',
        );
        $users = User::count();
        $candidates = Candidate::count();
        return view('admin.dashboard' , compact('users' , 'candidates'));
    }

    public function index(Request $request){
        $users = User::all();
        return view('admin.user.index',['users' => $users]);
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
