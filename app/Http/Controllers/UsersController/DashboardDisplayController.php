<?php

namespace App\Http\Controllers\UsersController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDisplayController extends Controller
{
    //
    public function dashboard() {
        return view('users.dashboard');
    }
    public function rates() {
        return view('users.rates');
    }
    public function coins() {
        return view('users.coins');
    }
    public function portfolio() {
        return view('users.portfolio');
    }
    public function trade() {
        return view('users.trade');
    }
    public function explore() {
        return view('users.explore');
    }
    public function feed() {
        return view('users.feed');
    }
}
