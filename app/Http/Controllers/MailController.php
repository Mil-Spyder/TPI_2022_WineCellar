<?php

namespace App\Http\Controllers;

use App\Mail\DateAlertMail;
use App\Mail\DateAlertMarkdownMail;
use App\Mail\DangerMarkdownMail;
use App\Mail\ConsumableMarkdownMail;
use App\Mail\PeakMarkdownMail;
use App\Models\Bottle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function Bar()
    {
        $bottles = Bottle::all();
        $users = User::all();

        foreach ($bottles as $bottle) {
            foreach($users as $user){
                if ($bottle->consumable_date == Carbon::now()->format('Y')) {
                    Mail::to($user->email)->send(new ConsumableMarkdownMail($bottle));
                    
                    return view('emails.consumable',compact('bottles'));
    
                } elseif ($bottle->peak_date == Carbon::now()->format('Y')) {
                    Mail::to($user->email)->send(new PeakMarkdownMail($bottle));
                    return view('emails.peak',compact('bottles'));
    
                } elseif ($bottle->danger_date == Carbon::now()->format('Y')) {
                    Mail::to($user->email)->send(new DangerMarkdownMail($bottle));
                    return view('emails.danger',compact('bottles'));
                }
            }

            
        }
    }
}
