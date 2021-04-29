<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function profile() {
        $announcements=Auth::user()->announcement()->get();
        

        return view('profile', compact ('announcements'));
    }

    public function edit(Announcement $announcement)
    {
        return view('announcement.edit',compact('announcement'));
    }

}
