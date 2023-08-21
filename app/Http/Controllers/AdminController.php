<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\User;


class AdminController extends Controller
{

    public function dashboard()
    {
        return view('layouts.dashboard');
    }
//index
    public function index()
    {
        return view('admin.dashboard');
    }
//show all flights
    public function showAllFlights()
    {
        $flights = Flight::all();
        return view('admin.flights', compact('flights'));
    }
    public function showAllUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

}



