<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function profile() {
        // $announcements=Auth::user()->announcement()->get();
        

        return view('profile', compact ('announcements'));
    }

    public function edit(Announcement $announcement)
    {
        return view('announcement.edit',compact('announcement'));
    }

    public function locale($locale){
        session()->put('locale',$locale);
        return redirect()->back();
    }

    public function contacts(){
        return view('contatti');
    }

    public function submit(Request $req){
        $user = $req->input('user');
        $message = $req->input('message');
        $email = $req->input('email');

        $contact= compact('user','message');

        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('contatti'))->with('message','La tua richiesta è stata inoltrata,ti ricontatteremo al più presto!');
    }
}
