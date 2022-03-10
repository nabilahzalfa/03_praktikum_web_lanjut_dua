<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class TodaySpecialController extends Controller
{
    //
    public function todayspecial(){
        $all_menu = Menu::paginate(6);

        return view('today-special')
        ->with('title', 'AADA Cafe - Today Special')
        ->with('all_menu', $all_menu);
    }
}