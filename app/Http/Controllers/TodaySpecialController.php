<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodaySpecialController extends Controller
{
    public function todaySpecial(){
        return view('today-special')
                ->with('title', 'AADA Cafe - Today Special');
    }
}
