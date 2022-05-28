<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserSubscribe;
use Stevebauman\Location\Facades\Location;

class formController extends Controller
{
    public function storeNewSubscriber(Request $request) {
        try {
            $data = $request->validate([
                'full_name' => 'required',
                'email' => 'email',
                'follow' => 'required|in:sports, tech, events, management',
            ]);
            $data['ip'] = $request->ip();
            $data['country'] = Location::get($request->ip())->countryName;
            if(!$data['country']) {
                $data['country'] = 'BOT';
            }
            Subscriber::create($data);
            Mail::to('nadimouertani@hotmail.com')->send(new UserSubscribe($data));
            return response([$data], '200');

        }catch(\Exception $e) {
            return response([$e->getMessage()], '401');
        }
    }
}
