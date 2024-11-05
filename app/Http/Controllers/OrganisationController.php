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

class OrganisationController extends Controller
{
    public function index()
    {
        $organisation = Organisation::find(1);        
        // echo '<br/>Organisation: <br/>', $organisation;
        // echo '<br/>Organisation Location: <br/>', $organisation->locations;

        // $location = Location::find(1);        
        // echo '<br/>Location: <br/>', $location;
        // echo '<br/>Location Assets: <br/>', $location->assets;

        // $asset = Asset::find(1);       
        // echo '<br/>Asset: <br/>', $asset;
        // echo '<br/>Asset Rooms: <br/>', $asset->rooms;

        // $room = Room::find(1);
        // echo '<br/>Room: <br/>', $room;
        // echo '<br/>Room Asset: <br/>', $room->asset;
        // echo '<br/>Room Asset Location: <br/>', $room->asset->location;
        // echo '<br/>Room Asset Location Organisation: <br/>', $room->asset->location->organisation;        
        // ================= Dome Successfully 01 =============================== //

        // $serviceCategories = ServiceCategory::find(1);
        // echo '<br/>ServiceCategories:<br/>', $serviceCategories;
        // echo '<br/>serviceCategories Details:<br/>', $serviceCategories->serviceDetails;

        // $serviceDetails = ServiceDetail::all();
        // forEach($serviceDetails as $serviceDetail){
        //     echo '<br/><h2>ServiceDetail:</h2><br/>', $serviceDetail;
        //     echo '<br/>>>Charges:<br/>', $serviceDetail->serviceCharges;
        // }


        // ================= Dome Successfully 02 =============================== //

        

        // $guests = Guest::find(1);
        // echo '<br/>Guests:<br/>', $guests;
        // echo '<br/>Guests Teams:<br/>', $guests->teams;

        // $team = Team::find(1);
        // echo '<br/>Teams:<br/>', $team;
        // echo '<br/>Teams Guests:<br/>', $team->guests;
        // // ================= Dome Successfully 03 =============================== //
        
        // $trip = Trip::find(1);
        // echo '<br/>Trip:<br/>', $trip;
        // echo '<br/>Trip Requests:<br/>', $trip->requests;

        // forEach ($trip->requests as $request){
        //     echo '<br/>For Each Request:<br/>', $request;
        //     echo '<br/> > Response:<br/>', $request->response;            
        // }

        // echo '<br/>Trip Invoice:<br/>', $trip->invoice;

        // $inv = $trip->invoice;
        // echo '<br/>Invoice Trip:<br/>', $inv->trip;
        // echo '<br/>Invoice Trip Requests:<br/>', $inv->trip->requests;
        // forEach ($inv->trip->requests as $request){
        //     echo '<br/>For Each Request:<br/>', $request;
        //     echo '<br/> > Response:<br/>', $request->response;            
        // }
        // echo '<br/>Invoice Trip Payments:<br/>', $inv->trip->payments;
        // echo '<br/>Invoice Trip Team:<br/>', $inv->trip->team;
        // echo '<br/>Invoice Trip Team Guests:<br/>', $inv->trip->team->guests;

        // $request = TripRequest::find(1);
        // echo '<br/>Request:<br/>', $request;
        // echo '<br/>Requests Response:<br/>', $request->response;

        return view('components.organisation-component')
            ->with('organisation', $organisation);
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
