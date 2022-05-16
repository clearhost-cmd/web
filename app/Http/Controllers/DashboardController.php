<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $auctions = Auth::user()->auction;

        return view('dashboard')->with('auctions', $auctions);
    }
}
