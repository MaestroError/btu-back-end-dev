<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        // Just render about page template from resources/views/pages/about.blade.php
        return view("pages.about");
    }

    public function postTest(Request $request) {
        // Get value of input "email"
        $email = $request->input("email");
        // return redirect on home page with session key "email"
        return redirect()->route("pages.home")->with('email', $email);
    }
}
