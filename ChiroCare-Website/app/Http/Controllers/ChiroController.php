<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Date;
use App\User;

class ChiroController extends Controller
{
    public function getIndex() {

        return view ('index');
    	
    }

    public function postReservationDate(Request $request) {
        $user_id = Auth::id();
    	$res = new Date;
        $res->cus_id = $user_id;
    	$res->lname = $request->lname;
    	$res->date = $request->date;
    	$res->time = $request->time;
    	$res->cellphone_number = $request->phone;
    	$res->save();

        return redirect('home');
    }

    public function getDelete($id) {
        $date = Date::find($id)->delete();

        return redirect('/admin');
    }
}
