<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Consent;
use Validator;
use Illuminate\Support\Facades\Auth;
use \Carbon\Carbon;
use Carbon\CarbonPeriod;


class CandidateController extends Controller
{
    public function index(Request $request)
    {
        $candidates = Candidate::all();
        return view('admin.candidate.index', ['candidates' => $candidates]);
    }

    public function add(Request $request)
    {
        $candidates = Candidate::all();
        return view('admin.candidate.add', ['candidates' => $candidates]);
    }

    public function save(Request $request)
    {
        $candidate = new Candidate;
        $candidate->user_id = Auth::id();
        $candidate->address = $request->address;
        $candidate->cnic = $request->cnic_number;
        $candidate->first_name = $request->name;
        $candidate->last_name = $request->name;
        $candidate->date_of_birth = $request->dob;
        $candidate->mobile = $request->number;
        $candidate->other_number = $request->other_number;
        $candidate->gender = $request->gender;
        $candidate->last_job = $request->last_job;
        $candidate->time_from_last_job = $request->time_from_last_job;
        $candidate->time_to_last_job = $request->time_to_last_job;
        $candidate->current_status_job = $request->current_status_job;
        $candidate->last_sallery = $request->last_sallery;
        $candidate->expected_sallery = $request->expected_sallery;
        $candidate->last_post = $request->last_post;
        $candidate->job_post = $request->job_post;
        $candidate->any_archivement = $request->any_archivement;
        $candidate->refrence_by = $request->refrence_by;
        $candidate->office_address = $request->office_address;
        $candidate->status_at_riuman = $request->status_at_riuman;
        $candidate->reason = $request->reason;
        $candidate->date_of_joining = $request->date_of_joining;


        // Process language array
        $languageStrings = [];
        foreach ($request->language as $lang) {
            $languageStrings[] = $lang; // Each $lang is already like "English Beginner"
        }
        $candidate->language = implode(', ', $languageStrings); // Save as a single string


        // dd($languageStrings);

        $candidate->save();


        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Candidate Added Successfully']);
        }

        return redirect()->route('user.candidate.index')->with('success', 'Candidate Added Successfully');
    }

    public function edit($id)
    {
        $candidates = Candidate::where('id', $id)->first();
        return view('admin.candidate.edit', ['candidates' => $candidates]);
    }


    public function update(Request $request)
    {
        // dd($request->all());
        $candidates = Candidate::find($request->id);
        $candidates->address = $request->address;
        $candidates->cnic = $request->cnic_number;
        $candidates->first_name = $request->name;
        $candidates->last_name = $request->name;
        $candidates->date_of_birth = $request->dob;
        $candidates->mobile = $request->number;
        $candidates->other_number = $request->other_number;
        $candidates->gender = $request->gender;
        $candidates->last_job = $request->last_job;
        $candidates->time_from_last_job = $request->time_from_last_job;
        $candidates->time_to_last_job = $request->time_to_last_job;
        $candidates->current_status_job = $request->current_status_job;
        $candidates->last_sallery = $request->last_sallery;
        $candidates->expected_sallery = $request->expected_sallery;
        $candidates->last_post = $request->last_post;
        $candidates->job_post = $request->job_post;
        $candidates->any_archivement = $request->any_archivement;
        $candidates->refrence_by = $request->refrence_by;
        // $candidates->language = $request->language;
        $candidates->office_address = $request->office_address;
        $candidates->status_at_riuman = $request->status_at_riuman;
        $candidates->reason = $request->reason;
        $candidates->date_of_joining = $request->date_of_joining;


        // Process language array
        $languageStrings = [];
        foreach ($request->language as $lang) {
            $languageStrings[] = $lang; // Each $lang is already like "English Beginner"
        }
        $candidates->language = implode(', ', $languageStrings); // Save as a single string

        $candidates->update();
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Candidate Updated Successfully']);
        }

        return redirect()->route('user.candidate.index')->with('success', 'Candidate Updated Successfully');
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
