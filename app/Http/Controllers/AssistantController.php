<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistantController extends Controller
{
    public function AssistantDashboard(){
        return view('assistant.assistant_dashboard');
    }
}
