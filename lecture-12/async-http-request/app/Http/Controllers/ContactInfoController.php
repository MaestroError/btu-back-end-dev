<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactInfoController extends Controller
{
    public function getUser(Request $request, User $user) {
        $contact_info = $user->ContactInfo;
        return response()->json([
            "user" => $user,
            "contact" => $contact_info
        ]);
    }
}
