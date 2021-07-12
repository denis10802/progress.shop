<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index()
    {
        return view('users.home.index');
    }

    public function  showContacts()
    {
        return view('users.contact.index');
    }

    public function  showAbout()
    {
        return view('users.about.index');
    }


}
