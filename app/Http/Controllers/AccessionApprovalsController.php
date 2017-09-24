<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessionApprovalsController extends Controller
{
    public function pending()
    {
        return view('approval.pending');
    }

    public function approved()
    {
        return view('approval.approved');
    }
}
