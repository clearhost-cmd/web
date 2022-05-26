<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        
        $users = User::with('auctions')->get();

        return view('users')->with(['users' => $users]);
    }
    
    public function auctions($id) {
        
        $auctions = User::findOrFail($id)->auctions()->get();

        return view('users.auctions')->with(['auctions' => $auctions]);
    }     
}
