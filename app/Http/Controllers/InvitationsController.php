<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationsController extends Controller
{
    public function store(Request $request)
    {
        // Accessible via ValidateRequests trait
        // Handles failed validation
        // Handles redirect
        $this->validate(
            $request,
            [
                'email.*' => 'required|email'
            ],
            [
                'email.*' => 'This is not a proper email address.'
            ]
        );

        return 'All items are valid email addresses.';
    }
}
