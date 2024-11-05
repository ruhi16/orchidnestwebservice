<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Organisation;
use App\Models\Location;
use App\Models\Asset;
use App\Models\Room;

use App\Models\ServiceCategory;
use App\Models\ServiceDetail;
use App\Models\ServiceCharge;

use App\Models\GuestTeam;
use App\Models\Team;
use App\Models\Guest;

use App\Models\Trip;
use App\Models\Request as TripRequest;
use App\Models\Response;
use App\Models\Payment;

class BookingController extends Controller{
    
    public function index(Request $request){
        $organisation = Organisation::find(1);
        $booking_date = $request->bdate;

        echo $booking_date;




        return view('components.booking-component')
            ->with('organisation', $organisation);
    }

    
    
    public function create(){
        //
    }

    
    public function store(Request $request){
        //
    }

    
    public function show($id){
        //
    }

    
    public function edit($id){
        //
    }

    
    public function update(Request $request, $id){
        //
    }

    
    public function destroy($id){
        //
    }
}
