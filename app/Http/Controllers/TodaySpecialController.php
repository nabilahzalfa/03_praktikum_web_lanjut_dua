<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class TodaySpecialController extends Controller
{
    public function todaySpecial(){

        $menu_salted = Menu::find(4);
        $menu_pavlova = Menu::find(5);
        $menu_croissant = Menu::find(6);
        $menu_aglio = Menu::find(7);
        $menu_chamomile = Menu::find(8);
        $menu_pea = Menu::find(9);

        return view('today-special')
                ->with('title', 'AADA Cafe - Today Special')
                ->with('menu_salted', $menu_salted)
                ->with('menu_pavlova', $menu_pavlova)
                ->with('menu_croissant', $menu_croissant)
                ->with('menu_aglio', $menu_aglio)
                ->with('menu_chamomile', $menu_chamomile)
                ->with('menu_pea', $menu_pea);
    }
}
