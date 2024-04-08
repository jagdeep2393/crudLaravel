<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{

    public function dashboard(){
        $user=Auth::user();
        $user_detail = DB::table('vicidial_remote_agents')
        ->select('status','conf_exten','closer_campaigns')
        ->where('user_start','=',$user->user)
        ->first();
        return view('agent.index',compact("user","user_detail"));        
    }
}
