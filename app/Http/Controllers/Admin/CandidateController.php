<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CandidateController extends Controller
{
    public function index(Request $request){
        $candidates = Candidate::all();
        return view('admin.candidate.index',['candidates' => $candidates]);
    }

    public function show($id)
    {
        $candidates = Candidate::find($id);
        return response()->json($candidates);
    }
    public function delete(Request $request)
    {
        DB::delete('delete from candidates where id = ?', [$request->id]);
        return redirect()->back()->with('msg', 'Candidate Deleted Successfully');
    }
}
