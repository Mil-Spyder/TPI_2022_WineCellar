<?php

namespace App\Http\Controllers;

use App\Mail\DateAlertMail;
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
       $bottles=Bottle::all();
        if($bottles->consumable_date==Carbon::now()->format('Y'))
        {
            Mail::to('test@mail.test')->send( new DateAlertMail());
            return view('emails.consumable');
        }
        elseif($bottles->peak_date==Carbon::now()->format('Y'))
        {
            Mail::to('test@mail.test')->send( new DateAlertMail());
            return view('emails.peak');
        }
        elseif($bottles->danger_date==Carbon::now()->format('Y'))
        {
            Mail::to('test@mail.test')->send( new DateAlertMail());
            return view('emails.danger');
        }
        
        
    }
}
