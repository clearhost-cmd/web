<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Auction;

class AuctionController extends Controller
{
    public function index() {
        
        $auctions = Auction::all();

        return view('auctions')->with(['auctions' => $auctions]);
    } 
    
    public function users($id) {
        
        $users = Auction::findOrFail($id)->users()->withPivot('location')->get();

        return view('auctions.users')->with(['users' => $users]);
    }      
}
