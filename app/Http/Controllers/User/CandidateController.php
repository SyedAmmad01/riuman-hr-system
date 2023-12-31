<?php

namespace App\Http\Controllers\User;

use App\Models\Candidate;
use App\Models\Consent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use \Carbon\Carbon;
use Carbon\CarbonPeriod;

class CandidateController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $candidates = Candidate::where('user_id', $id)->get();
        return view('user.candidate.index', ['candidates' => $candidates]);
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'cnic_number' => 'required',
            'name' => 'required',
            'dob' => 'required',
            'number' => 'required',
            'expected_sallery' => 'required',
            'job_post' => 'required',
            'refrence_by' => 'required',
            'language' => 'required',
        ]);

            $candidates = new Candidate;
            $candidates->user_id = Auth::user()->id;
            $candidates->address = $request->input('address');
            $candidates->cnic_number = $request->input('cnic_number');
            $candidates->name = $request->input('name');
            $candidates->dob = $request->input('dob');
            $candidates->number = $request->input('number');
            $candidates->last_job = $request->input('last_job');
            $candidates->time_from_last_job = $request->input('time_from_last_job');
            $candidates->time_to_last_job = $request->input('time_to_last_job');
            $candidates->current_status_job = $request->input('current_status_job');
            $candidates->last_sallery = $request->input('last_sallery');
            $candidates->expected_sallery = $request->input('expected_sallery');
            $candidates->last_post = $request->input('last_post');
            $candidates->job_post = $request->input('job_post');
            $candidates->any_archivement = $request->input('any_archivement');
            $candidates->refrence_by = $request->input('refrence_by');
            $candidates->language = $request->input('language');
            $candidates->save();
            $message = 'Candidate Added Successfully';
            return redirect('/user/index')->with('success', $message);
    }

    public function update(Request $request)
    {
            $candidates = Candidate::find($request->id);
            $candidates->cnic_number = $request->input('cnic_number');
            $candidates->name = $request->input('name');
            $candidates->dob = $request->input('dob');
            $candidates->number = $request->input('number');
            $candidates->last_job = $request->input('last_job');
            $candidates->time_from_last_job = $request->input('time_from_last_job');
            $candidates->time_to_last_job = $request->input('time_to_last_job');
            $candidates->current_status_job = $request->input('current_status_job');
            $candidates->last_sallery = $request->input('last_sallery');
            $candidates->expected_sallery = $request->input('expected_sallery');
            $candidates->last_post = $request->input('last_post');
            $candidates->job_post = $request->input('job_post');
            $candidates->any_archivement = $request->input('any_archivement');
            $candidates->refrence_by = $request->input('refrence_by');
            $candidates->language = $request->input('language');

            $candidates->update();
            $message = 'Candidate Updated Successfully';
            return redirect('/user/index')->with('success', $message);

    }

    public function delete(Request $request)
    {
        DB::delete('delete from candidates where id = ?', [$request->id]);
        return redirect()->back()->with('msg', 'Candidate Deleted Successfully');
    }

    public function edit($id)
    {
        $candidates = Candidate::find($id);
        return response()->json($candidates);
    }

    public function show($id)
    {
        $candidates = Candidate::find($id);
        return response()->json($candidates);
    }

    public function content(Request $request)
    {
        $contents = Candidate::find($request->id);
        $consents = Consent::where('candidate_id' , $request->id)->first();
        $date = Consent::where('candidate_id' , $request->id)->first();
        if($date == null){
        $start_date = '';
        $end_date   = '';
        }else{
        $start_date = $date->training_date_to;
        $end_date = $date->training_date_from;
        }
        $period = CarbonPeriod::create($start_date, $end_date);
            foreach ($period as $date) {
            $listOfDates[] = $date->format('Y-m-d');
            }
        $consent = Consent::join('candidates', 'consents.candidate_id', '=', 'candidates.id')->where([
            ['training_date_to', '=', $listOfDates],
            ['candidate_id', '=', $request->id],
             ])->get();
        $data = array(
         'contents' =>  $contents,
         'consents' =>  $consents,
         'consent'  =>  $consent,
        );
        return view('user.content.index')->with($data);
    }

    public function consent_form(Request $request)
    {
        $validated = $request->validate([
            'candidate_id' => 'required',
        ]);

        $get = DB::table('consents')->where([
            ['candidate_id', '=', $request->candidate_id],
        ])->get();
        // dd($get);
        if($get->count()>0){
            $message = 'Already Exists';
            return redirect()->back()->with('msg', $message);
        }
        else{
            $contents = new Consent;
            $contents->candidate_id = $request->input('candidate_id');
            $contents->status = $request->input('status');
            $contents->time = $request->input('time');
            $contents->reasons = $request->input('reasons');
            $contents->training_date_to = $request->input('training_date_to');
            $contents->training_date_from = $request->input('training_date_from');
            $contents->refrence_by = $request->input('refrence_by');
            $contents->save();
            $message = 'Details Added Successfully';
            return redirect()->back()->with('success', $message);
        }
    }
}


