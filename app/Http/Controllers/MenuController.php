<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Harimayco\Menu\Facades\Menu;


class MenuController extends Controller
{
    public function index(){
        $public_menu = Menu::getByName('Profile'); 


        return view('menu.index', compact('public_menu'));
    }
}
