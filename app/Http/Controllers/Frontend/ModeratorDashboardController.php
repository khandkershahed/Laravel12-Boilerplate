<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class ModeratorDashboardController extends Controller
{
    function index(): View
    {
        return view('moderator.dashboard');
    }
}
