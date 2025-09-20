<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    public function index(){
        $calendar = new Calendar;
        $calendars = $calendar->all();

        $calendar_with_user = $calendar->with('users')->first()->toArray();
        var_dump($calendar_with_user);

        return view('calendars');
    }
}
