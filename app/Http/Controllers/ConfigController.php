<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\ProfType;
use App\Models\VisitorType;
use App\Models\VisitPurpose;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function showConfigs(){
        $accountId = Auth::user()->account_id;
        $departments = Department::where("account_id", $accountId)->get();
        $profTypes = ProfType::where("account_id", $accountId)->get();
        $visitorTypes = VisitorType::where("account_id", $accountId)->get();
        $visitPurposes = VisitPurpose::where("account_id", $accountId)->get();
        return view("configs", [
            "departments"=>$departments,
            "profTypes"=>$profTypes,
            "visitorTypes"=>$visitorTypes,
            "visitPurposes"=>$visitPurposes
        ]);
    }
}
