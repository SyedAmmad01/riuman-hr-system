<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use \Carbon\Carbon;
use App\Models\Candidate;
use App\Models\Consent;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function daily_report(Request $request){
        $date = Carbon::now()->toDateString();
        $dailys = Candidate::whereDate('created_at', $date)->get();
        $dailys_approved = Consent::join('candidates', 'consents.candidate_id', '=', 'candidates.id')
        ->select('consents.*' , 'candidates.first_name' , 'candidates.last_name')->whereDate('consents.created_at', $date)->where('consents.status', 1)->get();
        $dailys_rejected = Consent::join('candidates', 'consents.candidate_id', '=', 'candidates.id')
        ->select('consents.*' , 'candidates.first_name' , 'candidates.last_name')->whereDate('consents.created_at', $date)->where('consents.status', 0)->get();
        $data = array(
            'dailys' => $dailys,
            'dailys_approved' => $dailys_approved,
            'dailys_rejected' => $dailys_rejected,
        );
        return view('user.reports.daily')->with($data);
    }

    public function monthly_report(Request $request){
        $month = Carbon::now()->format('m');
        $monthlys = Candidate::whereMonth('created_at', $month)->get();
        $monthlys_approved = Consent::join('candidates', 'consents.candidate_id', '=', 'candidates.id')
        ->select('consents.*' , 'candidates.first_name' , 'candidates.last_name')->whereMonth('consents.created_at', $month)->where('consents.status', 1)->get();
        $monthlys_rejected = Consent::join('candidates', 'consents.candidate_id', '=', 'candidates.id')
        ->select('consents.*' , 'candidates.first_name' , 'candidates.last_name')->whereMonth('consents.created_at', $month)->where('consents.status', 0)->get();
        $data = array(
            'monthlys' => $monthlys,
            'monthlys_approved' => $monthlys_approved,
            'monthlys_rejected' => $monthlys_rejected,
        );
        return view('user.reports.monthly')->with($data);
    }

    public function yearly_report(Request $request){
        $year = Carbon::now()->format('Y');
        $yearlys = Candidate::whereYear('created_at', $year)->get();
        $yearlys_approved = Consent::join('candidates', 'consents.candidate_id', '=', 'candidates.id')
        ->select('consents.*' , 'candidates.first_name' , 'candidates.last_name')->whereYear('consents.created_at', $year)->where('consents.status', 1)->get();
        $yearlys_rejected = Consent::join('candidates', 'consents.candidate_id', '=', 'candidates.id')
        ->select('consents.*' , 'candidates.first_name' , 'candidates.last_name')->whereYear('consents.created_at', $year)->where('consents.status', 0)->get();
        $data = array(
            'yearlys' => $yearlys,
            'yearlys_approved' => $yearlys_approved,
            'yearlys_rejected' => $yearlys_rejected,
        );
        return view('user.reports.yearly')->with($data);

    }
}
