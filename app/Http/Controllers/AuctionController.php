<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index() {
        
        $auctions = Auction::with('user')->get();

        return view('auctions')->with('auctions', $auctions);;
    }
}
