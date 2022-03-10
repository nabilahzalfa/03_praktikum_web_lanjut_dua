<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        $menu_minuman = Menu::where('kategori','=','minuman')->get();

        return view ('menu')
                ->with('title', 'AADA Cafe - Menu')
                ->with('all_menu', $menu_minuman);
    }
    public function menuMakan(){
        $menu_makanan = Menu::where('kategori','=','makanan')->get();

        return view ('menu')
                ->with('title', 'AADA Cafe - Menu')
                ->with('all_menu', $menu_makanan);
    }
}
