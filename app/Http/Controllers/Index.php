<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Event;
use Carbon\Carbon;

class Index extends Controller
{
    public function index()
    {
        $events = Event::whereDate('date', '>=', Carbon::now('America/Chicago'))->orderBy('date', 'asc')->whereDate('date', '>=', date(now()))->get();

        $products = Product::orderBy('created_at', 'desc')->get();
        return view('home', compact('events', 'products'));


    }
}
