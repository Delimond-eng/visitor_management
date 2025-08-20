<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visit;
use App\Models\VisitHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $dailyVisits = Visit::with('histories')
                        ->whereDate('visit_date', Carbon::now())
                        ->orderBy('time_in')->where("account_id", Auth::user())
                        ->paginate(10);
        return view('dashboard', [
            "visits"=>$dailyVisits
        ]);
    }

    public function counts(){
        $dailyVisitCount  = Visit::whereDate('visit_date', Carbon::now())->where("account_id", Auth::user()->account_id)
                        ->count();
        $activeVisitor = Visit::whereDate("visit_date", Carbon::now())->where("account_id", Auth::user()->account_id)
                            ->where("time_out", null)->count();
        $allVisits = Visit::where("account_id", Auth::user()->account_id)->count();
        $allUsers = User::where("account_id", Auth::user()->account_id)->count();

        return response()->json([
            "count"=>[
                "daily"=>$dailyVisitCount,
                "active"=>$activeVisitor,
                "visitCount"=>$allVisits,
                "users"=>$allUsers
            ]
        ]);
    }


    public function getStories(){
        $histories = VisitHistory::with(['visit', 'user'])
        ->where("account_id", Auth::user()->account_id)
        ->orderBy('update_timestamp', 'desc')
        ->get();
        return view("stories", [
            "histories"=>$histories
        ]);
    }
}
