<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function fetchData(Request $request)
    {
        $start_date = $request->from_start_date;
        $end_date = $request->end_start_date;

        $user = User::whereBetween('created_at',[$start_date,$end_date])
        ->orWhere('email', 'sabbirroxy38@gmail.com')->where('first_name', '!=', 'hossain')->first();

        Log::info($user);
        return view('welcome', compact('user'));
    }
}
