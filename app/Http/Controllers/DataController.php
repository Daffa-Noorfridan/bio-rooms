<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add_ons;
use App\Models\Booking;
use App\models\Ruangan;
use App\models\User;
use App\Models\Event;

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

        return view('ruangan/index',compact('addons','ruangan','booking','users'));
    }
    public function booking(){
        $addons=Add_ons::all();
        $ruangan=Ruangan::all();
        $booking=Booking::all();
        $users=User::all();

        return view('booking/index',compact('addons','ruangan','booking','users'));
    }
    public function detail(){
        $addons=Add_ons::all();
        $ruangan=Ruangan::all();
        $booking=Booking::all();
        $users=User::all();

        return view('ruangan/detail/index',compact('addons','ruangan','booking','users'));
    }
    public function notulen(){
        $addons=Add_ons::all();
        $ruangan=Ruangan::all();
        $booking=Booking::all();
        $users=User::all();

        return view('booking/notulen/index',compact('addons','ruangan','booking','users'));
    }
    public function show($id)
    {
        $room = Ruangan::findOrFail($id);
        $events = $room->events;
        return view('ruangan/detail/index', compact('room', 'events'));
    }
}
