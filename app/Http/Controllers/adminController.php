<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
class adminController extends Controller
{
    public function index() {
        $subscribers = Subscriber::all();
        return view('admin')->with('subscribers',$subscribers);
    }

    public function launchCampaign(Request $request) {
        dd($request->all());
        // TODO:: Create the campaing
    }
}
