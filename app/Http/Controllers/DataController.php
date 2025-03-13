<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add_ons;
use App\Models\Booking;
use App\models\Ruangan;
use App\models\User;

class DataController extends Controller
{
    public function index(){
        $addons=Add_ons::all();
        $ruangan=Ruangan::all();
        $booking=Booking::all();
        $users=User::all();

        return view('dashboard/index',compact('addons','ruangan','booking','users'));
    }
    public function ruangan(){
        $addons=Add_ons::all();
        $ruangan=Ruangan::all();
        $booking=Booking::all();
        $users=User::all();

        return view('ruangan',compact('addons','ruangan','booking','users'));
    }
    public function booking(){
        $addons=Add_ons::all();
        $ruangan=Ruangan::all();
        $booking=Booking::all();
        $users=User::all();

        return view('booking',compact('addons','ruangan','booking','users'));
    }
}
